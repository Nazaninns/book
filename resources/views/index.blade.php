@extends('layouts.layout')
@section('content')
    @foreach($books as $book)
        <div>
            <label>name:</label>
            {{$book->name}}<br>
            <label>isbn:</label>
            {{$book->isbn}}<br>
            <label>price:</label>
            {{$book->price}}
            <form method="get" action="{{ route('books.edit',$book) }}">
                @csrf
                <button type="submit">Edit</button>
            </form>

            <form method="post" action=" {{ route('books.destroy',$book) }}">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
@section('pagination')
    {{$books->links()}}
@endsection
{{--{{$books->links()}}--}}
