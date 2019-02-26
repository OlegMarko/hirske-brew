@extends('layouts.site1')

@section('content')
    <section class="section-block">
        <div class="video-container">
            <video id="video-el" autoplay="autoplay" loop="loop" muted preload="auto" poster="{{ asset('assets/files/poster.jpg') }}" >
                <source src="{{ asset('assets/files/puvovarna.webm') }}" type="video/webm"/>
                <source src="{{ asset('assets/files/puvovarna.ogv') }}" type="video/ogg"/>
                <source src="{{ asset('assets/files/puvovarna.mp4') }}" type="video/mp4"/>
                Оновіть свій браузер
            </video>
        </div>

        <div class="button-container-1">
            <a href="{{ url('about') }}" class="btn-to-about">Про нас</a>
        </div>
    </section>
@endsection
