@extends('layouts.site')

@section('content')
    <section class="section_about">
        <div class="container_about">
            <h1 class="title">Магазин</h1>
        </div>
        <div class="about_qw">
            <div class="store">
                @foreach([1, 2, 3, 4, 5, 6] as $item)
                <div class="g-i-tile g-i-tile-catalog">
                    <div class="over-wraper">
                        <div class="g-i-tile-i available">
                            <div class="g-i-tile-i-box">
                                <div class="g-i-tile-i-box-desc">
                                    <div class="clearfix pos-fix">
                                        <div class="g-i-tile-i-image fix-height" tool_tip="1" id="image_item28720489">
                                            <div class="cat-g-id-container">
                                                <div class="g-id-wrap clearfix">
                                                    <div class="g-id" style="display: none;">28720489</div>
                                                </div>
                                            </div>
                                            <a href="https://rozetka.com.ua/luminarc_n5277/p28720489/" class="responsive-img centering-child-img" onclick="document.fireEvent('goodsImageClick', {extend_event: [{name: 'goods_id', value: 28720489}]}); return true">
                                                <img src="https://i2.rozetka.ua/goods/2436892/luminarc_n5277_images_2436892233.jpg" width="240" height="128" alt="Детский набор Luminarc Disney Frozen Winter Magic из 3 предметов (N5277)" title="Детский набор Luminarc Disney Frozen Winter Magic из 3 предметов (N5277)">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="g-i-tile-i-title clearfix">
                                        <a href="https://rozetka.com.ua/luminarc_n5277/p28720489/" onclick="document.fireEvent('goodsTitleClick', {extend_event: [{name: 'goods_id', value: 28720489}, {name: 'eventLocation', value: 'CatalogHighLevel'}]}); return true">
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
