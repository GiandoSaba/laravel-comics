@extends('guest.layout.base')

@section('documentTitle')
    {{ $nomePagina }}
@endsection

@section('content')
  <main>
    <div class="jumbotron_home">
        <div class="container">
            <h1>CURRENT SERIES</h1>
        </div>
    </div>
    <div class="main-content">
        <div class="container cards">
            @foreach ($comics as $comic)
            <div class="card">
                <div class="img-container">
                    <a href="/comic/{{$comic['id']}}"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}"></a>
                </div>
                <h1>{{ $comic['series'] }}</h1>
            </div>
            @endforeach
        </div>
        <div class="more-content">
            <h2>Load More</h2>
        </div>
    </div>
  </main>
  <div class="footer-card">
        <div class="container">
            <div class="footer-card-item">
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="buy-comics-digital-comics">
                <span>Digital Comics</span>
            </div>
            <div class="footer-card-item">
                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="buy-comics-merchandise">
                <span>DC Merchandise</span>
            </div>
            <div class="footer-card-item">
                <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="buy-comics-subscriptions">
                <span>subscriptions</span>
            </div>
            <div class="footer-card-item">
                <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="buy-comics-shop-locator">
                <span>comic shop locator</span>
            </div>
            <div class="footer-card-item">
                <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="buy-dc-power-visa">
                <span>dc power visa</span>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
  <script src="{{asset('js/app.js')}}"></script>
@endsection
