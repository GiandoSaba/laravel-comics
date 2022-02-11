@extends('guest.layout.base')

@section('documentTitle')
    {{ $nomePagina }}
@endsection

@section('content')
  <main>
    <div class="jumbotron">
        <div class="container">
            <h1>CURRENT SERIES</h1>
        </div>
    </div>
    <div class="main-content">
        <div class="container cards">
            @foreach ($comics as $comic)
            <div class="card">
                <div class="img-container">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
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
@endsection

@section('scripts')
  <script src="{{asset('js/app.js')}}"></script>
@endsection
