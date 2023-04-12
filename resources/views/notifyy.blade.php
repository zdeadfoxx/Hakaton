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
                    <div class="profile__info notify__prof">
                        <div class="main__info notify">
                            <div class="main__text-info notify__page">
                                <h2 class="promotional main__title-info notify__title">Уведомления</h2>
                                    </div>
                                    <form action="" class="notify__body">
                                        <h3 class="notify__title">На ваш заказ откликнулся один человек</h3>
                                        <div class="notify__text">
                                            <p class="notify__text">На ваш заказ “Рекламный ролик” откликнулся пользователь Михаил. Нажмите, чтобы перейти на профиль</p>
                                            <button class="remove__button"><img src="{{ asset('img/svg/Trash.svg') }}" alt="Trash" class=""></button>
                                           </div>
                                    </form>
                                    <form action="" class="notify__body">
                                        <h3 class="notify__title">На ваш заказ откликнулся один человек</h3>
                                        <div class="notify__text">
                                            <p class="notify__text">На ваш заказ “Рекламный ролик” откликнулся пользователь Михаил. Нажмите, чтобы перейти на профиль</p>
                                            <button class="remove__button"><img src="{{ asset('img/svg/Trash.svg') }}" alt="Trash" class=""></button>
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
