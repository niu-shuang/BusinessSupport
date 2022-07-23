@extends('base/layout')
@section('title', '商品登録')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>商品登録</h2>
        <form method="POST" action="{{ route('registerProduct') }}" enctype="multipart/form-data">
            @csrf
            @foreach ($errors->all() as $error)
            <ul class="alert alert-danger">
                <li>{{$error}}</li>
            </ul>
            @endforeach

            <label for="product_name" class="sr-only">サービス名</label>
            <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Product Name" required autofocus>
            <label for="agent_name" class="sr-only">エージェント名</label>
            <input type="text" id="agent_name" name="agent_name" class="form-control" placeholder="エージェント名" required>
            <label for="create_year" class="sr-only">サービス内容</label>
            <textarea  id="description" name="description" class="form-control" placeholder="description" required></textarea>
            <label for="agent_photo" class="sr-only">エージェント写真</label><br>
            <input type="file" id="agent_photo" name="agent_photo" accept="image/*"/><br>
            <label for="thumbnail" class="sr-only">サブネイル</label><br>
            <input type="file" id="thumbnail" name="thumbnail" accept="image/*"/><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">登録</button>
        </form>
    </div>
</div>
@endsection
