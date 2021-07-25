@extends('common.master')

@section('title', $title)

@section('body')
    <div id="home-swiper" class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="hero-slide-item set-bg" data-setbg="/resources/image/slider-bg-3.webp" style="background-image: url('/resources/image/slider-bg-3.webp');">
                    <div class="hs-text">
                        <h2 class="hs-title-1"><span>網站準備中，敬請期待</span></h2>
                        <h2 class="hs-title-2"><span>Coming Soon</span></h2>
                        <h2 class="hs-title-3"><span>Bientôt disponible</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        const home_swiper = new Swiper('#home-swiper', {
            // Default parameters
            slidesPerView: 1,
            loop: 1
        })
    </script>
    <br/>
    <div id="gallery-swiper" class="gallery swiper-container">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="gs-item set-bg" data-setbg="/resources/image/instagram/1.jpg.webp" style="background-image: url('/resources/image/instagram/1.jpg.webp'); height: 255.454px;"></div>
            </div>
            <div class="swiper-slide">
                <div class="gs-item set-bg" data-setbg="/resources/image/instagram/2.jpg.webp" style="background-image: url('/resources/image/instagram/2.jpg.webp'); height: 255.454px;"></div>
            </div>
            <div class="swiper-slide">
                <div class="gs-item set-bg" data-setbg="/resources/image/instagram/3.jpg.webp" style="background-image: url('/resources/image/instagram/3.jpg.webp'); height: 255.454px;"></div>
            </div>
            <div class="swiper-slide">
                <div class="gs-item set-bg" data-setbg="/resources/image/instagram/4.jpg.webp" style="background-image: url('/resources/image/instagram/4.jpg.webp'); height: 255.454px;"></div>
            </div>
            <div class="swiper-slide">
                <div class="gs-item set-bg" data-setbg="/resources/image/instagram/5.jpg.webp" style="background-image: url('/resources/image/instagram/5.jpg.webp'); height: 255.454px;"></div>
            </div>
            <div class="swiper-slide">
                <div class="gs-item set-bg" data-setbg="/resources/image/instagram/6.jpg.webp" style="background-image: url('/resources/image/instagram/6.jpg.webp'); height: 255.454px;"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        const gallery_swiper = new Swiper('#gallery-swiper', {
            // Default parameters
            slidesPerView: 6,
            breakpoints: {
                480: {
                  slidesPerView: 2
                },
                768: {
                  slidesPerView: 3
                },
                1200: {
                  slidesPerView: 4
                }
            }
        })
    </script>
</div>
@endsection