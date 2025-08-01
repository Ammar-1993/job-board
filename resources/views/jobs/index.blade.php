<div>
    <h1>Job Board</h1>
@foreach ($jobs as $job)
    <div class="job">
        <h2>{{ $job['title'] }}</h2>
        {{-- <p>{{ $job->description }}</p> --}}
        <p><strong>Company:</strong> {{ $job['company'] }}</p>
        <p><strong>Location:</strong> {{ $job['location'] }}</p>
        <p><strong>Salary:</strong> {{ $job['salary'] }}</p>
        {{-- <a href="{{ route('jobs.show', parameters: $job->id) }}" class="btn btn-primary">View Details</a> --}}
    </div>
    
@endforeach
</div>
