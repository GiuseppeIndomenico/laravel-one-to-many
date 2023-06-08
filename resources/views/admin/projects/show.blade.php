@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="display-1 text-center fw-semibold mb-3"> {{ $project->title }}</h1>
        <a class="btn btn-outline-warning" href="{{ route('admin.projects.edit', $project->slug) }}"> <i
                class="fa-solid fa-pencil"></i> Modifica</a>
        <p class="py-4"> <span class="fw-bold"> Nome del progetto: </span> {{ $project->description }}</p>
        <p><span class="fw-bold">tipologia di progetto:</span> {{ $project->type->name }}</p>




    </div>
@endsection
