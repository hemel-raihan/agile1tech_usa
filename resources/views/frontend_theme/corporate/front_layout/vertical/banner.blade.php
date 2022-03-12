

@isset($custom_page)
<section class=" slider-element swiper_wrapper " style="height: 300px;">
    <div class="slider-inner">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-animate="fadeInUp">{{$custom_page->title}}</h2>
                        </div>
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('{{asset('uploads/pagephoto/'.$custom_page->image)}}');"></div>
                    <div class="swiper-slide-bg"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endisset


@isset($servicc)
<section class=" slider-element swiper_wrapper " style="height: 300px;">
    <div class="slider-inner">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-animate="fadeInUp">{{$servicc->title}}</h2>
                        </div>
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('{{asset('uploads/servicephoto/'.$servicc->image)}}');"></div>
                    <div class="swiper-slide-bg"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endisset

