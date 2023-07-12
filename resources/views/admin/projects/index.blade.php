@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        @foreach ($project as $element)
            <div class="card p-0 mb-4" style="width: 18rem;">
                <img class="card-img-top" src="{{ $element->image }}" alt="{{ $element->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $element->title }}</h5>
                    <a href="{{ route('admin.project.show', $element) }}" class="btn btn-primary">View details</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection