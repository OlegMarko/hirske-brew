@extends('layouts.site')

@section('content')
    <section class="section_about">
        <div class="container_about">
            <h1 class="title">Магазин</h1>
        </div>
        <div class="about_qw">
            <div class="store">
                @foreach($products as $product)
                <div class="g-i-tile g-i-tile-catalog">
                    <div class="over-wraper">
                        <div class="g-i-tile-i available">
                            <div class="g-i-tile-i-box">
                                <div class="g-i-tile-i-box-desc">
                                    <div class="clearfix pos-fix">
                                        <div class="g-i-tile-i-image fix-height">
                                            <a href="#" class="responsive-img centering-child-img">
                                                <img src="{{ asset('storage/' . $product->file) }}" alt="product" title="product">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="g-i-tile-i-title clearfix">
                                        <h3>{{ $product->name }}</h3>
                                        <span class="price">{{ $product->price }} грн</span>
                                        <hr>
                                        <p>{{ $product->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
