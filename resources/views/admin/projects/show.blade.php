@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Project Show</h1>
            <h1>{{ $project->title }}</h1>
            <p>{{ $project->description }}</p>
        </div>
    </section>
@endsection