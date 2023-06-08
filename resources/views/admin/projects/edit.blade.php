@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Modifica il tuo progetto: {{ $project->title }} </h1>
        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $project->title }}">
            </div>
            <div class="mb-3">
                <label for="title">Description</label>
                <input type="text" class="form-control" name="description" id="description"
                    value="{{ $project->description }}">
            </div>

            <button type="submit" class="btn btn-outline-primary">Modifica</button>
            <button type="reset" class="btn btn-outline-warning"> Reset</button>
        </form>
    </div>
@endsection
