@extends('layouts.AdminNavbar')

@section('content')
<div class="container-fluid pt-5">
    <div class="row">
        <div class="container col-6 text-center">
            <img src="{{ asset('storage/cars/'.$car->image) }}" class="w-75 rounded-5 shadow">
        </div>
        <div class="container col-6 text-center h3">
            <div class="row">
            <div class="container col-12 h1 text-center mb-3">
                {{$car['mark']}}  {{$car['model']}}
            </div>
                <div class="container col-6 mt-3">
                    Rok produkcji :
                </div>
                <div class="container col-6">
                    {{$car['year_of_production']}}
                </div>
                <div class="container col-6 mt-3">
                    Moc :
                </div>
                <div class="container col-6">
                    {{$car['power']}}
                </div>
                <div class="container col-6 mt-3">
                    Skrzynia biegów :
                </div>
                <div class="container col-6">
                    {{$car['transmission_type']}}
                </div>
                <div class="container col-6 mt-3">
                    Paliwo :
                </div>
                <div class="container col-6">
                    {{$car['fuel_type']}}
                </div>
                <div class="container col-6 mt-3">
                    Liczba drzwi :
                </div>
                <div class="container col-6">
                    {{$car['number_of_door']}}
                </div>
                <div class="container col-6 mt-3">
                    ilość miejsc :
                </div>
                <div class="container col-6">
                    {{$car['number_of_seat']}}
                </div>
                <div class="container col-12 h1 text-center mt-5">
                    Cena : {{$car['price']}} /zł doba
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

