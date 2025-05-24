<section class="section-slider-posts">
    <div class="container">
        
        
        
        <div class="slider-posts">

            <div class="slider-post__items">

                @if ($posts->isEmpty())
                    <p class="info-text">Статей для слайдеру ще немає</p>
                @else
                    
                @foreach ($posts as $post)


                <div class="slider-post__item">


                    <div class="slider-post__item-image">
                         <a href="{{ route('article', $post->slug) }}" class="slider-post__item-link" target="_blank">

                             <img src="{{ asset('storage/' . $post->image_min) }}" alt="{{ $post->alt_image }}">
                         </a>
                    </div>

                    <div class="slider-post__content">

    
                        <h3 class="slider-post__item-title">{{ $post->title }}</h3>
    
                        <p class="slider-post__item-desc">{{ $post->description }}</p>
                            
                        <a href="{{ route('article', $post->slug) }}" class="slider-post__item-link" target="_blank">Link</a>
                    </div>


                </div>
    
    
    
                @endforeach

                @endif

            </div>

        </div>


    </div>
</section>

