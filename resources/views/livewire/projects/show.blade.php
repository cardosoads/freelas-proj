<div>
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    @foreach ($project->tech_stack as $stack)
        <span class="badge badge-primary">{{ $stack }}</span>
    @endforeach
</div>
