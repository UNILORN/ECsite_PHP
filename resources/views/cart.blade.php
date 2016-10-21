{{-- template --}}
@extends('app')
{{-- template --}}
@section('title','Mycart')

@section('addcss')
  <link rel="stylesheet" href="/css/cart.css" >
@endsection

@section('addscript')
  <script src="/js/cart.js"></script>
@endsection


@section('content')
  <main>
    <form class="cart_form" action="index.html" method="post">
      <ul>
        <li>
          <div class="img"><img src="/img/MDR-Z1000.jpg" alt="" /></div>
          <div class="desc">
            <p>メーカー名</p>
            <p>商品名</p>
            <p>在庫</p>
            <p>消去</p>
          </div>
          <div class="price">
            <p>価格</p>
            <p>消費税</p>
          </div>
          <div class="qt">
            <input type="math" name="name" value="">
          </div>
        </li>
        <li>
          <div class="img"><img src="/img/MDR-Z1000.jpg" alt="" /></div>
          <div class="desc">
            <p>メーカー名</p>
            <p>商品名</p>
            <p>在庫</p>
            <p>消去</p>
          </div>
          <div class="price">
            <p>価格</p>
            <p>消費税</p>
          </div>
          <div class="qt">
            <input type="math" name="name" value="">
          </div>
        </li>
        <li>
          <div class="img"><img src="/img/MDR-Z1000.jpg" alt="" /></div>
          <div class="desc">
            <p>メーカー名</p>
            <p>商品名</p>
            <p>在庫</p>
            <p>消去</p>
          </div>
          <div class="price">
            <p>価格</p>
            <p>消費税</p>
          </div>
          <div class="qt">
            <input type="math" name="name" value="">
          </div>
        </li>
        <li>
          <div class="img"><img src="/img/MDR-Z1000.jpg" alt="" /></div>
          <div class="desc">
            <p>メーカー名</p>
            <p>商品名</p>
            <p>在庫</p>
            <p>消去</p>
          </div>
          <div class="price">
            <p>価格</p>
            <p>消費税</p>
          </div>
          <div class="qt">
            <input type="math" name="name" value="">
          </div>
        </li>
      </ul>
      <div class="result">
        <div class="none"></div>
        <div class="allcrean"></div>
        <div class="sumprice">
          <p>合計金額</p>
        </div>
        <div class="sumqt">
          <p>合計個数</p>
        </div>
      </div>
    </form>
  </main>
@endsection
