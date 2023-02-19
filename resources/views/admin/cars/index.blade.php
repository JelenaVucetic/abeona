@extends('layouts.app')

@section('content')
    <h1>List of cars</h1>

    @foreach ($cars as $car )
        {{$car->name}}
        <br>
        @foreach ($car->images as $image)
            {{$image->path}}
            <br>
            <img src="{{$image->path}}">
        @endforeach
    @endforeach

    <a href="{{ route('cars.create') }}">Create</a>
@endsection
