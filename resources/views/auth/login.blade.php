@extends('layouts.app')

@section('content')
    <main class="form-signin text-center">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h2><img class="mb-4" src="https://www.pngkey.com/png/full/98-983521_png-images-pngs-floppy-floppy-disk-floppy-disc.png" alt="" width="72" height="57">
                {{ @config('app.name') }}</h2>
            <h1 class="h3 mb-3 fw-normal">{{ __('Por favor, faça login') }}</h1>

            <div class="form-floating">
                <input type="email" name="email" class="bg-dark text-light form-control @error('email') is-invalid @enderror" id="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com">
                <label for="floatingInput">{{ __('E-mail') }}</label>
            </div>
            <div class="form-floating">
                <input type="password" id="password" class="bg-dark text-light form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Password">
                <label for="floatingPassword">{{ __('Senha') }}</label>
            </div>

            <div class="checkbox mb-3 form-check form-switch">
                <label>
                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Lembre-se de mim') }}
                </label>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-12 d-flex">
                    <button class="btn btn-lg btn-primary" type="submit">{{ __('Login') }}</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Esqueceu sua senha?') }}
                        </a>
                    @endif
                </div>
            </div>
            <p class="mt-5 mb-3 text-muted">© 2021</p>
        </form>
    </main>
@endsection
