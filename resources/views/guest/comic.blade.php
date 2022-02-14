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
    <div class="talent_spec bg-grey">
        <div class="d-flex container-talent">
            <div class="talent">
                <h2>Talent</h2>
                <hr>
                <div class="d-flex">
                    <div class="title">Art by:</div>

                    <div class="description">
                        @foreach ($comic['artists'] as $artist)
                            {{ $artist }},
                        @endforeach
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="title">Written by:</div>
                    <div class="description">
                         @foreach ($comic['writers'] as $writer)
                            {{ $writer }},
                        @endforeach
                    </div>
                </div>
                <hr>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <hr>
                <div class="d-flex">
                    <div class="title">Series:</div>
                    <div class="description">{{ $comic['series'] }}</div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="title">U.S. Price:</div>
                    <div class="description">{{ $comic['price'] }}</div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="title">On Sale Date:</div>
                    <div class="description">{{ $comic['sale_date'] }}</div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="shop-ico bg-grey">
        <div class="container-shop d-flex">
            <div class="d-flex">
                <h3>DIGITAL COMICS</h3>
                <img src="{{asset('img/cta-phone.png')}}" alt="phone">
            </div>
            <div class="d-flex">
                <h3>SHOP DC</h3>
                <img src="{{asset('img/cta-card.png')}}" alt="card">

            </div>
            <div class="d-flex">
                <h3>COMIC SHOP LOCATOR</h3>
                <img src="{{asset('img/cta-locator.png')}}" alt="locator">

            </div>
            <div class="d-flex">
                <h3>SUBSCRIPTION</h3>
                <img src="{{asset('img/cta-tshirt.png')}}" alt="tshirt">

            </div>
        </div>
    </div>
  </main>
@endsection

@section('scripts')
  <script src="{{asset('js/app.js')}}"></script>
@endsection
