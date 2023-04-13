@extends('layouts.base')
@section('content')
    <main class="main">
        <div class="container">
           <div class="profile">
                <div class="profile__body">
                      <!-- Sidebar -->
                      <div class="profile__info">
                        <h2 class="active__orders-title">Активные заказы</h2>
                        <div class="serach__body">
                            <input type="text" placeholder="Поиск" class="seacr__orders">
                            <button class="serach__button hover">Найти</button>
                        </div>
                        @foreach ($all_order as $orders_item)
                        <div class="main__info list__orders">
                            <div class="main__text-info list__orderssss">
                              <div class="main__text_info list__orderssss">
                               <div class="promo">
                                <h3 class="promotional main__title-info history"> {{ $orders_item->order__name }}</h3>
                               </div>
                                 <div class="promotional__text order__title_list">
                                    {{ $orders_item->order__info }}
                                 </div>
                                 <div class="promo__price">
                                    <Span> Цена:  <p>  от {{ $orders_item->order__price_ot }} рублей до {{ $orders_item->order__price_do }}рублей</p></Span>
                                 </div>
                                 <div class="promo__price sroki">
                                    <Span> Сроки:  <p>  {{ $orders_item->order__price_ot }} дня</p></Span>
                                 </div>
                                 <div class="promo__price place">
                                    <Span> Место оказание услуги:  <p>  дистанционно</p></Span>
                                 </div>
                              </div>

                              @if(Auth::user()->role === 'Исполнитель')
                              <div class="applications">
                                <form action="{{ route('list_orders.add_notifyy') }}" method="get">
                                    <button class=" applications__buttons orders__button hover " name="add_notifyy" value="1" onclick="changeColor();">

                                        <a href="#contact__popup">откликнутся</a>
                                    </button>
                                </form>
                              </div>

                              @endif
                          </div>
                          </div>

                          @endforeach
                      </div>
                      <section class="popup" id="contact__popup">
                        <a href="#form" class="popup__area"></a>
                        <div class="popup__body">
                            <div class="popup__content">
                                <a href="#form" class="popup__close">Х</a>
                                <h2 class="popup__title">
                                 Заявка усешно отправлена!
                                </h2>
                            </div>
                        </div>
                    </section>
                </div>
           </div>



        </div>
    </main>
@endsection
