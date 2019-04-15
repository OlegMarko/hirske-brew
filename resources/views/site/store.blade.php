@extends('layouts.site')

@section('content')
    <section class="section_about">
        <div class="container_about">
            <h1 class="title">Магазин</h1>
        </div>
        <div class="about_qw">
            <div class="store">
                @foreach([1, 2, 3, 4] as $item)
                <div class="g-i-tile g-i-tile-catalog">
                    <div class="over-wraper">
                        <div class="g-i-tile-i available">
                            <div class="g-i-tile-i-box">
                                <div class="g-i-tile-i-box-desc">
                                    <div class="clearfix pos-fix">
                                        <div class="g-i-tile-i-image fix-height">
                                            <a href="#" class="responsive-img centering-child-img">
                                                <img src="{{ asset('/assets/images/product.png') }}" alt="product" title="product">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="g-i-tile-i-title clearfix">
                                        <a href="#">
                                            Детский набор Luminarc Disney Frozen Winter Magic из 3 предметов (N5277)
                                        </a>
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
