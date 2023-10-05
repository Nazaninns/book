@extends('layouts.layout')
@section('content')
@foreach($books as $book)
<div>
    <label >name:</label>
    {{$book->name}}<br>
    <label >price:</label>
    {{$book->price}}
</div>
@endforeach
@endsection
@section('pagination')
    {{$books->links()}}
@endsection
{{--{{$books->links()}}--}}
