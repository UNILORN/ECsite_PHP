
@extends('app')

@section('title','AokiResonance - ECsite')

@section('addcss')
  <link rel="stylesheet" href="/css/toppage.css" media="screen" title="no title">
@endsection

@section('addscript')
  <script src="/js/toppage.js" type="text/javascript"></script>
@endsection('')


@section('content')

<main>

  <h2>HEADPHONE</h2>
  <div class="headphone-content">
    <div class="content-prevnext prev">&lt;</div>
    <div v-for="list in headphone"  class="content-list">
      <a href="/item/head/@{{ list.id }}" class="content-list-inner"
        style="
        left : @{{ $index*200 }}px;
        background : url('/img/@{{list.imageurl}}'),url('/img/MDR-Z1000.jpg');
        background-size: cover;
        background-position:center;
        ">
      </a>
      <div class="inner-hidden" style="left:@{{ $index*200 }}px;">
        <p class="item-name">@{{ list.name }}</p>
        <p class="item-price">¥@{{ list.price}}</p>
      </div>
    </div>
    <div class="content-prevnext next">&gt;</div>
  </div>

  <h2>EARPHONE</h2>
  <div class="headphone-content">
    <div class="content-prevnext prev">&lt;</div>
    <div v-for="list in earphone"  class="content-list">
      <a href="/item/ear/@{{ list.id }}" class="content-list-inner"
        style="
        left : @{{ $index*200 }}px;
        background : url('/img/@{{list.imageurl}}'),url('/img/MDR-Z1000.jpg');
        background-size: cover;
        background-position:center;
        "></a>
      <div class="inner-hidden" style="left:@{{ $index*200 }}px;">
        <p class="item-name">@{{ list.name }}</p>
        <p class="item-price">¥@{{ list.price}}</p>
      </div>
    </div>
    <div class="content-prevnext next">&gt;</div>
  </div>
</main>

@endsection
