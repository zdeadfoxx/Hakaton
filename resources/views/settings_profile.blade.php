@extends('layouts.base')
@section('content')
    <main class="main">
        <div class="container">
           <div class="profile">
                <div class="profile__body">
                    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white sitebar">
                        <div class="position-sticky">
                          <div class="list-group list-group-flush mx-3 mt-4">
                            <img class="sitebar__img" src="{{ asset('img/profike_img.png') }}" alt="profile">
                            <h2 class="sitebar__name">Виктория</h2>
                            <span class="sitebar__role">Заказчик</span>
                            <!-- Collapsed content -->
                            <ul id="collapseExample1" class="collapse show list-group list-group-flush">
                              <li class="list-group-item py-1">
                                <a href="" class="text-reset">Основная информация</a>
                              </li>
                              <li class="list-group-item py-1">
                                <a href="" class="text-reset">Уведомления</a>
                              </li>
                              <li class="list-group-item py-1">
                                <a href="" class="text-reset">История</a>
                              </li>
                              <li class="list-group-item py-1">
                                <a href="" class="text-reset">Настройки</a>
                              </li>
                              <li class="list-group-item py-1">
                                <a href="" class="exit">Выйти</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                    <div class="profile__info">
                        <div class="main__info my__orders">
                            <div class="main__text-info settings__page">
                                <h2 class="promotional main__title-info history__title">Настройки</h2>
                                <form action="" class="form__setings">
                                    <div class="main__text_info settings__text">
                                       <div class="change__personal">
                                        <h2 class="promotional main__title-info history__title">Персональные данные</h2>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <input id="editemail" type="email" class="form-control input @error('editemail') is-invalid @enderror" name="editemail" required autocomplete="editemail" placeholder="Изменить email*">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <input id="changephone" type="phone" class="form-control input" name="changephone" required autocomplete="changephone" placeholder="Изменить номер телефона*">
                                            </div>
                                        </div>
                                       </div>

                                        <div class="change__password">
                                            <h2 class="promotional main__title-info history__title">Пароль</h2>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <input id="edit__password" type="password" class="form-control input @error('edit__password') is-invalid @enderror" name="edit__password" required autocomplete="new-password" placeholder="Пароль*">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <input id="edit__password-confirm" type="password" class="form-control input" name="edit__password-confirm" required autocomplete="new-password" placeholder="Повторите пароль*">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="applications__buttons">Сохранить</button>
                                  </div>

                                </form>

                          </div>
                          </div>
                      </div>
                </div>
           </div>



        </div>
    </main>
@endsection
