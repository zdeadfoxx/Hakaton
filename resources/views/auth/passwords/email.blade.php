@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center register__row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header register__title">{{ __('Смена пароля') }}</div>
                <div class="acount">
                    <div class="acount__link">
                        <a href="#">На почту отправлен код, напишите его, чтобы сменить пароль</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }} " class="form__reset">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Пароль*">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control input" name="password_confirmation" required autocomplete="new-password" placeholder="Повторите пароль*">
                            </div>
                        </div>

                        <div class="required__text">
                            <span>* обязательные поля для заполнения</span>
                        </div>
                        <div class="required__text">
                            <span>Повторить можно через 01:00</span>
                        </div>
                        <div class="register__div">
                            <div class="acount">
                                <div class="acount__link">
                                    <a href="{{ route('login') }}">Ошиблись почтой</a>
                                </div>
                            </div>
                        <div class="row mb-0">
                            <div class="row mb-0">
                                <div class="register__betton">
                                    <button type="submit" class="register__btn hover">
                                        {{ __('Подтвердить') }}
                                    </button>
                                </div>
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
