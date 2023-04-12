@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center register__row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header register__title">{{ __('Авторизация') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email*">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Пароль*">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class='selectBox'>
                            <select name="checkbox3">
                            <option value=1>Исполнитель</option>
                            <option value=2>Заказчик</option>
                            </select>
                            </div>
                        <div class="required__text">
                            <span>* обязательные поля для заполнения</span>
                        </div>

                        @if (Route::has('password.request'))
                        <a class="remeber__pawword" href="{{ route('password.request') }}">
                            {{ __('Забыли пароль?') }}
                        </a>
                        @endif
                        <div class="row mb-3">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label required__text" for="remember">
                                        {{ __('Запомнить меня') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="register__div">
                            <div class="acount">
                                <div class="acount__link">
                                    <a href="{{ route('register') }}">Нет аккаунта?</a>
                                </div>
                            </div>
                        <div class="row mb-0">
                            <div class="register__betton">
                                <button type="submit" class="register__btn hover">
                                    {{ __('Войти') }}
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
