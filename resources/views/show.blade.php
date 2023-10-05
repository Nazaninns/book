@extends('layouts.layout')
@section('content')

    <label>Name:</label>
    {{ $book->name }}<br>
    <label>ISBN:</label>
    {{ $book->isbn }}<br>
    <label>Price:</label>
    {{ $book->price }}

@endsection

{{--{{$books->links()}}--}}
