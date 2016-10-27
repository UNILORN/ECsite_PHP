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
        <li v-for="items in item">
          <div class="img"><img src="/img/@{{items.imageurl}}" alt="" /></div>
          <div class="desc">
            <p class="company">@{{items.company}}</p>
            <p class="name">@{{items.name}}</p>
            <p class="itemnum">残り：@{{items.num}}</p>
            <p class="delete"><a href="/cart/@{{items.id}}">Delete</a></p>
          </div>
          <div class="price">
            <p class="price_text">¥@{{items.price}}</p>
            <p class="tax">内税¥@{{items.price * 0.08}}</p>
          </div>
          <div class="qt">
            <input class="qt_select" v-model="items.pricenum" type="number" name="num" value="@{{items.pricenum}}" placeholder="個数" min="0" max="@{{items.num}}">
          </div>
        </li>
      </ul>
      <div class="result">
        <div class="none"></div>
        <div class="allcrean"></div>
        <div class="sumprice">
          <p>合計金額</p>
          <p class="sumtext">¥@{{sumprice}}</p>
          <p class="uti">内税¥@{{sumprice * 0.08}}</p>
        </div>
        <div class="sumqt">
          <p>合計個数</p>
          <p class="sumtext">@{{sumnum}}</p>
        </div>
      </div>
    </form>
  </main>
@endsection
