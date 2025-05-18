<div class="grid grid-cols-2 gap-4">
    @foreach ($this->projects as $project)

        <x-projects.simple-card :project="$project" />

    @endforeach
</div>
