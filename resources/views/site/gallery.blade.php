@extends('layouts.site')

@section('content')
    <section class="section_galery">
        <div class="slider-container">
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/g1.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/g2.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/g3.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/g4.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/g5.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/g6.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/g7.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/g8.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/g9.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/g10.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/g11.jpg') }});"></div>
        </div>

        <div class="gallery_buttons_position">
            <div class="gallery_buttons_wrap">
                <button class="gallery_slider_next slick-arrow" style="display: block;">
                    <i class="i_mini_arrow" style="background-image: url(http://jager.if.ua/wp-content/themes/lionline/dist/images/mini_arrow_stroke.svg);"></i>
                    <i class="i_mini_arrow" style="background-image: url(http://jager.if.ua/wp-content/themes/lionline/dist/images/mini_arrow_no_stroke.svg);"></i>
                </button>
                <button class="gallery_slider_prev slick-arrow" style="display: block;">
                    <i class="i_mini_arrow" style="background-image: url(http://jager.if.ua/wp-content/themes/lionline/dist/images/mini_arrow_stroke.svg);"></i>
                    <i class="i_mini_arrow" style="background-image: url(http://jager.if.ua/wp-content/themes/lionline/dist/images/mini_arrow_no_stroke.svg);"></i>
                </button>
            </div>
        </div>
    </section>
@endsection
