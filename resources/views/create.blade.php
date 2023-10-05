@extends('layouts.layout')
@section('content')

    <form method="post" action="{{ route('books.store') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name"><br>
        <label>ISBN:</label>
        <input type="number" name="isbn"><br>
        <label>Price:</label>
        <input type="number" name="price"><br>
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>

@endsection

{{--{{$books->links()}}--}}
