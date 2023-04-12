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

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control input @error('phone') is-invalid @enderror" name="phone" value="{{ 'phone') }}"  autocomplete="phone" placeholder="Номер телефона*"  maxlength="12">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control input @error('FirstName') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}"  autocomplete="firstname" placeholder="Фамилия*">

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" placeholder="Имя*">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="LastName" type="text" class="form-control input @error('LastName') is-invalid @enderror" name="lastname" value="{{ old('LastName') }}"  autocomplete="LastName" placeholder="Отчество">

                                @error('LastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <textarea class="form-control area" id="exampleFormControlTextarea1" rows="3" name="info" placeholder="Краткое описание"></textarea>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Пароль*">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" placeholder="Повторите пароль*">
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
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkbox2" value="1" id="flexCheckChecked" >
                                <label class="form-check-label" for="flexCheckChecked">
                                    Я согласен на рассылку уведомлений по СМС и email
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="checkbox3" >
                                <label class="form-check-label" for="flexCheckChecked">
                                    Я исполнитель
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
