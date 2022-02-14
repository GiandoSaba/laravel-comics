@extends('guest.layout.base')

@section('documentTitle')
    {{ $nomePagina }}
@endsection

@section('content')
  <main>
    <div class="jumbotron_comic">
        <div class="blue_bottom"></div>
        <div class="thumb_comic">
            <div class="image">
                <span class="abs title">COMIC BOOK</span>
                <span class="abs bottom_text">VIEW GALLERY</span>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
        </div>
    </div>
    <div class="content">
        <div class="box_info d-flex">
            <div class="info">
                <h1>{{ $comic['title'] }}</h1>
                <div class="price d-flex">
                    <div class="d-flex w-60">
                        <div class="price_left">
                            U.S. Price: <span class="white">{{ $comic['price'] }}</span>
                        </div>
                        <div class="price_right">AVAILABLE</div>
                    </div>
                    <div class="w-40">
                        <div class="check_available white">
                            Check Availability <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                </div>
                <div class="description">
                    {{ $comic['description'] }}
                </div>
            </div>
            <div class="adv">
                <span>ADVERTISMENT</span>
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
  </main>
@endsection

@section('scripts')
  <script src="{{asset('js/app.js')}}"></script>
@endsection
