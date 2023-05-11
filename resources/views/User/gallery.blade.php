@extends('layouts.navbar')

@section('content')
    @foreach($images as $file)
        <img src="{{ asset('storage/cars/'.$file) }}">
    @endforeach

@endsection
