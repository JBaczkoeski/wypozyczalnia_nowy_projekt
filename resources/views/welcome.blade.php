<div>
    @extends('layouts.navbar')
</div>
@section('content')
    <div class="container text-white  text-center ">
        <div class="row">
            <div class="container col-12 h1">
                Twoje wymarzone auto, na którę cię stać
                <hr class="my-4" style="border-top: 3px solid #ffff00;">
            </div>
            <div class="container col-12 h2">
                Wynajem samochodów sportowych,eksluzywnych i limuzyn.<br>
                Gwarantujemy najniższą cene
            </div>
            <div class="container col-8 my-4 ">
                <img src="{{ asset('storage\images\camaro.png') }}" class="card-img-top" alt="camaro">
            </div>
            <div class="container">
                <div class="row">
                    <div class="container h1 text-center">
                        Cechuje nas
                    </div>
                    <div class="container col-3">
                        <hr class="my-4" style="border-top: 3px solid #ffff00;">
                        <h3>Szybkość dostarczania samochodów</h3>
                        <img src="{{ asset('storage\images\zegar.png') }}" class="card-img-top w-75" alt="zegar">
                    </div>
                    <div class="container col-3">
                        <hr class="my-4" style="border-top: 3px solid #ffff00;">
                        <h3>Obsługa klienta</h3>
                        <img src="{{ asset('storage\images\telefon.png') }}" class="card-img-top w-75" alt="zegar">
                    </div>
                    <div class="container col-3">
                        <hr class="my-4" style="border-top: 3px solid #ffff00;">
                        <h3>Zadbane samochody</h3>
                        <img src="{{ asset('storage\images\zegar.png') }}" class="card-img-top w-75" alt="zegar">
                    </div>
                    <div class="container col-3">
                        <hr class="my-4" style="border-top: 3px solid #ffff00;">
                        <h3>Rzadko spotykane klasyki oraz samochody sportowe</h3>
                        <img src="{{ asset('storage\images\zegar.png') }}" class="card-img-top w-75" alt="zegar">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
