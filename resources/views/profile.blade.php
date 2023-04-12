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
                      <!-- Sidebar -->
                      <div class="profile__info">
                        <div class="main__info">
                          <div class="role__main">
                            <img class="sitebar__img" src="{{ asset('img/profike_img.png') }}" alt="profile">
                            <h2 class="sitebar__name main__name">Виктория</h2>
                            <span class="sitebar__role">Заказчик</span>
                          </div>
                          <div class="main__text-info">
                            <div class="main__title_proffiledit">
                                <h2 class="main__title-info">Основная информация</h2>
                                <div class="edit__profile">
                                    изменить
                                </div>
                            </div>
                            <div class="main__text_info">
                                Здравствуйте! Я - заказчица на сайте ATL. Ищу креативных профессионалов, которые помогут моему бизнесу выйти на новый уровень. Требуется разработка эффективных рекламных кампаний, поэтому я ищу команду экспертов, которые помогут мне достичь поставленных целей. Я готова обсудить все детали и требования, чтобы добиться наилучших результатов, клиентская база -  достигнут обычных населений и международный рынок. Жду предложений от профессионалов в области маркетинга и рекламы на ATL!
                            </div>

                        </div>
                        </div>
                        <div class="main__info my__orders">
                            <div class="main__text-info">
                              <div class="main__title_proffiledit">
                                  <h2 class="main__title-info order__title">Мои заказы</h2>
                                  <div class="edit__profile  create">
                                      Создать
                                  </div>
                              </div>
                              <div class="main__text_info">
                               <div class="promo">
                                <h3 class="promotional main__title-info">Рекламный ролик</h3>
                                <div class="promo__buttons">
                                    <div class="edit">
                                        Изменить
                                    </div>
                                    <div class="delete">
                                        Удалить
                                    </div>
                                </div>
                               </div>
                                 <div class="promotional__text ">
                                    Нужен рекламный ролик! Мы предпочитаем краткое и динамичное видео, которое захватит внимание потенциальных клиентов и покажет, что наш сервис уникален и надежен. В видео должны быть представлены все ключевые особенности нашей платформы и ее преимущества для пользователей. Также можете использовать яркие цвета и интересный саундтрек, чтобы привлечь внимание зрителей. Видео должно быть создано в качестве Full HD или выше, и длительностью не больше 1,5 минут.
                                 </div>
                                 <div class="promo__price">
                                    <Span> Цена:  <p>  от 1.000 рублей до 5.000 рублей</p></Span>
                                 </div>
                                 <div class="promo__price sroki">
                                    <Span> Сроки:  <p>  3 дня</p></Span>
                                 </div>
                                 <div class="promo__price place">
                                    <Span> Место оказание услуги:  <p>  дистанционно</p></Span>
                                 </div>
                              </div>
                              <div class="applications">
                                <p>10 человек уже откликнулось</p>
                                <button class="applications__buttons hover">
                                    Откликнуться
                                </button>
                              </div>
                          </div>
                          </div>
                          <div class="main__info contacnt__info">
                            <div class="main__text-info">
                              <div class="main__title_proffiledit contact__title">
                                  <h2 class="main__title-info">Связаться со мной</h2>
                                  <div class="edit__profile contact__button">
                                      изменить
                                  </div>
                              </div>
                              <div class="main__text_info">
                                <ul class="contact__list">
                                    <li>Почта: <p>vikk221@gmail.ru</p></li>
                                    <li>Номер телефона: <p>8(911)333-21-12</p></li>
                                </ul>
                                <h2></h2>
                                <ul class="socail__list">
                                    <li>Вконтакте: <p>@vikk221</p></li>
                                    <li>Телеграмм: <p>@vikk221</p></li>
                                </ul>
                              </div>

                          </div>
                          </div>
                      </div>
                </div>
           </div>



        </div>
    </main>
@endsection
