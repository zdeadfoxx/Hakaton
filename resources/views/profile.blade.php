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
                            <h2 class="sitebar__name">{{ Auth::user()->FIO  }}</h2>
                            <span class="sitebar__role">{{ Auth::user()->role  }}</span>
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
                      <!-- Sidebar -->
                      <div class="profile__info">
                        <div class="main__info">
                          <div class="role__main">
                            <img class="sitebar__img" src="{{ asset('img/profike_img.png') }}" alt="profile">
                            <h2 class="sitebar__name main__name">{{ Auth::user()->FIO  }}</h2>
                            <span class="sitebar__role">{{ Auth::user()->role  }}</span>
                            <span><li></span>
                          </div>
                          <div class="main__text-info">
                            <div class="main__title_proffiledit">
                                <h2 class="main__title-info">Основная информация</h2>
                                <div class="edit__profile">
                                    изменить
                                </div>
                            </div>
                            <div class="main__text_info">
                                {{ Auth::user()->main_text  }}
                            </div>

                            <ul class="contact__list">
                                <li>Почта: <p>vikk221@gmail.ru</p></li>
                                <li>Номер телефона: <p>{{ Auth::user()->phone  }}</p></li>
                            </ul>
                            <h2></h2>
                            <ul class="socail__list">
                                <li>Вконтакте: <p>@vikk221</p></li>
                                <li>Телеграмм: <p>@vikk221</p></li>
                            </ul>
                        </div>
                        </div>
                        <div class="main__info my__orders">
                            <div class="main__text-info">
                                @if(Auth::user()->role === 'Заказчик')
                                <div class="main__title_proffiledit">
                                    <h2 class="main__title-info order__title">Создать заказ</h2>
                                </div>
                                <div class="main__text_info">
                                 <div class="promo">
                                 </div>
                                 <form action="{{ route('profile.create_order') }} " method="get">
                                  <div class="promo">
                                      <h3 class="promotional main__title-info"> <input type="text" class="oreder__input" name="order__name" placeholder="Название заказа"></h3>
                                     </div>
                                       <div class="promotional__text ">
                                          <textarea class="form-control order__area" id="exampleFormControlTextarea1" name="order__info" rows="6" placeholder="Краткое описание"></textarea>
                                       </div>
                                       <div class="promo__price">
                                          <Span> Цена:  <p>  от <input type="text" class="oreder__input" name="order__price_ot"> до <input type="text" class="oreder__input" name="order__price_do"></p> руб. </Span>
                                       </div>
                                       <div class="promo__price sroki">
                                          <Span> Сроки:  <p>   <input type="text" class="oreder__input"  name="order__price_time"></p></Span>
                                       </div>
                                       <div class="promo__price place">
                                          <Span> Место оказание услуги:  <p>   <input type="text"  name="order__price_place" class="oreder__input" value="Дистанционно"></p></Span>
                                          <p class="orders__infote">
                                              Если задачу можно выполнить дистанционно, то адрес писать не надо
                                          </p>
                                       </div>
                                      <div class="buttonssss">
                                          <button class="applications__buttons hover orders__butons">Создать</button>
                                      </div>
                                 </form>
                                </div>


                            </div>

                                @endif
                          </div>


                            @foreach ($all_order as $item__order)
                            <div class="main__text-info">
                              <h2 class="promotional main__title-info history__title">Мои заказы</h2>
                            <div class="main__text_info">
                             <div class="promo">
                              <h3 class="promotional main__title-info history">{{ $item__order->order__name }}</h3>
                             </div>
                               <div class="promotional__text history">
                                {{ $item__order->order__info }}
                               </div>
                               <div class="promo__price">
                                <Span> Цена:  <p>  от {{ $item__order->order__price_ot }} рублей до {{ $item__order->order__price_do }}рублей</p></Span>
                             </div>
                             <div class="promo__price sroki">
                                <Span> Сроки:  <p>  {{ $item__order->order__price_ot }} дня</p></Span>
                             </div>
                             <div class="promo__price place">
                                <Span> Место оказание услуги:  <p>  {{ $item__order->order__price_place }}</p></Span>
                             </div>
                             <p>

                             </p>
                            </div>
                            </div>
                            @endforeach


                      </div>
                </div>
           </div>



        </div>
    </main>
@endsection
