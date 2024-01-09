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
            <ul>
                <li class="mb-3">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.projects.edit', $project) }}">Edit</a>
                </li>
                <li>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </li>
            </ul>
           
        
        </div>
    </section>
@endsection