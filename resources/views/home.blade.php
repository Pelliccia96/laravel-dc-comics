@extends('layouts.app')

@section('content')
<div class="text-center my-5">
    <h1 class="text-white">{{ $title }}</h1>
</div>
<div class="bg-secondary my-5 border rounded">
    <div class="text-center py-5">
        <h2 class="text-white fw-bold">HOME PAGE</h2>
    </div>
    <div class="py-5 mb-5 text-center">
        <a href="{{route("comics.index")}}"><button class="btn btn-primary">Go to Index</button></a>
        <a href="{{route("comics.create")}}"><button class="btn btn-info mx-4">Go to Create</button></a>
    </div>
</div>
@endsection
