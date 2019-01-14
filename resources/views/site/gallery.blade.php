@extends('layouts.site')

@section('content')
    <section class="gallery-container">
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

        <div class="slider-buttons">
            <div class="slider-buttons-container">
                <button class="slider-next">
                    <i class="arrow-m" style="background-image: url({{ asset('assets/svg/arrow.svg') }});"></i>
                </button>
                <button class="slider-prev" >
                    <i  class="arrow-m" style="background-image: url({{ asset('assets/svg/arrow.svg') }});"></i>
                </button>
            </div>
        </div>
    </section>
@endsection
