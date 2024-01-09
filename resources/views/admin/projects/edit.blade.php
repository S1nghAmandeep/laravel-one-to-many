@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>hello World edit</h1>
            <div class="container">
                <form action="{{ route('admin.projects.update', $project) }}" method="POST" >
            
                  @csrf
                    @method('PUT')
                  <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Titolo" value="{{ $project->title }}">
                  </div>
                  <div class="mb-3">
                    <label for="link_project" class="form-label">Project (url)</label>
                    <input type="url" class="form-control" name="link_project" id="link_project" placeholder="Url Project" value="{{ $project->link_project }}">
                  </div>
                  <div class="mb-3">
                    <label for="language" class="form-label">Language</label>
                    <input type="text" class="form-control" name="language" id="language" placeholder="Language" value="{{ $project->language }}">
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrivi il comic">{{ $project->description }}
                    </textarea>
                  </div>
            
                  <div class="">
                    <input type="submit" class="btn btn-primary" value="create">
                  </div>
            
                </form>
              </div>
        </div>
    </section>
@endsection