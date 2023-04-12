@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center register__row">
        <div class="col-md-6">
            <div class="card card__register">
                <div class="card-header register__title">{{ __('Регистрация') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">

                            <div class="col-md-6">

                                <input id="email"  type="email" class="form-control input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Email*">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class='selectBox'>
                            <select name="checkbox3">
                            <option value=Исполнитель>Исполнитель</option>
                            <option value=Заказчик>Заказчик</option>
                            </select>
                            </div>
                        <div class="row mb-3">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control input @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Пароль*">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control input" name="password_confirmation"  autocomplete="new-password" placeholder="Повторите пароль*">
                            </div>
                        </div>
                        <div class="register__info">
                            <div class="__text">
                                <span>* обязательные поля для заполнения</span>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input input__register" name="checkbox1" type="checkbox" value="1" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Я принимаю правила пользовательского соглашения
                                </label>
                              </div>

                        </div>
                        <div class="register__div">
                            <div class="acount">
                                <div class="acount__link">
                                    <a href="{{ route('login') }}">Уже есть аккаунт?</a>
                                </div>
                            </div>
                            <div class="register__betton">
                                <div class="">
                                    <button type="submit" class="register__btn hover">{{ __('Зарегистрироваться') }}</button>
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
