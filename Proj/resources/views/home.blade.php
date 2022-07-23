@extends('base/layout')
@section('content')
<style type="text/css">
    .product-plate {
        width: 100%;
        height: 256px;
        margin-bottom: 100px;
    }

    .product-content{
        width: 100%;
        display: flex;
        justify-content: left;
    }

    .product-title{
        font-size: 1.2rem;
    }

    .product-img{
        width: 256px;
        height: 256px;
        border:2px solid black;
        vertical-align: middle;
    }

    .product-img img{
        max-width: 100%;
        max-height: 100%;
        display: block;
        margin: auto;
    }

    .product-info{
        height: 256px;
        width: 60%;
        margin-right: auto;
        margin-bottom: auto;
        font-size: 2rem;
        text-align: right;
        display: flex;
        flex-flow: column;
        justify-content: flex-end;
        align-items: flex-end;
    }
</style>

<div class="row">
    <div class="">
        <br><br>
        @if (session('err_msg'))
        <p class="text-danger">
            {{ session('err_msg') }}
        </p>
        @endif

		<br>
		<br>
        @foreach($products as $product)
        <div class="product-plate">
            <div class="product-title"><p>商品名:      {{$product->product_name}}</p></div>

            <div class="product-content">
                <div class="product-img">
                    <img src='trunk/img/{{$product->agent_photo}}' alt=""/>
                </div>
                <div class="product-info">
                    <p><a class="nav-link" href="productDetail/{{ $product->id }}">詳細へ</a></p>
                </div>
            </div>

        </div>

        @endforeach
    </div>
</div>
@endsection
