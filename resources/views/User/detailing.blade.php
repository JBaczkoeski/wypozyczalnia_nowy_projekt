@extends('layouts.navbar')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="container col-12 mb-5">
                <div class="container col-12 h2 ms-5">
                    Detailing
                </div>
                <div class="container col-12 h5">
                    Wiemy że wygląd auta jest tak samo ważny jak jego sprawność dlatego w każdym naszym salonie w polsce
                    posiadamy studio detailingowe. Jeżeli data będzie zajęta skontaktuje się z tobą ktoś od nas z
                    zespołu aby umówić inną dogodną datę
                </div>
            </div>
            <div class="container col-6 text-center p-3">
                <div class="container col-12 h4">Wypełnij formularz aby umówić datę</div>
                <form method="post" action="" class="container col-12 mt-3">
                        <div class="container col-12 col-lg-4">
                            <label for="datePicker" class="form-label">Data usługi</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="container col-3 col-lg-4 mt-4">
                            <button type="submit" class="btn btn-success">Zarezerwuj</button>
                        </div>
                </form>
            </div>
            <div class="container col-6 text-center p-3">
                <div class="container col-12 h4">W razie pytań zadzwoń!</div>
                <div class="container col-12">
                    <p>Telefon: +00 123 456 789</p>
                    <p>Email: detailing@example.info</p>
                    <p>Jeżeli chcesz wpaść i porozmawiać na żywo<br> sprawdź lokalizację naszego salonu w twoim mieście
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
