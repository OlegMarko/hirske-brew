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

    <div class="comments">
        <div id="disqus_thread"></div>
        <script>

            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://hirske.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>
    </section>
@endsection
