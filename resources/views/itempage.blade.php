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
  <div class="item-img">
    <img src="/img/{{$data['imageurl']}}" alt="" />
  </div>
  <div class="item-content">
    <h2>{{$data["name"]}}</h2>
    <h1 class="price" style="color:blue">{{$data["price"]}}円</h1>
  </div>
</main>

@endsection
