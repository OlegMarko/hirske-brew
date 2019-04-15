@extends('layouts.site')

@section('content')
    <section class="section_galery">
        <div class="slider-container">
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/c1.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/c2.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/c3.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/c4.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/c5.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/c6.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/c7.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/c8.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/c9.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/c10.jpg') }});"></div>
            <div class="slider-container-i" style="background-image: url({{ asset('assets/images/c11.jpg') }});"></div>
        </div>

        <div class="gallery_buttons_position">
            <div class="gallery_buttons_wrap">
                <button class="gallery_slider_next slick-arrow" style="display: block;">
                    <i class="i_mini_arrow" style="background-image: url({{ asset('assets/svg/arrow.svg') }});"></i>
                </button>
                <button class="gallery_slider_prev slick-arrow" style="display: block;">
                    <i class="i_mini_arrow" style="background-image: url({{ asset('assets/svg/arrow.svg') }});"></i>
                </button>
            </div>
        </div>
    </section>
@endsection
