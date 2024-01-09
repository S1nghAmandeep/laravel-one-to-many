@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Project Link</th>
                        <th>Language</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td><a href="{{ route('admin.projects.show', $project) }}">{{ $project->title }}</a></td>
                            <td><a href="#">{{ $project->link_project }}</a></td>
                            <td>{{ $project->language }}</td>
                            <td><a class="btn btn-primary btn-sm" href="{{ route('admin.projects.edit', $project) }}">edit</a></td>
                            <td>
                                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">

                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No Project</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection