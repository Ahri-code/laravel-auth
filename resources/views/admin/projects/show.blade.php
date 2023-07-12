@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <h1>{{ $project->title }}</h1>
        <h3>Categoria: {{ $project->category ? $project->category->name : "Senza categoria" }}</h3>
        {{-- <h2>Categoria: {{ $project->category?->name }}</h2> --}}
        <p>{{ $project->description }}</p>
        <img src="{{ $project->image }}" alt="{{ $project->title }}" />
    </div>
</div>

@endsection