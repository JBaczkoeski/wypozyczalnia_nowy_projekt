@extends('layouts.navbar')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            @for($i = 1; $i <= 6; $i++)
                <div class="card col-12 col-lg-3 col-sm-5 mx-2 my-2 d-flex p-2 border-0 shadow rounded-3">
                    <img src="{{ asset('storage\cars\camaro.jpg') }}" class="card-img-top rounded-4" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="container col-12 mb-3 border-5 border-bottom border-dark">
                                <h3 class="card-title">Camaro zl1</h3>
                            </div>
                            <div class="container col-6 mb-4 h5">
                                Rok produkcji: 2022
                            </div>
                            <div class="container col-6 mb-4 h5">
                                Moc: 580 km
                            </div>
                            <div class="container col-6 mb-4 h5">
                                Skrzynia biegów: Manualna
                            </div>
                            <div class="container col-6 mb-4 h5">
                                Paliwo: Benzyna
                            </div>
                            <div class="container col-6 mb-4 h5">
                                Liczba drzwi: 3
                            </div>
                            <div class="container col-6 mb-4 h5">
                                Liczba miejsc: 4
                            </div>
                            <a href="#" class="btn btn-success">Sprawdź</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
