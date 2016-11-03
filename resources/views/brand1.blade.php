<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Increon</title>
    <link rel="stylesheet" href="/css/swiper-3.4.0.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="brand">
        <section class="brand-carousel">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="img-holder" style="background-image:url('/img/brand1.jpg')"> </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-holder" style="background-image:url('/img/brand2.jpg')"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-holder" style="background-image:url('/img/brand3.jpg')"></div>
                    </div>

                </div>
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section class="desc" style="color:{{$brand->brand_color}}">
            <h1 >Gut.Besser.Paulaner<br>Bavarian Gemutlichkeit<br>Three Times in Shanghai</h1>
            {{$brand->desc}}
        </section>
        <section class="locations">
            <ul>
                @forelse($locations as $location)
                <li><h3>{{$location->name}}</h3></li>
               @empty
                @endforelse
            </ul>
        </section>
        <section class="banner">

        </section>


        </div>
        <script src="/js/jquery-2.2.0.min.js" charset="utf-8"></script>
        <script src="/js/swiper-3.4.0.jquery.min.js" charset="utf-8"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                var mySwiper = new Swiper('.swiper-container', {
                    direction: 'horizontal',
                    loop: true,

                    // 如果需要分页器
                    pagination: '.swiper-pagination',
                    paginationClickable: true,
                    lazyLoading : true,

                    onTouchMoveOpposite: function(swiper){

                        $('.swiper-container-horizontal>.swiper-pagination-bullets').css('bottom','95px');

               }

                });
            });
        </script>
</body>

</html>