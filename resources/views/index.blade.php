@extends('layouts.base')
@section('content')
    <main class="main">
        <div class="container">
            <div class="main__fullscrean">
                <ul class="fullscrean__column">
                    <li class="fullscrean-item-1">
                        <div class="item__text-1 border__text">
                            <span>Привет! Я Марк</span>
                        </div>
                        <img src="{{ asset('img/fullsrean_man.png') }}" alt="fullsrean_man">
                    </li>
                    <li class="fullscrean-item-2">
                        <p class="item__text-2 border__text">
                            <span>Я - Анна </span>
                        </p>
                        <img src="{{ asset('img/anna.png') }}" alt="fullsrean_man">
                    </li>
                    <li class="fullscrean-item-3">
                        <p class="item__text-3 border__text">
                            <span> А я Лиза</span>
                        </p>
                        <img src="{{ asset('img/liza.png') }}" alt="fullsrean_man">
                    </li>
                </ul>
                <div class="fullscrean__info">
                    <h1 class="fullscrean__tiitle">Надежные исполнители уже могут помочь!</h1>
                    <div class="fullscrean__text">ATL - это компания, которая специализируется на подборе профессиональных исполнителей для выполнения заказов любой сложности. Она предоставляет высококачественные услуги и использует современные технологии.</div>
                    <button class="fullscrean__button buttons">
                        <a href="#">Разместить заказ</a>
                    </button>
                </div>
            </div>
            <div class="about_us">
                <h2 class="about_us__title main__title">О нас</h2>
                <p class="underline"></p>
                <div class="about_us_row justify-content-center">
                    <div class="row__card d-flex flex-row ">
                        <div class="card__body">
                            <div class="card__img">
                                <img src="{{ asset('img/about_best-1.png') }}" alt="">
                            </div>
                            <div class="card__title">
                                <h3>Лучшие исполнители</span>
                            </div>
                            <div class="card__text page__text">
                              <p>  Каждый исполнитель проходит строгую модерацию и является квалифицированным специалистом</p>
                            </div>
                        </div>
                        <div class="card__body">
                            <div class="card__img">
                                <img src="{{ asset('img/fast.png') }}" alt="">
                            </div>
                            <div class="card__title">
                                <h3>Быстро</span>
                            </div>
                            <div class="card__text page__text">
                              <p>  Каждый исполнитель проходит строгую модерацию и является квалифицированным специалистом</p>
                            </div>
                        </div>
                        <div class="card__body">
                            <div class="card__img">
                                <img src="{{ asset('img/secure_protect.png') }}" alt="">
                            </div>
                            <div class="card__title">
                                <h3>Безопасно</span>
                            </div>
                            <div class="card__text page__text">
                              <p>  Каждый исполнитель проходит строгую модерацию и является квалифицированным специалистом</p>
                            </div>
                        </div>
                        <div class="card__body">
                            <div class="card__img">
                                <img src="{{ asset('img/no_money.png') }}" alt="">
                            </div>
                            <div class="card__title">
                                <h3>Недорого</h3>
                            </div>
                            <div class="card__text page__text">
                              <p>  Каждый исполнитель проходит строгую модерацию и является квалифицированным специалистом</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews">
                <h2 class="reviews__title main__title">
                    Отзывы
                </h2>
                <div class="reviews__body">
                    <div class="reviews__arrow_right">
                        <img src="{{ asset('img/svg/arrow_left.svg') }}" alt="">
                    </div>
                    <div class="reviews__card ">
                        <p class="reviews__border border__text">
                            <span>Сергей</span>
                        </p>
                        <img src="{{ asset('img/serega_britva.png') }}" alt="serega_britva" class="img__reviews">
                        <div class="role"><span>Заказчик</span></div>
                        <div class="reviews__stars">
                            <div class="star-rating">
                                <div class="star-rating__wrap">
                                  <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
                                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
                                  <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4" checked>
                                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
                                  <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3" >
                                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
                                  <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2" >
                                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
                                  <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
                                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
                                </div>
                              </div>
                        </div>
                        <div class="reviews__feedback-text page__text">
                            Я использовал ATL для поиска исполнителей для своего проекта и был впечатлен качеством работников, которых мне предложили. Они были высококвалифицированными и ответственными профессионалами своей области и справились с задачей в срок и с отличным результатом. Я рекомендую ATL всем, кто ищет надежных исполнителей для своих проектов. Спасибо ATL!
                        </div>
                    </div>
                    <div class="reviews__arrow_left">
                        <img src="{{ asset('img/svg/arrow_right.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="contractor-or-customer">
                <h2 class="contractor-or-customer__title main__title">
                    ATL — для всех!
                </h2>
                <div class="contractor-or-customer__body">
                    <div class="contractor__body">
                        <h4 class="contractor__title cardt__title">Ты заказчик и ищешь исполнителя? </h4>
                        <div class="contractor__text page__text">
                            <p>Уважаемый потенциальный исполнитель,</p>

                            <p>Наша компания ATL специализируется на поиске надежных и профессиональных исполнителей для различных заказчиков. Мы хотели бы пригласить вас присоединиться к нашей базе данных исполнителей и получить возможность получать заказы от наших клиентов.</p>

                            <p>Мы очень серьезно относимся к выбору исполнителей для нашей базы данных. Мы требуем от всех наших исполнителей прохождения собеседования, проверки квалификации и референс-проверки. Это гарантирует, что все наши клиенты получат качественное обслуживание от профессиональных исполнителей.</p>

                            <p>Мы предоставляем нашим исполнителям возможность работать с нашими клиентами из разных отраслей бизнеса, в том числе маркетинг, IT, финансы и многое другое. Мы также предлагаем конкурентную ставку оплаты за работу.</p>

                            <p>Если вы заинтересованы в том, чтобы стать частью нашей базы данных исполнителей, пожалуйста, отправьте нам свои данные, включая ваше имя, контактные данные и квалификацию. Мы свяжемся с вами, как только будет доступен заказ, соответствующий вашим навыкам.</p>
                            <p>

                                Благодарим вас за ваш интерес к нашей компании и надеемся на сотрудничество в ближайшем будущем.
                            </p>

                            <p>
                                С наилучшими пожеланиями,

                                Компания ATL
                            </p>
                        </div>
                        <button class="contractor__button buttons">
                            <a href="#">Стать исполнителем</a>
                        </button>
                    </div>
                    <div class="customer__body">
                        <h4 class="customer__title cardt__title">Ты заказчик и ищешь исполнителя? </h4>
                        <div class="customer__text page__text">
                            <p>Уважаемый потенциальный заказчик,</p>

                           <p> Мы рады представить нашу компанию ATL - эксперта в области подбора исполнителей для различных проектов. Мы специализируемся на поиске и нахождении наиболее опытных, квалифицированных и подходящих кандидатов для выполнения задач любой сложности.</p>

                            <p>Мы обеспечиваем профессиональный подход к каждому проекту, учитывая индивидуальные потребности и цели заказчика. Наша команда работает над поиском наиболее подходящих кандидатов с помощью самых передовых технологий и инструментов.</p>

                            <p>Если вы ищете надежного исполнителя для своего проекта, не стесняйтесь обратиться к нам. Мы готовы предоставить вам высококвалифицированных профессионалов, которые помогут вам достичь ваших целей и успешно завершить проект.</p>

                           <p>
                                С уважением,

                                Команда ATL
                           </p>
                        </div>
                        <button class="customer__button buttons">
                            <a href="#">Стать заказчиком</a>
                        </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
