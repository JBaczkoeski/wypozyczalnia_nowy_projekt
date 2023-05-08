@extends('layouts.AdminNavbar')

@section('content')
    <div class="container my-5 ">
        <div class="col-lg-6 col-7 container text-center border border-3">
            <div class="row">
                <div class="container h2 mt-5 pb-1">Dodawanie samochodu</div>
                <form method="POST" action="#">
                    @csrf
                    <div class="row my-4">
                        <label for="mark" class="col-md-4 col-form-label text-md-end">Marka</label>

                        <div class="col-md-6">
                            <input id="mark" type="text" class="form-control @error('email') is-invalid @enderror"
                                   name="mark" required autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row my-4">
                        <label for="model" class="col-md-4 col-form-label text-md-end">Model</label>

                        <div class="col-md-6">
                            <input id="model" type="text"
                                   class="form-control @error('password') is-invalid @enderror" name="model" required>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-4">
                        <label for="year_production" class="col-md-4 col-form-label text-md-end">Rok produkcji</label>

                        <div class="col-md-6">
                            <input id="year_production" type="date"
                                   class="form-control" name="year_of_production" required>
                        </div>
                    </div>
                    <div class="row my-4">
                        <label for="model" class="col-md-4 col-form-label text-md-end">Rodzaj paliwa</label>

                        <div class="col-md-6">
                            <select class="form-select" name="fuel">
                                <option value="gasoline">Benzyna</option>
                                <option value="diesel">Diesel</option>
                            </select>
                        </div>
                    </div>
                    <div class="row my-4">
                        <label for="power" class="col-md-4 col-form-label text-md-end">Moc</label>

                        <div class="col-md-6">
                            <input id="power" type="number"
                                   class="form-control" name="power" required>
                        </div>
                    </div>
                    <div class="row my-4">
                        <label for="model" class="col-md-4 col-form-label text-md-end">Rodzaj skrzyni biegów</label>

                        <div class="col-md-6">
                            <select class="form-select" name="transmission">
                                <option value="gasoline">Manualna</option>
                                <option value="diesel">Automatyczna</option>
                            </select>
                        </div>
                    </div>
                    <div class="row my-4">
                        <label for="seats" class="col-md-4 col-form-label text-md-end">Liczba miejsc</label>

                        <div class="col-md-6">
                            <input id="number_of_seats" type="number"
                                   class="form-control" name="seats" required>
                        </div>
                    </div>
                    <div class="row my-4">
                        <label for="door" class="col-md-4 col-form-label text-md-end">Liczba drzwi</label>

                        <div class="col-md-6">
                            <input id="door" type="number"
                                   class="form-control" name="number_of_door" required>
                        </div>
                    </div>
                    <div class="row mb-5 justify-content-center">
                        <div class="col-12 col-lg-8 offset-md-4 d-flex">
                            <button type="submit" class="btn btn-primary">
                                Dodaj
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
