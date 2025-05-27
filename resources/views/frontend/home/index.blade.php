@extends('frontend.layouts.base')


@once

@push('css')

{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css"> --}}
<link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

@endpush



@push('js')

{{-- <script data-src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" defer></script> --}}
<script src="{{ asset('js/swiper-bundle.min.js') }}" defer></script>
@endpush


@endonce


@section('content')

{{-- ? hero --}}
<section class="hero">
    <div class="container">
        <div class="hero__inner">
            <div class="hero-content">
                <h1 class="hero__title title-h1">
                    робимо кредити <span class="accent-color">дешевими <br> та доступними</span>
                </h1>
                <ul class="hero__list">
                    <li class="hero__item">Рейтинг кредитних сервісів</li>
                    <li class="hero__item">Промокоди для економії</li>
                    <li class="hero__item">Висока імовірність отримання</li>
                </ul>


                @if (auth('web')->user())

                <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

                @else

                <button class="hero__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

                @endif



            </div>
            <img width="533" height="533" class="hero__img" src="{{ asset('images/home/hero.webp') }}" alt="Дівчина реєструється на Trixy">
            <span class="hero-decor-1 decor-grd-1"></span>
            <span class="hero-decor-2 decor-grd-2"></span>
        </div>
    </div>
</section>

{{-- ? examples-services --}}


<section class="examples-services">
    <div class="container">
        <div class="examples">
            <div class="example example-1">
                <div class="example-box bg-grd-1">
                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/credit-kasa.png') }}"
                                alt="Логотип Credit-Kasa">
                            <span class="example-service__title">“Credit-Kasa”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">8.9</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/e-money.png') }}"
                                alt="Логотип Є-гроші">
                            <span class="example-service__title">“Є-гроші”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">8.2</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo"
                                data-src="{{ asset('images/services/selfie-credit.png') }}" alt="Логотип Selfie-credit">
                            <span class="example-service__title">“Selfie-credit”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <div class="example-service-chart__box">
                                <span class="example-service-chart">9.5</span>
                                <span class="example-service-chart__name">T-рейтинг</span>
                            </div>

                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/credit-plus.png') }}"
                                alt="Логотип Credit-Plus">
                            <span class="example-service__title">“Credit-Plus”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">9.2</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>


                </div>
                <div class="example-content">
                    <h2 class="example__title title-h2">
                        <span class="accent-color"> T-Рейтинг</span>
                        <br>
                        кредитних сервісів
                    </h2>
                    <div class="example-desc">
                        <p class="example__text">
                            Обери сервіс для для отримання кредиту,
                            <br>
                            який відповідає твоїм потребам
                        </p>
                    </div>

                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

                </div>

                <div class="example-1__decor-1 decor-grd-1"></div>
                <div class="example-1__decor-2 decor-grd-1"></div>

            </div>



            <div class="example example-2">
                <div class="example-content">
                    <h2 class="example__title title-h2">
                        <span class="accent-color"> T-Рейтинг</span> постійно оновлюється ШІ на основі
                    </h2>
                </div>

                <div class="example-scheme">

                    <div class="example-scheme__box">
                        <span class="example-scheme__box-rating">9.5</span>
                        <span class="example-scheme__box__name">T-рейтинг</span>
                    </div>

                    <div class="example-scheme__items">
                        <div class="example-scheme__item bg-grd-1">
                            <span class="example-scheme__item-icon"></span>
                            <span>Рівня схвалення заявок сервісом</span>
                        </div>
                        <div class="example-scheme__item bg-grd-1">
                            <span class="example-scheme__item-icon"></span>
                            <span>Вартості кредиту (відсотків)</span>
                        </div>
                        <div class="example-scheme__item bg-grd-1">
                            <span class="example-scheme__item-icon"></span>
                            <span>Популярності вибору сервісу</span>
                        </div>
                        <div class="example-scheme__item bg-grd-1">
                            <span class="example-scheme__item-icon"></span>
                            <span> Реальних відгуків про компанію</span>
                        </div>
                        <div class="example-scheme__item bg-grd-1">
                            <span class="example-scheme__item-icon"></span>
                            <span> Часу на прийняття рішення</span>
                        </div>
                    </div>
                </div>

                <div class="example-2__decor-1 decor-grd-1"></div>
                <div class="example-2__decor-2 decor-grd-1"></div>

            </div>



            <div class="example example-3">

                <div class="example-box bg-grd-1">

                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/credit-kasa.png') }}"
                                alt="Логотип Credit-Kasa">
                            <span class="example-service__title">“Credit-Kasa”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">8.9</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/e-money.png') }}"
                                alt="Логотип Є-гроші">
                            <span class="example-service__title">“Є-гроші”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">8.2</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo"
                                data-src="{{ asset('images/services/selfie-credit.png') }}" alt="Логотип Selfie-credit">
                            <span class="example-service__title">“Selfie-credit”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <div class="example-service-chart__box">
                                <span class="example-service-chart">9.5</span>
                                <span class="example-service-chart__name">T-схвалення</span>
                            </div>

                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/credit-plus.png') }}"
                                alt="Логотип Credit-Plus">
                            <span class="example-service__title">“Credit-Plus”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">9.2</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>


                </div>

                <div class="example-content">
                    <h2 class="example__title title-h2">
                        <span class="accent-color"> T-схвалення</span>
                        <br>
                        Кредити
                        <span class="accent-color">без відмов</span>
                    </h2>
                    <div class="example-desc">

                        <p class="example__text">
                            Подавай заявки в кредитні сервіси
                            <br>
                            де найчастіше погоджують заявки
                            <br>
                            (на основі рейтингу T-схвалення)
                        </p>
                    </div>
                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>
                </div>

                <div class="example-3__decor-1 decor-grd-2"></div>
                <div class="example-3__decor-2 decor-grd-1"></div>

            </div>




            <div class="example example-4">

                <div class="example-box bg-grd-1">

                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/credit-kasa.png') }}"
                                alt="Логотип Credit-Kasa">
                            <span class="example-service__title">“Credit-Kasa”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">8.9</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/e-money.png') }}"
                                alt="Логотип Є-гроші">
                            <span class="example-service__title">“Є-гроші”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">8.2</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo"
                                data-src="{{ asset('images/services/selfie-credit.png') }}" alt="Логотип Selfie-credit">
                            <span class="example-service__title">“Selfie-credit”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <div class="example-service-chart__box">
                                <span class="example-service-chart">9.5</span>
                                <span class="example-service-chart__name">T-вартість</span>
                            </div>

                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/credit-plus.png') }}"
                                alt="Логотип Credit-Plus">
                            <span class="example-service__title">“Credit-Plus”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">9.2</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>


                </div>

                <div class="example-content">
                    <h2 class="example__title title-h2">
                        <span class="accent-color"> T-Вартість</span>
                        <br>
                        Кредити
                        <span class="accent-color">без відсотків</span>
                    </h2>
                    <div class="example-desc">

                        <p class="example__text">
                            Подавай заявки в кредитні сервіси
                            <br>
                            із мінімальною відсотковою ставкою
                            <br>
                            (на основі рейтингу T-вартість)
                        </p>
                    </div>
                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>
                </div>

                <div class="example-4__decor-1 decor-grd-1"></div>
                <div class="example-4__decor-2 decor-grd-1"></div>

            </div>




            <div class="example example-5">

                <div class="example-box bg-grd-1">

                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/credit-kasa.png') }}"
                                alt="Логотип Credit-Kasa">
                            <span class="example-service__title">“Credit-Kasa”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">8.9</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service example-service-column">
                        <div class="example-service-top">
                            <div class="example-service__col">
                                <img loading="lazy"  width="160" height="80" class="example-service__logo"
                                    data-src="{{ asset('images/services/selfie-credit.png') }}" alt="Логотип Selfie-credit">
                                <span class="example-service__title">“Selfie-credit”</span>
                            </div>
                            <div class="example-service__col">
                                <ul class="example-service__list">
                                    <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                    <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                    <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                                </ul>
                            </div>
                            <div class="example-service__col">
                                <span class="example-service__stars"></span>
                                <span class="example-service__rating">(<span>2427</span> голосів)</span>
                            </div>
                            <div class="example-service__col">
                                <span class="example-service-chart">9.5</span>

                            </div>
                            <div class="example-service__col">
                                <span class="example-service__btn">Отримати позику</span>
                            </div>
                        </div>

                        <div class="example-service-promocode">
                            <div class="example-service-promocode__row">
                                <span class="example-service-promocode__col">Промокод:</span>
                                <span class="example-service-promocode__col">TRY100</span>
                            </div>
                            <div class="example-service-promocode__row">
                                <span class="example-service-promocode__col">Знижка по промокоду:</span>
                                <span class="example-service-promocode__col">50%</span>
                            </div>
                        </div>


                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/e-money.png') }}"
                                alt="Логотип Є-гроші">
                            <span class="example-service__title">“Є-гроші”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">8.2</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>



                </div>

                <div class="example-content">
                    <h2 class="example__title title-h2">
                        Промокоди на
                        <br>
                        <span class="accent-color">знижку до 70%</span>
                    </h2>
                    <div class="example-desc">

                        <p class="example__text">
                            Реєструйся та дивись найвигідніши
                            <br>
                            промокоди в кредитних сервісах
                        </p>
                    </div>

                    @if (auth('web')->user())

                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

                    @else

                    <button class="example__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

                    @endif


                </div>

                <div class="example-5__decor-1 decor-grd-2"></div>
                <div class="example-5__decor-2 decor-grd-1"></div>

            </div>




            <div class="example example-6">

                <div class="example-box">

                    <p class="example-box__text">
                        Натомість ти користуєшся
                        <br>
                        <span class="accent-color">Trixy-промокодом</span>
                        і економиш
                        <span class="accent-color">150 грн.</span>
                    </p>
                    <div class="example-box__items">
                        <div class="example-box__item">
                            <span>Промокод</span>
                            <span>+86₴</span>
                        </div>
                        <div class="example-box__item">
                            <span>Промокод</span>
                            <span>+120₴</span>
                        </div>
                        <div class="example-box__item">
                            <span>Промокод</span>
                            <span>+258₴</span>
                        </div>
                    </div>


                </div>

                <div class="example-content">
                    <h2 class="example__title title-h2">
                        Приклад зменешення
                        <br>
                        витрат по кредиту
                        <br>
                        за рахунок промокоду
                    </h2>
                    <div class="example-desc">

                        <p class="example__text">
                            Тобі потрібно
                            <span class="color-white">2 000 грн</span>
                            до наступної з/п (на 15 днів).

                        </p>
                        <p class="example__text">

                            Якщо візьмеш цю суму без промокоду, то в
                            середньому переплатиш
                            <span class="color-red">300 грн відсотків.</span>
                        </p>
                    </div>

                    @if (auth('web')->user())

                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

                    @else

                    <button class="example__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

                    @endif

                </div>

                <div class="example-6__decor-1 decor-grd-2"></div>

            </div>





            <div class="example example-7">

                <div class="example-box">

                    <div id="services-slider" class="services-slider swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="services-slider__item">
                                    <img loading="lazy"  width="160" height="80" class="services-slider__item-img"
                                        data-src="{{ asset('images/services/credit-kasa.png') }}" alt="Логотип Credit-Kasa">
                                    <span class="services-slider__item-title">Credit-Kasa</span>
                                    <span class="services-slider__item-btn">Змінити</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-slider__item">
                                    <img loading="lazy"  width="160" height="80" class="services-slider__item-img"
                                        data-src="{{ asset('images/services/selfie-credit.png') }}" alt="Логотип SELFIE credit">
                                    <span class="services-slider__item-title">SELFIE credit</span>
                                    <span class="services-slider__item-btn">Змінити</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-slider__item">
                                    <img loading="lazy"  width="160" height="80" class="services-slider__item-img"
                                        data-src="{{ asset('images/services/credit-plus.png') }}" alt="Логотип Credit-Plus">
                                    <span class="services-slider__item-title">Credit-Plus</span>
                                    <span class="services-slider__item-btn">Змінити</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-slider__item">
                                    <img loading="lazy"  width="160" height="80" class="services-slider__item-img"
                                        data-src="{{ asset('images/services/credit-kasa.png') }}" alt="Логотип Credit-Kasa">
                                    <span class="services-slider__item-title">Credit-Kasa</span>
                                    <span class="services-slider__item-btn">Змінити</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-slider__item">
                                    <img loading="lazy"  width="160" height="80" class="services-slider__item-img"
                                        data-src="{{ asset('images/services/selfie-credit.png') }}" alt="Логотип SELFIE credit">
                                    <span class="services-slider__item-title">SELFIE credit</span>
                                    <span class="services-slider__item-btn">Змінити</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-slider__item">
                                    <img loading="lazy"  width="160" height="80" class="services-slider__item-img"
                                        data-src="{{ asset('images/services/credit-plus.png') }}" alt="Логотип Credit-Plus">
                                    <span class="services-slider__item-title">Credit-Plus</span>
                                    <span class="services-slider__item-btn">Змінити</span>
                                </div>
                            </div>



                        </div>

                        <div class="swiper-pagination swiper-pagination-services"></div>

                    </div>

                </div>

                <div class="example-content">
                    <h2 class="example__title title-h2">
                        <span class="accent-color">Зміна</span>
                        кредитних
                        <br>
                        сервісів

                    </h2>
                    <div class="example-desc">

                        <p class="example__text">
                            Ми запам'ятаємо в яких сервісах ви вже взяли кредит та запропонуємо нові щоб ви обрали найкращий
                        </p>
                    </div>

                    @if (auth('web')->user())

                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

                    @else

                    <button class="example__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

                    @endif

                </div>

                <div class="example-7__decor-1 decor-grd-1"></div>

            </div>



            <div class="example example-8">

                <div class="example-box bg-grd-1">

                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/credit-kasa.png') }}"
                                alt="Логотип Credit-Kasa">
                            <span class="example-service__title">“Credit-Kasa”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">8.9</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/e-money.png') }}"
                                alt="Логотип Є-гроші">
                            <span class="example-service__title">“Є-гроші”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">8.2</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service example-service-column">
                        <div class="example-service-top">

                            <div class="example-service__col">
                                <img loading="lazy"  width="160" height="80" class="example-service__logo"
                                    data-src="{{ asset('images/services/selfie-credit.png') }}" alt="Логотип Selfie-credit">
                                <span class="example-service__title">“Selfie-credit”</span>
                            </div>
                            <div class="example-service__col">
                                <ul class="example-service__list">
                                    <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                    <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                    <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                                </ul>
                                <span class="example-service__btn-show">Детальніше</span>
                            </div>
                            <div class="example-service__col">
                                <span class="example-service__stars"></span>
                                <span class="example-service__rating">(<span>2427</span> голосів)</span>
                            </div>
                            <div class="example-service__col">
                                <span class="example-service-chart">9.5</span>


                            </div>
                            <div class="example-service__col">
                                <span class="example-service__btn-2">Отримати позику</span>
                            </div>
                        </div>
                        <div class="example-newbtn-wrapper">
                            <div class="example-newbtn">
                                <span class="example-newbtn-icon"></span>
                                <span>Сховати</span>
                            </div>
                            <span class="example-newbtn-decor"></span>
                        </div>

                    </div>

                </div>

                <div class="example-content">
                    <h2 class="example__title title-h2">
                        <span class="accent-color">Приховуйте сервіси</span>
                        <br>
                        які вам не підійшли
                    </h2>
                    <div class="example-desc">

                        <p class="example__text">
                            Щоб не звертати на них увагу
                            <br>
                            в майбутньому
                        </p>
                    </div>

                    @if (auth('web')->user())

                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

                    @else

                    <button class="example__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

                    @endif

                </div>

                <div class="example-8__decor-1 decor-grd-1"></div>


            </div>



            <div class="example example-9">

                <div class="example-box bg-grd-1">

                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/credit-kasa.png') }}"
                                alt="Логотип Credit-Kasa">
                            <span class="example-service__title">“Credit-Kasa”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">8.9</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img loading="lazy"  width="160" height="80" class="example-service__logo" data-src="{{ asset('images/services/e-money.png') }}"
                                alt="Логотип Є-гроші">
                            <span class="example-service__title">“Є-гроші”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">8.2</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service example-service-column">
                        <div class="example-service-top">

                            <div class="example-service__col">
                                <img loading="lazy"  width="160" height="80" class="example-service__logo"
                                    data-src="{{ asset('images/services/selfie-credit.png') }}" alt="Логотип Selfie-credit">
                                <span class="example-service__title">“Selfie-credit”</span>
                            </div>
                            <div class="example-service__col">
                                <ul class="example-service__list">
                                    <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                    <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                    <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                                </ul>
                                <span class="example-service__btn-show">Детальніше</span>
                            </div>
                            <div class="example-service__col">
                                <span class="example-service__stars"></span>
                                <span class="example-service__rating">(<span>2427</span> голосів)</span>
                            </div>
                            <div class="example-service__col">
                                <span class="example-service-chart">9.5</span>


                            </div>
                            <div class="example-service__col">
                                <span class="example-service__btn-2">Отримати позику</span>
                            </div>
                        </div>
                        <div class="example-newbtn-wrapper">
                            <div class="example-newbtn">
                                <span class="example-newbtn-icon"></span>
                                <span>Історія</span>
                            </div>
                            <span class="example-newbtn-decor"></span>
                        </div>

                    </div>

                    <div class="example-modal bg-grd-1">
                        <span class="example-modal__title">Історія</span>
                        <div class="example-modal__items">
                            <div class="example-modal__item">
                                <span class="example-modal__item-col">Дія</span>
                                <span class="example-modal__item-col">Дата</span>
                            </div>
                            <div class="example-modal__item">
                                <span class="example-modal__item-col">Заявка на кредит (схвалено)</span>
                                <span class="example-modal__item-col">10.12.2024</span>
                            </div>
                            <div class="example-modal__item">
                                <span class="example-modal__item-col">Ви сховали сервіс</span>
                                <span class="example-modal__item-col">10.12.2024</span>
                            </div>
                            <div class="example-modal__item">
                                <span class="example-modal__item-col">Ви активували сервіс</span>
                                <span class="example-modal__item-col">10.12.2024</span>
                            </div>
                            <div class="example-modal__item">
                                <span class="example-modal__item-col">Заявка на кредит (на розгляді)</span>
                                <span class="example-modal__item-col">10.12.2024</span>
                            </div>
                        </div>

                        <span class="example-modal__btn">Закрити</span>
                    </div>

                </div>

                <div class="example-content">
                    <h2 class="example__title title-h2">
                        Ваша
                        <span class="accent-color">історія дій</span>
                    </h2>
                    <div class="example-desc">

                        <p class="example__text">
                            Дивіться історію взаємодії із кожним
                            <br>
                            кредитним сервісом щоб нічого не забути
                        </p>
                    </div>

                    @if (auth('web')->user())

                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

                    @else

                    <button class="example__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

                    @endif

                </div>

                <div class="example-9__decor-1 decor-grd-1"></div>

            </div>


        </div>

    </div>
</section>



{{-- ? why --}}
<section class="why">
    <div class="container">
        <h2 class="why__title title-h2">
            Чому
            <span class="accent-color">варто</span>
            обрати TRIXY
        </h2>
        <div class="why__items">
            <div class="why__item bg-grd-1">
                <span class="why__item-icon"></span>
                <h3 class="why__item-title">Рейтинг сервісів T-рейтинг</h3>
                <p class="why__item-text">
                    Ми постійно аналізуємо вартість, рівень погодження та зручність сервісів які пропонуємо вам
                </p>
            </div>
            <div class="why__item bg-grd-1">
                <span class="why__item-icon"></span>
                <h3 class="why__item-title">Економія грошей</h3>
                <p class="why__item-text">
                    Плати менше по відсотках застосовуючи промокоди
                </p>
            </div>
            <div class="why__item bg-grd-1">
                <span class="why__item-icon"></span>
                <h3 class="why__item-title">Секретні промокоди</h3>
                <p class="why__item-text">
                    Зареєструвавшись в сервісі ти отримуєш доступ до унікальних промокодів, яких немає в откритому доступі
                </p>
            </div>
            <div class="why__item bg-grd-1">
                <span class="why__item-icon"></span>
                <h3 class="why__item-title">Всі сервіси в одному місці</h3>
                <p class="why__item-text">
                    Ми зібрали для вас усі найкращі кредитні сервіси в одному місці, щоб ви не витрачали час на їх пошук та
                    аналіз
                </p>
            </div>
            <div class="why__item bg-grd-1">
                <span class="why__item-icon"></span>
                <h3 class="why__item-title">Персональні пропозиції</h3>
                <p class="why__item-text">
                    В вашому особистому кабінеті ми покажемо вам найкращі варіанти кредитів, сформовані на основі вашого
                    кредитного рейтингу та бонусів
                </p>
            </div>
            <div class="why__item bg-grd-1">
                <span class="why__item-icon"></span>
                <h3 class="why__item-title">Ваша історія</h3>
                <p class="why__item-text">
                    Дивіться історію ваших звернень в кредитні сервіси щоб розуміти ваши можливості звернутися в інші
                </p>
            </div>
        </div>
    </div>
</section>


{{-- ? reviews --}}

@include('frontend.includes.reviews')




{{-- ? why --}}
@include('frontend.includes.faq')



{{-- ? slider posts --}}

@include('frontend.includes.slider-posts')


{{-- ? info-section --}}
<section class="info-section">
    <div class="container">
        <h2 class="info-section__title title-h2">Кредит онлайн на карту: взяти кредит чи позику на картку</h2>
        <div class="info-section-box">
            <h3 class="info-section-box__title title-h3">
                Кредит до зарплати онлайн на картку — коли терміново потрібні гроші
            </h3>
            <div class="info-section-box-content">
                <p class="info-section-box__text">
                    Коли життя підкидає фінансові труднощі — кредит може стати не проблемою, а рішенням. Саме так можна охарактеризувати популярність послуги гроші до зарплати на картку онлайн.
                </p>
                <p class="info-section-box__text">
                    Знаєш, скільки українців живуть «від авансу до авансу»? Понад 60%. І ця цифра — не з підручника, а з нашого повсякденного життя. Українці все частіше живуть за принципом «від зарплати до зарплати». Така фінансова модель робить людей вразливими до непередбачуваних витрат. Зарплата — ще не на картці, а комуналку платити треба вже вчора. Що робити, коли терміново потрібні гроші, а родичі зайняті і заначка давно закінчилась?
                </p>
                <p class="info-section-box__text">
                    У такі моменти починаєш шукати будь-який спосіб протриматись до зарплати. І саме тут на допомогу приходить короткостроковий кредит. Це не чарівна паличка, але у багатьох випадках — єдиний реальний варіант.
                </p>
            </div>
        </div>
                
        <div class="info-section-box">
            <h3 class="info-section-box__title title-h3">
                Коли потрібен кредит терміново на карту — без зайвих питань
            </h3>
            <div class="info-section-box-content">
                <p class="info-section-box__text">
                Майже у всіх трапляються ситуації, коли потрібні гроші до зарплати. Запізнилась виплата? Банально не вистачає на проїзд і продукти? І тут починається пошук: «де можна взяти кредит онлайн на карту терміново?».
                </p>
                <p class="info-section-box__text">
                    Можна було б сподіватись на банки, але довідки, черги, очікування — це надто довго. В таких ситуаціях рятівником стає мікропозика. На допомогу приходять МФО — мікрофінансові організації.
                </p>
            </div>
        </div>

        <div class="info-section-box">
            <h3 class="info-section-box__title title-h3">
                Хто реально видає онлайн кредити до зарплати на карту?
            </h3>
            <div class="info-section-box-content">
                <p class="info-section-box__text">
                    Якщо у вас є відкрита кредитка, варто скористатися нею. Це вигідніше через нижчі відсоткові ставки. Проте якщо не маєш кредитного ліміту в банку, то серед доступних варіантів — звернення до МФО. Вони працюють швидко, не вимагають гору документів і приймають рішення за лічені хвилини.
                </p>
                <p class="info-section-box__text">
                    Оформити кредит онлайн — це як замовити їжу. Заходиш на сайт, заповнюєш анкету, отримуєш гроші. Без черг, нервів і зайвих розпитувань:
                </p>
                <ul>
                    <li>швидкість: від моменту заявки до грошей на картці — 15–30 хвилин.</li>
                    <li>доступність: онлайн із будь-якого смартфона.</li>
                    <li>мінімум документів.</li>
                </ul> 
                <p class="info-section-box__text">
                    Більше того, багато МФО працюють цілодобово. Тобто навіть якщо проблема виникла опівночі — рішення можна знайти одразу.
                </p>
                 <p class="info-section-box__text">
                    А чому банки не настільки оперативні? Тому що там інший підхід до оцінки ризиків, жорсткіші вимоги і довший шлях від заявки до грошей. Кредит в МФО — це про швидкість, простоту і доступність. Кредит в банках – це про меншу переплату відсотків, але довший час оформлення.
                </p>
            </div>
        </div>

        <div class="info-section-box">
            <h3 class="info-section-box__title title-h3">
                Онлайн кредит у МФО — це завжди дорого?
            </h3>
            <div class="info-section-box-content">
                <p class="info-section-box__text">
                    Так, правда — кредити в МФО не з дешевих. Але є варіанти. Деякі МФО дають перший кредит під 0%. А ще існують промокоди, які знижують відсоткову ставку в рази. Просто треба знати, де шукати.
                </p>
                <p class="info-section-box__text">
                    👉 Маленький лайфхак: оформлюєш «перший кредит під 0 відсотків» у різних компаніях (по черзі), і кілька місяців живеш без відсотків.
                </p>
                <p class="info-section-box__text">
                    Саме в цьому моменті допоможе наш сервіс — Trixy. Ми збираємо акції, оновлюємо списки знижок і підказуємо, де взяти дешевий кредит онлайн на карту. А ще — сортуємо сервіси за надійністю, відгуками клієнтів, імовірністю отримання і т.д.
                </p>
                <p class="info-section-box__text">
                    👉 Кредит як вогонь у печі: якщо керувати ним правильно — зігріє, але якщо пустити все напризволяще — може згоріти хата. Треба знати межу і відповідально підходити до користування кредитом.
                </p>
            </div>
        </div>

        <div class="info-section-box">
            <h3 class="info-section-box__title title-h3">
                Чому кредити до зарплати онлайн стали такими популярними?
            </h3>
            <div class="info-section-box-content">
                <p class="info-section-box__text">
                    Бо більшість із нас не мають фінансової подушки. Якщо ти живеш «від зарплати до зарплати», будь-яка позапланова витрата — як грім серед ясного неба. І тоді кредит до зарплати стає не примхою, а необхідністю.
                </p>
                <p class="info-section-box__text">
                    Кредит до зарплати допомагає в момент нестачі грошей. Так, він має свою ціну, але часто це не поганий вихід у ситуації, де інші варіанти можуть виявитися гіршими — наприклад, відключення електрики за несплачений рахунок чи прострочення обов’язкового платежу, що може потягнути за собою штрафи або пеню.
                </p>
                <p class="info-section-box__text">
                    До речі, кредит до зарплати не завжди про безвихідь. Часто це — спосіб розподілити фінансове навантаження. Наприклад, замість того, щоб вичерпати всю зарплату на початку місяця, ти береш невелику суму в кредит, і розраховуєш бюджет спокійніше.
                </p>
            </div>
        </div>

        <div class="info-section-box">
            <h3 class="info-section-box__title title-h3">
                Як уникнути боргової ями, взявши кредит онлайн?
            </h3>
            <div class="info-section-box-content">
                <p class="info-section-box__text">
                    По-перше, не бери більше, ніж можеш повернути. По-друге, повертай вчасно — це позбавить тебе штрафів. І по-третє — вибирай компанію з адекватними умовами. Наш сервіс допоможе знайти саме таку.
                </p>
                <p class="info-section-box__text">
                    Ми підбираємо перевірені МФО, де можна взяти онлайн кредит на карту з мінімальною переплатою. А ще — даємо реальні підказки: як прорахувати суму, на які дні краще оформляти заявку, які компанії дають відстрочку без штрафу.
                </p>
                <p class="info-section-box__text">
                    👉 І пам’ятай: Відповідальність — це твоя суперсила. І вона так саме працює у світі кредитів.
                </p>
            </div>
        </div>

        <div class="info-section-box">
            <h3 class="info-section-box__title title-h3">
                Взяти кредит онлайн чи зачекати: коли це виправдано?
            </h3>
            <div class="info-section-box-content">
                <p class="info-section-box__text">
                    Причин взяти кредит може бути багато: лікування, ремонт, поїздка, навчання. Але ми радимо брати позику лише на дійсно важливі цілі. Купити новий смартфон «бо знижка» — сумнівна ідея.
                </p>
                <p class="info-section-box__text">
                    А от коли йдеться про здоров’я чи харчі на тиждень — це вже інша справа. Головне — бути впевненим, що зможеш повернути позику без стресу. Інакше наступна зарплата знову розлетиться за день.
                </p>
                <p class="info-section-box__text">
                    До речі, є ще один момент: кредит може допомогти, якщо тобі бракує зовсім трохи. Наприклад, не вистачає 500 гривень до платежу за навчання дитини. У такому випадку — це цілком виправдане рішення.
                </p>
            </div>
        </div>

        <div class="info-section-box">
            <h3 class="info-section-box__title title-h3">
                А що, якщо відмовили?
            </h3>
            <div class="info-section-box-content">
                <p class="info-section-box__text">
                    Буває. Не всі МФО говорять чому, просто кажуть «ні». Що тоді? Змінюй компанію. Але не подавай заявки у десять місць одразу — це може зіпсувати твій кредитний рейтинг.
                </p>
                <p class="info-section-box__text">
                    👉 Подай ще одну заявку через наш сервіс.
                </p>
                <p class="info-section-box__text">
                    Ми підкажемо де шанси на погодження вищі. Ти зможеш бачити історію своїх заявок. Це зручно — як нотатник по кредитах. 
                </p>
                <p class="info-section-box__text">
                    👉 До речі, у нас є функція: «Історія твоїх заявок». Бачиш, куди подавав, які МФО хочеш приховати, щоб не відволікатися при виборі і т.д.
                </p>
            </div>
        </div>

        <div class="info-section-box">
            <h3 class="info-section-box__title title-h3">
                Які є альтернативи МФО для термінового кредиту онлайн?
            </h3>
            <div class="info-section-box-content">
                <p class="info-section-box__text">
                    Банки пропонують більші суми і дешевші кредити. Якщо є змога скористатись кредитним лімітом на картці – це хороша ідея, бо це суттєво дешевше. Коли в тебе стабільний дохід і є час на оформлення, краще заздалегідь подбати про кредитний ліміт.
                </p>
                <table>
                    <thead>
                        <tr>
                            <th>Вибір</th>
                            <th>Час</th>
                            <th>Імовірність отримання</th>
                            <th>Бюрократія</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Родичі</td>
                            <td>Миттєво</td>
                            <td>Не завжди можливо</td>
                            <td>Залежить від стосунків</td>
                        </tr>
                        <tr>                            
                            <td>Банк</td>
                            <td>1–5 днів</td>
                            <td>Середня</td>
                            <td>Висока</td>                          
                        </tr>
                        <tr>                            
                            <td>Кредитна картка</td>
                            <td>Миттєво</td>
                            <td>Якщо є ліміт</td>
                            <td>Мінімальна</td>                          
                        </tr>
                        <tr>                            
                            <td>МФО</td>
                            <td>10–20 хв</td>
                            <td>Висока</td>
                            <td>Мінімальна</td>                          
                        </tr>
                    </tbody>
                </table>
                <p class="info-section-box__text">
                    А от коли терміново потрібні гроші, або банки відмовляють — МФО іноді єдиний реальний варіант. Це альтернатива, коли «брати у знайомих» не працює.
                </p>
            </div>
        </div>

        <div class="info-section-box">
            <h3 class="info-section-box__title title-h3">
                Як отримати кредит онлайн за 20 хвилин?
            </h3>
            <div class="info-section-box-content">
                <p class="info-section-box__text">
                    Простіше, ніж здається:
                </p>
                <ol>
                    <li>Обираєш в нашому сервісі МФО з найкращими умовами</li>
                    <li>Переходиш на сайт цього МФО</li>
                    <li>Вказуєш суму і термін</li>
                    <li>Заповнюєш заявку (5 хв)</li>
                    <li>Отримуєш гроші (ще 10 хв).</li>
                </ol>
                <p class="info-section-box__text">
                    Навіть якщо перша спроба не вдалась — змінюй МФО. Trixy підкаже, де є пропозиції для людей з поганою кредитною історією. А вчасне погашення допоможе її покращити.
                </p>
                <p class="info-section-box__text">
                    До речі, багато хто не знає: в деяких МФО можна отримати схвалення навіть при простроченнях у минулому. Все залежить від внутрішньої політики компанії. А ми це моніторимо щодня.
                </p>
            </div>
        </div>

        <div class="info-section-box">
            <h3 class="info-section-box__title title-h3">
                Онлайн кредити з Trixy — як ми допоможемо тобі
            </h3>
            <div class="info-section-box-content">
                <p class="info-section-box__text">
                    Ми щодня аналізуємо ринок онлайн кредитів. На нашому сайті — тільки перевірені МФО з рейтингами, акціями та знижками. Хочеш взяти кредит онлайн цілодобово? Хочеш перший кредит під 0%? Або шукаєш кредит з найбільшою ймовірністю схвалення?
                </p>
                <p class="info-section-box__text">
                    Все це вже є на Trixy.com.ua. Тобі достатньо лише зареєструватися, щоб бачити історію заявок, приховувати непотрібні сервіси, фільтрувати МФО за умовами і бути в курсі акційних пропозицій.
                </p>
                <p class="info-section-box__text">
                    👉 Trixy - твій особистий менеджер по кредитах:
                </p>
                <ul>
                    <li>щодня оновлюємо рейтинги МФО (за швидкістю, умовами, рівнем схвалення)</li>
                    <li>показуємо де перший кредит під 0%, а де — гроші в кредит онлайн із мінімальною переплатою</li>
                    <li>даємо актуальні промокоди</li>
                    <li>зберігаємо твої заявки</li>
                    <li>дозволяємо фільтрувати, ховати, вибирати компанії під себе.</li>
                </ul>
                <p class="info-section-box__text">
                    Ми працюємо не з усіма, а з тими, кому довіряємо. Перевіряємо не лише тарифи, а й клієнтську підтримку, зручність анкети і т.д.
                </p>
                <p class="info-section-box__text">
                    Кредит до зарплати — не ідеальне рішення, але дієве. І з правильним підходом — цілком розумне. А з нашим сервісом ви зможете заощадити свої гроші та не потрапити у боргову яму.
                </p>
            </div>
        </div>

    </div>
</section>

@endsection