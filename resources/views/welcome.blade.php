<div>
    @extends('layouts.navbar')
</div>
@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="container col-12 h1">
                Twoje wymarzone auto, na którę cię stać
                <hr class="my-4" style="border-top: 3px solid;">
            </div>
            <div class="container col-12 h2">
                Wynajem samochodów sportowych,eksluzywnych i limuzyn.<br>
                Gwarantujemy najniższą cene
            </div>
            <div class="container col-8 my-4 ">
                <img src="{{ asset('storage\images\camaro.png') }}" class="card-img-top" alt="camaro">
            </div>
            <div class="container shadow mb-5 py-3">
                <div class="container h2">Znajdź auto</div>
                <div class="container">
                    <form method="get" class="col-9 container">
                        <div class="row">
                            <div class="container col-3">
                                <label for="datePicker" class="form-label">Model auta</label>
                                <select class="form-select" name="carModel" aria-label="Default select example">
                                    <option selected>Wybierz model</option>
                                    <option value="1">One</option> //to będzie z bazy
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="container col-3">
                                <label for="datePicker" class="form-label">Data wypożyczenia</label>
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="container col-3 pt-3">
                                <button type="submit" class="btn btn-lg btn-success">Znajdź</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="container h1 text-center">
                        Cechuje nas
                    </div>
                    <div class="container col-3">
                        <hr class="my-4" style="border-top: 3px solid;">
                        <h3>Szybkość dostarczania samochodów</h3>
                        <img src="{{ asset('storage\images\szybkosc.png') }}" class="card-img-top w-50 mt-2" alt="szybko">
                    </div>
                    <div class="container col-3">
                        <hr class="my-4" style="border-top: 3px solid;">
                        <h3 class="">Obsługa klienta</h3>
                        <img src="{{ asset('storage\images\telefon.png') }}" class="card-img-top w-50" alt="telefon">
                    </div>
                    <div class="container col-3">
                        <hr class="my-4" style="border-top: 3px solid;">
                        <h3>Zadbane samochody</h3>
                        <img src="{{ asset('storage\images\gabka.png') }}" class="card-img-top w-50 mt-4" alt="gabka">
                    </div>
                    <div class="container col-3">
                        <hr class="my-4" style="border-top: 3px solid;">
                        <h3>Rzadko spotykane klasyki oraz samochody sportowe</h3>
                        <img src="{{ asset('storage\images\car.png') }}" class="card-img-top w-50" alt="samochod">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

