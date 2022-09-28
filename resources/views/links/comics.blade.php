@extends('structure.structure')

@section('page_title', 'Comics')

@section('content')
    @foreach ($singleComic as $comic)
        <div class="single-comic">
            <div>{{$comic['title']}}</div>
            <div>{{$comic['price']}}</div>
            <div>{{$comic['description']}}</div>
        </div>
        
    @endforeach
@endsection

