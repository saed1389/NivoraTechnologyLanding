@extends('backend.layouts.app')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-xl-4 col-sm-7 box-col-3">
                        <h3>Leads</h3>
                    </div>
                    <div class="col-5 d-none d-xl-block"></div>
                    <div class="col-xl-3 col-sm-5 box-col-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('back/assets/svg/icon-sprite.svg') }}#stroke-home"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Leads</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5>All Leads</h5>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="{{ route('admin.leads.export', request()->query()) }}" class="btn btn-success">
                                        <i class="fa fa-download"></i> Export CSV
                                    </a>
                                    <a href="{{ route('admin.scan.create') }}" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Scan New City
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="filter-form" method="GET" action="{{ route('admin.leads.index') }}" class="mb-4">
                                <div class="row g-3">
                                    <div class="col-md-2">
                                        <input type="text" name="city" class="form-control" placeholder="City" value="{{ request('city') }}" id="filter-city">
                                    </div>
                                    <div class="col-md-2">
                                        <select name="category" class="form-select" id="filter-category">
                                            <option value="">All Categories</option>
                                            @foreach($categories as $cat)
                                                <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select name="lead_category" class="form-select" id="filter-lead-category">
                                            <option value="">All Lead Types</option>
                                            <option value="hot" {{ request('lead_category') == 'hot' ? 'selected' : '' }}>Hot</option>
                                            <option value="warm" {{ request('lead_category') == 'warm' ? 'selected' : '' }}>Warm</option>
                                            <option value="cold" {{ request('lead_category') == 'cold' ? 'selected' : '' }}>Cold</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" name="min_score" class="form-control" placeholder="Min Score" value="{{ request('min_score') }}" id="filter-min-score">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="date" name="date_from" class="form-control" value="{{ request('date_from') }}" placeholder="From" id="filter-date-from">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="date" name="date_to" class="form-control" value="{{ request('date_to') }}" placeholder="To" id="filter-date-to">
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                        <a href="{{ route('admin.leads.index') }}" class="btn btn-secondary">Reset</a>
                                    </div>
                                </div>
                            </form>
                            <div id="leads-table-container">
                                @include('backend.leads._table', ['leads' => $leads])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="leadDetailModal" tabindex="-1" aria-labelledby="leadDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="leadDetailModalLabel">Lead Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="lead-detail-content">
                    Loading...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {

            const modalElement = document.getElementById('leadDetailModal');
            if (!modalElement) {
                console.error('❌ Modal element #leadDetailModal not found!');
            }

            let leadModal = null;
            if (typeof bootstrap !== 'undefined' && modalElement) {
                try {
                    leadModal = new bootstrap.Modal(modalElement);
                } catch (e) {
                    console.error('❌ Modal initialization error:', e);
                }
            }

            let filterTimer;
            $('#filter-form input, #filter-form select').on('change keyup', function() {
                clearTimeout(filterTimer);
                filterTimer = setTimeout(function() {
                    $('#filter-form').submit();
                }, 500);
            });

            $('#filter-form').on('submit', function(e) {
                e.preventDefault();
                let formData = $(this).serialize();
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'GET',
                    data: formData,
                    success: function(response) {
                        $('#leads-table-container').html(response.table);
                        attachViewButtons();
                    },
                    error: function(xhr) {
                        console.error('Filter error:', xhr);
                    }
                });
            });

            function attachViewButtons() {
                $('.view-lead-btn').off('click').on('click', function() {
                    let leadId = $(this).data('id');
                    console.log('View lead clicked, ID:', leadId);

                    if (!leadModal) {
                        alert('Modal is not available. Check Bootstrap JS.');
                        return;
                    }

                    $('#lead-detail-content').html(`
                        <div class="text-center py-4">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <p class="mt-2">Loading lead details...</p>
                        </div>
                    `);
                    leadModal.show();

                    $.ajax({
                        url: '{{ route("admin.leads.detail") }}',
                        type: 'GET',
                        data: { id: leadId },
                        success: function(data) {
                            $('#lead-detail-content').html(data);
                        },
                        error: function(xhr) {
                            $('#lead-detail-content').html(`
                        <div class="alert alert-danger">
                            Could not load lead details. Please try again.
                        </div>
                    `);
                            console.error('Detail error:', xhr);
                        }
                    });
                });
            }
            attachViewButtons();
        });
    </script>
@endpush
