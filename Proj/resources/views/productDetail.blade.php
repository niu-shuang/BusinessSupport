<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type='text/javascript' src='/js/jquery.min.js'></script>
    <script type="text/javascript" src="/js/photo.js"></script>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/custom.css">
    <script src="/js/app.js" defer></script>

    <style type="text/css">
        <!--
        ul#gallery {
            width: 100%;
            height: auto;
        }

        ul#gallery li {
            width: 100px;
            padding: 8px 8px 0px 0px;
            height: auto;
            float: left;
        }

        ul#gallery li.end {
            width: 100px;
            padding: 8px 0px 0px 0px;
            height: auto;
        }

        ul#gallery li img {
            width: 100px;
            height: 67px;
        }
        -->
    </style>

    <script type="text/javascript">
        $(function() {
            $('#imgMain a').lightBox();
        });
    </script>
</head>
<header class="header bg-dark  fixed-top">
    @include('base/header')
</header>
<br>

<div class="container content">
    <div class="row">
        <div class="">
            <h2>{{$product->product_name}}</h2>
                <div id="imgMain"><img src="/trunk/img/{{$product->thumbnail}}" alt="" name="target" id="target" /></div>
                    <ul id="gallery" class="clearfix">
                        <li><a href="/trunk/img/{{$product->thumbnail}}"><img src="/trunk/img/{{$product->thumbnail}}" alt="" /></a></li>
                        <li class="end"><a href="/trunk/img/{{$product->thumbnail}}"><img src="/trunk/img/{{$product->thumbnail}}" alt="" /></a></li>
                    </ul>
        </div>

        <div class="product-info">
            <br>
            <br>
            <img src="/trunk/img/{{$product->agent_photo}}" alt="" />
            <p>{{ $product->agent_name}}</p>
            <pre>業務内容 : {{ $product->description}}</pre>
        </div>
    </div>
</div>
<footer class="footer bg-dark  fixed-bottom">
    @include('base/footer')
</footer>
</body>
</html>
