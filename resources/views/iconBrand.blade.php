<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Increon</title>

    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="brand-list-bg">
<div class="bg-wrap">
    <h3>选择一个品牌浏览</h3>
<div class="brand-list-box">
    @foreach($brands as $brand)
        <div class="brand-wrap">
            <section class="brand-list-item" style="{{'background-image:url('.$brand->cover.')'}}" data-id="{{$brand->id}}">

            </section>
            <span class="brand-title">{{$brand->name}}</span>
        </div>

    @endforeach

</div>
</div>
<script src="/js/jquery-2.2.0.min.js" charset="utf-8"></script>
<script type="text/javascript">
    $('.brand-list-item').on('click',function(){
        window.location="/brand/"+$(this).data('id');
    });
</script>

</body>
</html>