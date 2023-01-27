@extends('layouts.app')

@section('content')
<div class="my-5">
    <div class="text-center">
        <h1 class="text-primary">{{ $comic->title }}</h1>
    </div>
    <div class="row">
        <div class="col-auto">
            <div>
                <img src="{{ $comic->thumb }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col">
            <div class="text-white">
                <h4>Description:</h4>
                <p>{{ $comic->description }}</p>
            </div>
            <ul class="list-group list-flush">
                <li class="list-group-item">
                    <span class="fw-bold">Series: </span> <span>{{ $comic->series }}</span>
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Type: </span>
                    <span>{{ $comic->type }}</span>
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Price: </span>
                    <span>$ {{ $comic->price }}</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="text-center mt-5">
        <a href="{{route("home")}}"><button class="btn btn-primary">Back to Home</button></a>
    </div>
</div>
@endsection
