@extends('layouts.navbar')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            @foreach($cars as $car)
                <div class="card col-12 col-lg-4 col-sm-5 mx-2 my-2 d-flex p-2 border-0 shadow rounded-3">
                    <img src="{{ asset('storage/cars/'.$car->image) }}" class="card-img-top rounded-4" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="container col-12 mb-3 border-5 border-bottom border-dark">
                                <h3 class="card-title">{{$car['mark']}} {{$car['model']}}</h3>
                            </div>
                            <div class="container col-6 mb-4 h5">
                                Rok produkcji: {{$car['year_of_production']}}
                            </div>
                            <div class="container col-6 mb-4 h5">
                                Moc: {{$car['power']}} km
                            </div>
                            <div class="container col-6 mb-4 h5">
                                Skrzynia biegów: {{$car['transmission_type']}}
                            </div>
                            <div class="container col-6 mb-4 h5">
                                Paliwo: {{$car['fuel_type']}}
                            </div>
                            <div class="container col-6 mb-4 h5">
                                Liczba drzwi: {{$car['number_of_door']}}
                            </div>
                            <div class="container col-6 mb-4 h5">
                                Liczba miejsc: {{$car['number_of_seat']}}
                            </div>
                                <a href="{{ route('cars.show', $car['id']) }}" class="btn btn-success">Sprawdź</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
