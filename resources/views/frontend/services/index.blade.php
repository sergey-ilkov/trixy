@extends('frontend.layouts.base')

@once

@push('css')

{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css"> --}}
<link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

@endpush



@push('js')

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" defer></script> --}}
<script src="{{ asset('js/swiper-bundle.min.js') }}" defer></script>
@endpush


@endonce




@section('content')


{{-- ? services-hero --}}
<section class="services-hero">
    <div class="container">
        <div class="services-hero__inner">
            <div class="services-hero-content">
                <h1 class="services-hero__title title-h1">
                    <span class="accent-color">Оберай найкращі сервіси </span>
                    <br>
                    Отримуй знижки
                    <br>
                    Використовуй можливості
                </h1>

                @if (!auth('web')->user())

                <div class="services-hero__actions">
                    <button class="services-hero__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

                    <a class="services-hero__link btn-2" href="{{ route('about') }}">Про нас</a>
                </div>


                @endif




            </div>

            <div class="services-hero-example">
                <div class="example-box bg-grd-1">
                    <div class="example-service">
                        <div class="example-service__col">
                            <img width="160" height="80" class="example-service__logo" src="{{ asset('images/services/credit-kasa.png') }}"
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
                            <img width="160" height="80" class="example-service__logo" src="{{ asset('images/services/e-money.png') }}"
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
                            <img width="160" height="80" class="example-service__logo"
                                src="{{ asset('images/services/selfie-credit.png') }}" alt="Логотип Selfie-credit">
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
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img width="160" height="80" class="example-service__logo" src="{{ asset('images/services/credit-plus.png') }}"
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
            </div>

            <span class="services-hero-1 decor-grd-1"></span>
            <span class="services-hero-2 decor-grd-2"></span>
        </div>
    </div>
</section>





{{-- ? services --}}
<section id="services" class="services">

    <div class="services-preloader">
        <span class="services-preloader-text">Завантаження даних...</span>
        <span class="services-preloader-svg"></span>
    </div>

    <div class="container">


        <div id="services-tabs" class="services-tabs">

            <div class="services-tabs__buttons">

                           
                {{-- ? db --}}
                @foreach ($categories as $category)

                    <button class="services-tabs__btn" type="button">{{ $category->name }}</button>
                    
                @endforeach
                {{-- ? db --}}

                @if (auth('web')->user())

                <button class="services-tabs__btn" type="button">Історія кредитів</button>

                @endif

            </div>

            <div class="services-tabs__content">


                {{-- ? db --}}
                @foreach ($categories as $category)

                    <div class="services-accordion">
                        <button class="services-accordion__btn" type="button">
                            <span>{{ $category->name }}</span>
                            <svg viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L13 1" stroke="currentColor" />
                            </svg>
                        </button>
                        <div class="services-tabs__panel">
                            <div class="services-tabs__panel-top">
                                <h2 class="services-tabs__panel-title">{{ $category->title }}</h2>
    
                                <div class="services-tabs__list">
                                   
                                    {{-- <li class="services-tabs__item">{{ $category->description }}</li> --}}
                                    {!! $category->description !!}
                                </div>
                            </div>
                            <p class="services-tabs__panel-subtitle">Рейтинг кредитних сервісів</p>
    
    
                            <div class="credit-services" data-category="{{ $category->slug}}"></div>
    
                        </div>
                    </div>

                @endforeach
                {{-- ? db --}}


                @if (auth('web')->user())

                <div class="services-accordion">
                    <button class="services-accordion__btn" type="button">
                        <span>Історія кредитів</span>
                        <svg viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L13 1" stroke="currentColor" />
                        </svg>
                    </button>
                    <div class="services-tabs__panel">
                        <div class="services-tabs__panel-top">
                            <h2 class="services-tabs__panel-title">
                                Для коректного відображення історії заявок вам необхідно:
                            </h2>


                            <ul class="services-tabs__list">
                                <li class="services-tabs__item">
                                    увійти в особистий кабінет Trixy
                                </li>
                                <li class="services-tabs__item">
                                    обрати кредитний сервіс та натиснути кнопку "Отримати позику"
                                </li>
                                <li class="services-tabs__item">
                                    вам відкриється сайт кредитного обраного кредитного сервісу
                                </li>
                                <li class="services-tabs__item">
                                    подати заявку на кредит.
                                </li>
                            </ul>

                            <p class="services-tabs__text">
                                Ми отримуємо інформацію автоматично від кредитних сервісів протягом декількох годин.
                            </p>

                        </div>


                    </div>
                </div>

                @endif


            </div>

        </div>




    </div>
</section>

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