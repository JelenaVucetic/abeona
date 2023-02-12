@extends('layouts.app')

@section('content')
    <h1>List of cars</h1>
    <a href="{{ route('cars.create') }}">Create</a>
@endsection
