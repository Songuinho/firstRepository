@extends('layouts.auth')

@section('form')
    <div class="login-box" style="width:600px;">
        <div class="login-logo">
            <a href="#" style="color:#b3b6b9; font-size: 1.8pm;"><b style="font-weight:bold; color: #fff;">YBLT</b>CORPORATE<br> v.1</a>
            <hr class="bg-light"/>
        </div>
        <div class="card bg-dark">
            <div class="card-body bg-dark login-card-body ">

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


@endsection
