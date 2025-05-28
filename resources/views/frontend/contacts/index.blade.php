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


{{-- ? about-hero --}}
<section class="contacts-hero">
    <div class="container">
        {{-- <h1 class="contacts__title title-h1">Контакти</h1> --}}

        <div class="contacts-box contacts-box-address">

            <div class="contacts-box-group">
                <div class="contacts-address">
                                            
                    <h1 class="contacts-address__title title-h2">Адреса та інформація про компанію</h1>
                    <div class="contacts-address-content">
                        <span class="contacts-address__text">Головний офіс та юридична адреса:</span>
                        <div class="contacts-address-group">
                            <span class="contacts-address__text">Trixy</span>
                            <span class="contacts-address__text">03110, місто Київ, </span>
                            <span class="contacts-address__text">вулиця Солом'янська, </span>
                            <span class="contacts-address__text">будинок 62-Б, офіс 5</span>
                        </div>
                        <span class="contacts-address__text">На час воєнного стану команда працює віддалено</span>
                    </div>
                </div>
                <div class="contacts-map-wrap">
                    <div class="contacts-map-preloader">              
                        <img width="60" height="60" src="{{ asset('images/icons/circles-anim.svg') }}">            
                    </div>
                    
                    <iframe id="contacts-map" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.1204091523496!2d30.485156877520705!3d50.420228189538065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ceda585b70a9%3A0x6bb5576008c8a6da!2z0YPQuy4g0KHQvtC70L7QvNC10L3RgdC60LDRjywgMzIsINCa0LjQtdCyLCDQo9C60YDQsNC40L3QsCwgMDIwMDA!5e0!3m2!1sru!2sfr!4v1748347586754!5m2!1sru!2sfr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        
        <div class="contacts-box">                    
            <div class="contacts__desc">
                <p>                
                    Ми цінуємо ваші відгуки. Якщо маєте запитання чи пропозиції, повідомте нам.            
                </p>
                <p>
                    У Trixy ми постійно вдосконалюємо сервіс, щоб допомогти вам робити кращий фінансовий вибір.
                </p>        
            </div>
            <p class="contacts-box__text">
                <span>Напишіть нам на 
                <a class="contacts__link link" href="mailto:support@trixy.com.ua">support@trixy.com.ua</a>
                </span>                 
                <span>або заповніть Контактну форму</span>
            </p>
                    
            <form id="contacts-form" class="contacts-form" action="{{ route('contacts.send') }}">
                                  
                <div class="contacts-form-preloader">                
                    <img width="80" height="80" src="{{ asset('images/icons/circles-anim.svg') }}">            
                </div>
            
                <div class="contact-forms-success">                
                    <span class="forgot-success__title">                    
                        {{ __('Повідомлення успішно відправлено.') }}                
                    </span>                            
                </div>
            
                <div class="contacts-form-box">                
                    <div class="form-group">                
                        <label class="contacts__label" for="name-contacts">Ім'я:</label>               
                        <input id="name-contacts" class="contacts__input" type="text" autocomplete="off" name="name">                                     
                    </div>    
                
                    <div class="form-group">                
                        <label class="contacts__label" for="email-contacts">Email:</label>              
                        <input id="email-contacts" class="contacts__input" type="text" autocomplete="off" name="email">                                     
                    </div>    
                
                    <div class="form-group">
                        <label class="contacts__label" for="message-contacts">Повідомлення:</label>                
                        <textarea id="message-contacts" class="contacts__textarea scrollbar-track" name="message"  spellcheck="false"></textarea>                                     
                    </div> 
                </div>        
            
                <div class="message-errors"></div>
            
                <button id="btn-contacts-send" type="button" class="contacts__btn btn-1 btn-send">Надіслати</button>
            
            </form>

        </div>

        

    </div>
</section>

{{-- ? why --}}
@include('frontend.includes.faq')



{{-- ? slider posts --}}

@include('frontend.includes.slider-posts')


@endsection