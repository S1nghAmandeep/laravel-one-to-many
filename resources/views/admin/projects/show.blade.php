@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Project Show</h1>
            <h1>{{ $project->title }}</h1>
            <p>{{ $project->description }}</p>
            @if ($project->category)
                <p>{{ $project->category->name }}</p>
            @endif
        </div>
    </section>
@endsection