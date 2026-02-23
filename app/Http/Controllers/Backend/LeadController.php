<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index(Request $request)
    {
        $query = Lead::query();

        if ($request->filled('city')) {
            $query->where('city', 'LIKE', '%' . $request->city . '%');
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('lead_category')) {
            $query->where('lead_category', $request->lead_category);
        }

        if ($request->filled('min_score')) {
            $query->where('lead_score', '>=', $request->min_score);
        }

        if ($request->filled('date_from')) {
            $query->whereDate('scanned_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('scanned_at', '<=', $request->date_to);
        }

        $query->orderBy('lead_score', 'desc')->orderBy('scanned_at', 'desc');

        $leads = $query->paginate(20)->withQueryString();

        // If AJAX request, return only the table partial and pagination
        if ($request->ajax()) {
            $table = view('backend.leads._table', compact('leads'))->render();
            return response()->json(['table' => $table]);
        }

        $categories = Lead::distinct()->pluck('category')->sort()->values();

        return view('backend.leads.index', compact('leads', 'categories'));
    }

    public function export(Request $request)
    {
        $query = Lead::query();

        if ($request->filled('city')) {
            $query->where('city', 'LIKE', '%' . $request->city . '%');
        }
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        if ($request->filled('lead_category')) {
            $query->where('lead_category', $request->lead_category);
        }
        if ($request->filled('min_score')) {
            $query->where('lead_score', '>=', $request->min_score);
        }
        if ($request->filled('date_from')) {
            $query->whereDate('scanned_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('scanned_at', '<=', $request->date_to);
        }

        $leads = $query->orderBy('lead_score', 'desc')->get();

        $filename = 'leads_' . now()->format('Y-m-d_His') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $columns = [
            'ID', 'Business Name', 'Category', 'City', 'Country', 'Phone',
            'Website', 'Address', 'Rating', 'Reviews', 'Lead Score', 'Lead Category', 'Scanned At'
        ];

        $callback = function () use ($leads, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($leads as $lead) {
                fputcsv($file, [
                    $lead->id,
                    $lead->business_name,
                    $lead->category,
                    $lead->city,
                    $lead->country,
                    $lead->phone,
                    $lead->website,
                    $lead->address,
                    $lead->rating,
                    $lead->review_count,
                    $lead->lead_score,
                    $lead->lead_category,
                    $lead->scanned_at,
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
    /**
     * Show lead details for modal.
     */
    public function detail(Request $request)
    {
        $lead = Lead::findOrFail($request->id);
        return view('backend.leads._detail', compact('lead'));
    }
}
