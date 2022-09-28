@extends('structure.structure')
@section('page_title', 'Details')

@section('content')
        <div class="singleComic-container">
            <div class="blue-section">
                <img src="{{$singleComic['thumb']}}" alt="{{$singleComic['title']}}" class="singleComic-thumb">
            </div>
            <div class="singleComic-description">
                <div class="up">
                    <h1>{{$singleComic['title']}}</h1>
                    <div class="singleComic-price">U.S. Price: {{$singleComic['price']}}</div>
                    <div class="singleComic-text">{{$singleComic['description']}}</div>
                </div>
                <div class="down">
                    <div class="singleComic-talent">
                        <h3>Talent</h3>
                        <div class="by">
                            <div>Art by:</div>
                            <div class="right-section">{{implode(", ", $singleComic['artists'])}}</div>
                        </div>

                        <div class="by">
                            <div>Written by:</div>
                            <div class="right-section">{{implode(", ", $singleComic['writers'])}}</div>
                        </div>
                    </div>

                    <div class="singleComic-specs">
                        <h3>Specs</h3>
                        <div class="by">
                            <div>Series:</div>
                            <div class="right-section">{{strtoupper($singleComic['series'])}}</div>
                        </div>
                        <div class="by">
                            <div>U.S. Price:</div>
                            <div class="right-section">{{$singleComic['price']}}</div>
                        </div>
                        <div class="by">
                            <div>On Sale Date:</div>
                            <div class="right-section">{{date("d-m-Y", strtotime($singleComic['sale_date']))}}</div>
                        </div>
                    </div>
                    
                </div>          
            </div>
            
            
            
        </div>
@endsection