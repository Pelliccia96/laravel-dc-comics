@extends('layouts.app')

@section('content')
<div>
    <div class="text-center my-4">
        <h1 class="text-white">Edit Comics #{{ $comic->id }}</h1>
    </div>
    <div>
        <form action="{{ route('comics.store') }}" method="POST" class="p-5">
            @csrf

            <label class="form-label">Title: </label>
            <input type="text" name="title" class="form-control">

            <label class="form-label">Description: </label>
            <input type="text" name="description" class="form-control">

            <label class="form-label">Thumb: </label>
            <input type="text" name="thumb" class="form-control" placeholder="null">

            <label class="form-label">Price: </label>
            <input type="number" step="0.01" name="price" class="form-control">

            <label class="form-label">Series: </label>
            <input type="text" name="series" class="form-control">

            <label class="form-label">Sale date: </label>
            <input type="date" name="sale_date" class="form-control">

            <label class="form-label">Type: </label>
            <input type="text" name="type" class="form-control">

            <div class="mt-4">
                <button type="submit" class="btn btn-primary me-3">Edit</button>
                <a href="{{route("home")}}"><button class="btn btn-danger">Back to Home</button></a>
            </div>
        </form>
    </div>
</div>
@endsection
