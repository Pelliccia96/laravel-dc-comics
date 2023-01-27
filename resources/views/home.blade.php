@extends('layouts.app')

@section('content')
<div class="text-center my-5">
    <h1 class="text-white">{{ $title }}</h1>
</div>
<div class="py-5 text-center border rounded">
    <a href="{{route("comics.index")}}"><button class="btn btn-primary">Go to Index</button></a>
    <a href="{{route("comics.create")}}"><button class="btn btn-info mx-4">Go to Create</button></a>
</div>
@endsection
