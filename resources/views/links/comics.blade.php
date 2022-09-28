@extends('structure.structure')

@section('page_title', 'Comics')

@section('content')
    <div class="comics-container">
        <div class="current-series btn">CURRENT SERIES</div>
        <div class="card-container">
            @foreach ($items as $item)
                <div class="card">
                    <a href="#">
                        <img src="{{$item['thumb']}}" alt="$item['title']">
                        <div>{{$item['series']}}</div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="d-flex">
            <div class="btn">
                <a href="#">
                    LOAD MORE
                </a>
            </div>
        </div>
    </div>
    
@endsection