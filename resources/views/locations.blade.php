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
    <section class="content" style="display: block">
        <div class="locations" style="display: block">
            @forelse($locations as $location)
                <div class="addr-wrap">

                    <div class="addr">
                        <p>
                            <strong>{{$location->name}}</strong>
                        </p>
                        <p>
                            {{$location->addr_en}}
                        </p>
                        <p>
                            {{$location->addr}}
                        </p>
                        <p>
                            <img src="/img/time.svg" alt="" width="20" height="20" />Everyday {{$location->opening_time}}
                        </p>

                    </div>
                    <div class="b-info">
                        <ul>
                            <li style="background-image:url('/img/tel.svg')" class="phone-call">
                                <div class="hidden-text">
                                    {{--<div class="call-wrap">
                                        <div class="call" data-phone="{{$location->phone}}">
                                            <img src="/img/call.svg" alt="">
                                            <span>拨打电话</span>
                                        </div>
                                        <div class="add" data-phone="{{$location->phone}}">
                                            <img src="/img/phonebook.svg" alt="">
                                            <span>添加到电话本</span>
                                        </div>
                                    </div>--}}
                                </div>
                            </li>
                            <li style="background-image:url('/img/cab.svg')"><div class="hidden-text"><h3>司机先生/女士:</h3><p>请您带我到:</p><p>{{$location->addr}}</p></div></li>
                            <li style="background-image:url('/img/wifi.svg')"><div class="hidden-text"><h3>本店提供免费wifi, 账号及密码是:</h3><p>账号: {{$location->wifi_account}}</p><p>密码: {{$location->wifi_psw}}</p></div></li>
                        </ul>
                    </div>
                </div>
            @empty
                <div class="addr-wrap">
                    <p>Sorry, location not found.</p>
                </div>

            @endforelse
            <div class="addr-wrap">

            </div>
        </div>
        <div class="popup">
            <div class="content">

            </div>

        </div>
    </section>
</div>
<script src="/js/jquery-2.2.0.min.js" charset="utf-8"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $('.b-info li').on('click',function(){
            var res = $(this).find('.hidden-text').clone(true);
            $('.popup').css('display','flex');
            $('.popup .content').append(res);
        });
        $('.popup').on('click',function(){
            $(this).hide();
            $('.popup .content').html('');
        });

        $('.popup .content').on('click',function(event){
            event.stopPropagation();
        });

        $('.phone-call').on('click',function(){
            $('.popup').hide();
            window.location.href = "tel:"+$(this).data('phone');

        });
    });
</script>
</body>

</html>