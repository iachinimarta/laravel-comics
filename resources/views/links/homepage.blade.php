@extends('structure.structure')

@section('page_title', 'HomePage')

@section('content')
    <div class="bonus">
        <ul>
            <li>
                <div class="img-container">
                    <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="digital-comics">
                </div>
                <h3>
                    DIGITAL COMICS
                </h3>
            </li>
            <li>
                <div class="img-container">
                    <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="merchandise">
                </div>
                <h3>
                    DC MERCHANDISE
                </h3>
            </li>
            <li>
                <div class="img-container">
                    <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="subscription">
                </div>
                <h3>
                    SUBSCRIPTION
                </h3>
            </li>
            <li>
                <div class="img-container">
                    <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="shop-locator">
                </div>
                <h3>
                    COMIC SHOP LOCATOR
                </h3>
            </li>
            <li>
                <div class="img-container">
                    <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="power-visa">
                </div>
                <h3>
                    DC POWER VISA
                </h3>
            </li>
        </ul>
    </div>
@endsection