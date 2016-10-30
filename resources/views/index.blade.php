<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Increon</title>

    <link rel="stylesheet" href="/css/main.css">
  </head>
  <body>
    <div class="brand-list">

    @foreach($brands as $brand)
    <section class="brand-list-item" style="{{'background-image:url('.$brand->cover.')'}}" data-id="{{$brand->id}}">
        <span class="brand-title">{{$brand->name}}</span>
    </section>
    @endforeach

</div>
    <script src="/js/jquery-2.2.0.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      $('.brand-list-item').on('click',function(){
        window.location="/brand/"+$(this).data('id');
      });
    </script>

  </body>
</html>