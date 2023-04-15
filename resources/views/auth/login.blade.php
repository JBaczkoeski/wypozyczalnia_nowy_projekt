@extends('layouts.navbar')

@section('content')
    <div class="container my-5 ">
        <div class="col-lg-6 col-7 container text-center border border-3">
            <div class="row">
                <div class="container h2 mt-5 pb-1">Logowanie</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row my-4">
                        <label for="email" class="col-md-4 col-form-label text-md-end">E-mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row my-4">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Hasło</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password" required
                                   autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    Zapamiętaj mnie
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5 justify-content-center">
                        <div class="col-12 col-lg-8 offset-md-4 d-flex">
                            <button type="submit" class="btn btn-primary">
                                Zaloguj
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Zapomniałem hasła
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
