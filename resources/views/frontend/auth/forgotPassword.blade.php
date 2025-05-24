@extends('frontend.layouts.forgot')

@section('content')


<section class="forgot">

    <div class="container">

        <div class="forgot-body bg-grd-1">
            
            <div class="forgot__title">{{ _('Відновлення паролю') }}</div>

    
            <div class="forgot-preloader">
                <img width="80" height="80" src="{{ asset('images/icons/circles-anim.svg') }}" alt="">
            </div>

            <div class="forgot-success">
                <span class="forgot-success__title">
                    {{ __('Посилання для зміни паролю відправлено на вашу пошту.') }}
                </span>
                <span class="forgot-success-group">
                   <span class="forgot-success__text">{{ __('Важливо! ') }}</span>
                   <span class="forgot-success__text">{{ __('Посилання дії 10 хвилин.') }}</span>
                </span>                
            </div>



            <form id=forgot-form class="forgot-form modal-form" method="POST" action="{{ route('forgot.password.post') }}">
              
                @csrf
               
                <div class="modal-form-box">
                    <div class="modal-form-group">
                        <span class="forgot-form__text">
                        {{ __('Введіть ваш e-mail.') }}
                      </span>
                      <span class="forgot-form__text">
                        {{ __('Ми надішлемо вам посилання на відновлення паролю.') }}
                      </span>                                     
                    </div>   
                    <div class="modal-form-group">
                        <label class="modal-form__label" for="email-forgot">Email:</label>                
                        <input id="email-forgot" class="modal-form__input" type="text" placeholder="example@gmail.com" autocomplete="off"
                        name="email">                                      
                    </div>   
                </div>
                
             
                <div class="message-errors"></div>
               
    
                <button type="button" class="forgot-form__btn btn-1 btn-send">

                    {{ __('Отримати посилання') }}
                
                </button>
            </form>
        </div>

    </div>
</section>

@endsection
