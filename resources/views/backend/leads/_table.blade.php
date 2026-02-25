<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Business Name</th>
            <th>Category</th>
            <th>City</th>
            <th>Phone</th>
            <th>Rating</th>
            <th>Lead Score</th>
            <th>Lead Type</th>
            <th>Scanned</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($leads as $lead)
            <tr>
                <td>{{ $lead->id }}</td>
                <td>{{ $lead->business_name }}</td>
                <td>{{ $lead->category }}</td>
                <td>{{ $lead->city }}</td>
                <td>{{ $lead->phone }}</td>
                <td>{{ $lead->rating }} ({{ $lead->review_count }})</td>
                <td>
                    <div class="progress" style="height: 20px;">
                        <div class="progress-bar
                        @if($lead->lead_category == 'hot') bg-danger
                        @elseif($lead->lead_category == 'warm') bg-warning
                        @else bg-secondary @endif"
                             role="progressbar"
                             style="width: {{ $lead->lead_score }}%;"
                             aria-valuenow="{{ $lead->lead_score }}"
                             aria-valuemin="0"
                             aria-valuemax="100">
                            {{ $lead->lead_score }}
                        </div>
                    </div>
                </td>
                <td>
                    <span class="badge
                        @if($lead->lead_category == 'hot') bg-danger
                        @elseif($lead->lead_category == 'warm') bg-warning
                        @else bg-secondary @endif">
                        {{ ucfirst($lead->lead_category) }}
                    </span>
                </td>
                <td>{{ $lead->scanned_at->format('Y-m-d') }}</td>
                <td>
                    <button class="btn btn-sm btn-info view-lead-btn" data-id="{{ $lead->id }}" title="View Details">
                        <i class="fa fa-eye"></i>
                    </button>
                    <a href="{{ $lead->google_maps_url }}" target="_blank" class="btn btn-sm btn-info" title="View on Maps">
                        <i class="fa fa-map-marker"></i>
                    </a>
                    @if($lead->phone)
                        <a href="tel:{{ $lead->phone }}" class="btn btn-sm btn-success" title="Call">
                            <i class="fa fa-phone"></i>
                        </a>
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="10" class="text-center">No leads found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

<!-- Pagination -->
<div class="mt-3">
    {{ $leads->withQueryString()->links('pagination::bootstrap-5') }}
</div>
