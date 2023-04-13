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
                                    <a href="#" class="text-reset">Основная информация</a>
                                  </li>

                                  @if ( Auth::user()->role  === 'Заказчик')
                                  <li class="list-group-item py-1">
                                    <a href="#order" class="text-reset notyfy square ">Уведомления</a>
                                  </li>
                                  @else
                                  <li class="list-group-item py-1">
                                    <a href="#order" class="text-reset notyfy  ">Уведомления</a>
                                  </li>
                                  @endif
                                  <li class="list-group-item py-1">
                                    <a href="" class="text-reset">История</a>
                                  </li>
                                  <li class="list-group-item py-1">
                                    <a href="#" class="text-reset">Настройки</a>
                                  </li>
                                  <li class="list-group-item py-1">
                                    <a href="#" class="exit">Выйти</a>
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
                                <li>Почта: <p>{{ Auth::user()->email  }}</p></li>
                                <li>Номер телефона: <p>{{ Auth::user()->phone  }}</p></li>
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
                                      <h3 class="promotional main__title-info"> <input type="text" class="oreder__input" name="order__name" placeholder="Название заказа" required></h3>
                                     </div>
                                       <div class="promotional__text ">
                                          <textarea class="form-control order__area" id="exampleFormControlTextarea1" name="order__info" rows="6" placeholder="Краткое описание" required></textarea>
                                       </div>
                                       <div class="promo__price">
                                          <Span> Цена:  <p>  от <input type="text" class="oreder__input" name="order__price_ot" required> до <input type="text" class="oreder__input" name="order__price_do" required></p> руб. </Span>
                                       </div>
                                       <div class="promo__price sroki">
                                          <Span> Сроки:  <p>   <input type="text" class="oreder__input"  name="order__price_time" required></p></Span>
                                       </div>
                                       <div class="promo__price place">
                                          <Span> Место оказание услуги:  <p>   <input type="text"  name="order__price_place" class="oreder__input" value="Дистанционно"></p></Span>
                                          <p class="orders__infote">
                                              Если задачу можно выполнить дистанционно, то адрес писать не надо
                                          </p>
                                       </div>
                                      <div class="buttonssss">
                                          <button class="applications__buttons hover orders__butons add-to-cart1">
                                            <a class="add-to-cart1 addtocard-product">Создать</a>
                                            <div id="jGrowl"></div>
                                          </button>
                                      </div>
                                 </form>
                                </div>
                            </div>

                                @endif
                          </div>
                          <div class="main__info my__orders">
                            <div class="main__text-info">
                                @if(Auth::user()->role === 'Заказчик')
                                <h2 class="promotional main__title-info history__title">Список заказов</h2>
                                @foreach ($all_order as $item__order)
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
                                    <p id="order">
                                       @foreach ($all_Notfy as $iNotfy)
                                       1
                                       @endforeach
                                        1 количество откликов на заказ
                                    </p>
                                   </div>
                                   @endforeach
                                   @else
                                   <h2 class="promotional main__title-info history__title">Список выполненых заказов</h2>
                                @endif
                            </div>
                          </div>
                      </div>

                </div>
           </div>
                    <section class="popup" id="contact__popupfdsfds">
                        <a href="#form" class="popup__area"></a>
                        <div class="popup__body">
                            <div class="popup__content">
                                <a href="#form" class="popup__close">Х</a>
                                <h2 class="popup__title">
                                 Заказ успшено создан!
                                </h2>
                            </div>
                        </div>
                    </section>

        </div>
    </main>

@endsection
