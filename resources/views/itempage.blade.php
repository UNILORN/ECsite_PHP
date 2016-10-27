@extends('app')

@section('title',$data["name"].' - AokiResonance')

@section('addcss')
  <link rel="stylesheet" href="/css/item.css" media="screen">
@endsection

@section('addscript')
  <script src="/js/item.js" type="text/javascript"></script>
@endsection

@section('content')

<main>
  <div class="item-content">
    <div class="item-img">
      <img src="/img/{{$data['imageurl']}}" alt="" />
    </div>
    <div class="item-content-inner">
      <div class="item-name">
        <h2>{{$data['company']['name']}} {{$data['name']}}</h2>
      </div>
      <div class="price">
        <h1>¥{{number_format($data['price'])}}</h1>
      </div>
      <form class="" action="/cart" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$data['ITEM_ID']}}">
        <input class="buy" type="submit" name="button" value="Buy Now !!!">
      </form>
    </div>
  </div>
</main>

@endsection
