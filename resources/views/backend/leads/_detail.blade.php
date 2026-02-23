<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <p><strong>ID:</strong> {{ $lead->id }}</p>
            <p><strong>Google Place ID:</strong> {{ $lead->google_place_id }}</p>
            <p><strong>Business Name:</strong> {{ $lead->business_name }}</p>
            <p><strong>Category:</strong> {{ $lead->category }}</p>
            <p><strong>City:</strong> {{ $lead->city }}</p>
            <p><strong>Country:</strong> {{ $lead->country }}</p>
            <p><strong>Phone:</strong> {{ $lead->phone ?? 'N/A' }}</p>
            <p><strong>Website:</strong> <a href="{{ $lead->website }}" target="_blank">{{ $lead->website ?? 'N/A' }}</a></p>
            <p><strong>Email:</strong> {{ $lead->email ?? 'N/A' }}</p>
        </div>
        <div class="col-md-6">
            <p><strong>Address:</strong> {{ $lead->address }}</p>
            <p><strong>Google Maps URL:</strong> <a href="{{ $lead->google_maps_url }}" target="_blank">View on Map</a></p>
            <p><strong>Latitude:</strong> {{ $lead->latitude }}</p>
            <p><strong>Longitude:</strong> {{ $lead->longitude }}</p>
            <p><strong>Rating:</strong> {{ $lead->rating }}</p>
            <p><strong>Review Count:</strong> {{ $lead->review_count }}</p>
            <p><strong>Business Status:</strong> {{ $lead->business_status }}</p>
            <p><strong>Lead Score:</strong> {{ $lead->lead_score }}</p>
            <p><strong>Lead Category:</strong> {{ $lead->lead_category }}</p>
            <p><strong>Scanned At:</strong> {{ $lead->scanned_at }}</p>
            <p><strong>Primary Type:</strong> {{ $lead->primary_type }}</p>
            <p><strong>All Types:</strong> <pre>{{ json_encode(json_decode($lead->all_types), JSON_PRETTY_PRINT) }}</pre></p>
        </div>
    </div>
</div>
