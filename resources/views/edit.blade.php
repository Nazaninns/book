@extends('layouts.layout')
@section('content')

    <form method="post" action="{{ route('books.update',$book) }}">
        @csrf
        @method('PATCH')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $book->name }}"><br>
        @error('name')
            {{ $message }}
        @enderror

        <label>ISBN:</label>
        <input type="number" name="isbn" value="{{ $book->isbn }}"><br>
        @error('isbn')
        {{ $message }}
        @enderror
        <label>Price:</label>
        <input type="number" name="price" value="{{ $book->price }}"><br>
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>

@endsection

{{--{{$books->links()}}--}}
