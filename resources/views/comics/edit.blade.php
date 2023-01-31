@extends('layouts.app')

@section('content')
<div>
    <div class="text-center my-4">
        <h1 class="text-white">Edit Comics #{{ $comic->id }}</h1>
    </div>
    {{-- Validazione Dati --}}
    @if($errors->any())
    <div>
        <div class="alert alert-danger">I dati inseriti non sono validi:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <div>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="p-5">
            @csrf
            @method('put')

            <label class="form-label">Title: </label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                value="{{ $errors->has('title') ? '' : old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            <label class="form-label">Description: </label>
            <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" rows="3"
            value="{{ $errors->has('description') ? '' : old('description') }}"></textarea>
            @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label class="form-label">Thumb: </label>
            <input type="text" name="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="null"
            value="{{ $errors->has('thumb') ? '' : old('thumb') }}">
            @error('thumb')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label class="form-label">Price: </label>
            <input type="number" step="0.01" name="price" class="form-control @error('price') is-invalid @enderror"
            value="{{ $errors->has('price') ? '' : old('price') }}">
            @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label class="form-label">Series: </label>
            <input type="text" name="series" class="form-control @error('series') is-invalid @enderror"
            value="{{ $errors->has('series') ? '' : old('series') }}">
            @error('series')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label class="form-label">Sale date: </label>
            <input type="date" name="sale_date" class="form-control @error('sale_date') is-invalid @enderror"
            value="{{ $errors->has('sale_date') ? '' : old('sale_date') }}">
            @error('sale_date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label class="form-label">Type: </label>
            <input type="text" name="type" class="form-control @error('type') is-invalid @enderror"
            value="{{ $errors->has('type') ? '' : old('type') }}">
            @error('type')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <div class="mt-4">
                <button type="submit" class="btn btn-primary me-3">Edit</button>
            </div>
        </form>
        <div class="text-center">
            <a href="{{route("comics.index")}}"><button class="btn btn-danger">Back to Home</button></a>
        </div>
    </div>
</div>
@endsection
