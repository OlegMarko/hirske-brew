@extends('layouts.site')

@section('content')
    <section class="section_about">
        <div class="container_about">
            <h1 class="title">Пивоварня</h1>
        </div>
        <div class="about_qw">

            <div class="bubbles_bg"></div>

            <div id="water_bg">
                <canvas class="waterwave-canvas"></canvas>
            </div>



            <div class="qw_content">
                <p>
                <p>Броварня "ЯГЕР" заснована у 2000 році. 17 років на ринку - складний шлях пошуків рецептури, іновацій у варці та обладнанні.<br />
                    У 2013 році змінюється керівництво броварні, і починається новий етап нашого виробництва: на броварні замінене обладнання. Завдяки цьому нам вдалося удосконалити рецептуру, а також залучити нових постачальників сировини, що вплинуло на свіжість пива, його термостійкість.</p>
                <p>Сьогодні ми впевнені у якості продукту, який ви купуєте у нас та у наших офіційних представників. Ми зосередилися на рецептурі двох видів пива, і надаємо значення якості, а не кількісній різноманітності. </p>
                <p>Скуштуйте "ЯГЕР" у офіційних представників нашої компанії у Києві, Коломиї, Яремче, Долині, Брошневі та інших містах. </p>
                </p>
            </div>
        </div>
    </section>

    <script>
        (function( $ ) {
            $.fn.waterwave = function( options ) {
                // DEFAULT OPTIONS
                var settings = $.extend({
                    parent : '',
                    color : '#000',
                    direction: 'up',
                    background: ''
                }, options );

                var waterwave = this;

                waterwave.init = function() {
                    var TAU = Math.PI * 2;
                    var density = 1;
                    var speed = 1;
                    var res = 0.005; // percentage of screen per x segment
                    var outerScale = 0.05 / density;
                    var inc = 0;
                    var c = waterwave[0];
                    var ctx = c.getContext('2d');
                    var grad = ctx.createLinearGradient(0, 0, 0, c.height * 4);
                    function onResize() {
                        if(options.direction == 'down') {
                            waterwave.attr({
                                width: jQuery(parent).width() + "px"
                            });
                        }
                        else {
                            waterwave.attr({
                                width: jQuery(waterwave).parent().width() + "px",
                                // height: jQuery(waterwave).parent().height() + "px"
                                height: jQuery('.qw_content').outerHeight() + "px"
                            });
                        }
                    }
                    onResize();
                    setTimeout(function() {
                        loop();
                    }, 500);
                    $(window).resize(onResize);

                    function loop() {
                        inc -= speed;
                        drawWave(options.color);
                        requestAnimationFrame(loop);
                    }


                    function drawBG(patternCanvas, w, h) {
                        var space = ctx.createPattern(patternCanvas, 'repeat');
                        ctx.fillStyle = space;
                        ctx.fillRect(0, 0, w, h);
                    }

                    function drawWave(color) {
                        var w = c.offsetWidth;
                        var h = c.offsetHeight;
                        var cx = w * 0.5;
                        var cy = h * 0.5;
                        ctx.clearRect(0, 0, w, h);
                        var segmentWidth = w * res;
                        if(options.background != '') {
                            var image = new Image();
                            image.src = options.background;
                            image.onload = function() {
                                // create an off-screen canvas
                                var patt = document.createElement('canvas');
                                // set the resized width and height
                                patt.width = w;
                                patt.height = h;
                                patt.getContext('2d').drawImage(this, 0, - 1 * (h / 4), patt.width, patt.height);
                                // pass the resized canvas to your createPattern
                                drawBG(patt, w , h);
                            };
                        }
                        else {
                            ctx.fillStyle = color;
                        }
                        ctx.beginPath();
                        ctx.moveTo(0, cy);
                        for (var i = 0, endi = 1 / res; i <= endi; i++) {
                            var _y = cy + Math.sin((i + inc) * TAU * res * density) * cy * Math.sin(i * TAU * res * density * outerScale);
                            var _x = i * segmentWidth;
                            ctx.lineTo(_x, _y);
                        }
                        if(options.direction == 'down') {
                            ctx.lineTo(w, 0);
                            ctx.lineTo(0, 0);
                        }
                        else {
                            ctx.lineTo(w, h);
                            ctx.lineTo(0, h);
                        }
                        ctx.closePath();
                        ctx.fill();
                    }
                };
                waterwave.init();
                return waterwave;
            };
        }( jQuery ));

        jQuery(".waterwave-canvas").waterwave({
            parent : '',
            color : '#c00',
            direction: 'up',
            background: ''
        });

        function bubles(count,container,item) {
            for (var i=0; i<=count; i++) {
                var moveVal = Math.ceil( Math.random()*50 );
                var posVal = Math.ceil( Math.random()*50 );
                var scaleVal = Math.ceil( Math.random()*10 );
                var shakeVal = Math.ceil( Math.random()*5 );
                jQuery("."+ container).append('<div class="move'+moveVal+' pos'+posVal+'"><div class="scale'+scaleVal+'"><div class=" ' + item +' '+ 'shake'+shakeVal+'"></div></div>');
            }
        }


        var items_in_bocal = 30;

        bubles(items_in_bocal,'bubbles_bg','about_buble_1');
        bubles(items_in_bocal,'bubbles_bg','about_buble_2');


    </script>
@endsection
