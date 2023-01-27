@extends('layouts.app')

@section('content')
    <div class="my-5 text-center">
        <h1 class="text-white py-3">Comics list</h1>
        <a href="{{ route('comics.create') }}" class="btn btn-primary fw-semibold mx-3">&plus; Add New Comics</a>
        <a href="{{route("home")}}"><button class="btn btn-danger fw-semibold">Back to Home</button></a>
    </div>
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-4 g-3">
            <div class="card h-100">
                <div class="row g-0">
                    <div class="col-md-4 border-end border-1">
                        <img src="{{ $comic->thumb }}" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $comic->series }}</h6>
                            <p class="text-secondary">{{ $comic->type }}</p>
                            <span class="mt-auto">$ {{ $comic->price }}</span>
                        </div>
                        <div class="card-footer d-flex align-items-center gap-4">
                            <a href="{{ route('comics.show', $comic->id) }}" class="text-decoration-none fw-semibold">Show more</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="text-decoration-none fw-semibold">Edit</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf()
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        @endforeach
    </div>
@endsection
