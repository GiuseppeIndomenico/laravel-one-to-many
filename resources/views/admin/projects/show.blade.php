@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="display-1 text-center fw-semibold mb-3"> {{ $project->title }}</h1>
        <a class="btn btn-outline-warning" href="{{ route('admin.projects.edit', $project->slug) }}"> <i
                class="fa-solid fa-pencil"></i> Modifica</a>
        <p class="py-4">{{ $project->description }}</p>


    </div>
@endsection
