
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
    <div v-for="list in phone" v-if="list.type == 'head'" transition="expand-left" class="content-list">
      <template v-if="list.type == 'head'">
        <a href="/item/@{{ list.id }}" class="content-list-inner"
          style="
          left : @{{* (headcnt += 1)*200 }}px;
          background : url('/img/@{{list.imageurl}}'),url('/img/MDR-Z1000.jpg');
          background-size: cover;
          background-position:center;
          ">
        </a>
        <div class="inner-hidden" style="left:@{{* headcnt*content_width }}px;">
          <p class="item-name">@{{ list.name }}</p>
          <p class="item-price">¥@{{ list.price }}</p>
        </div>
      </template>
    </div>
    <div class="content-prevnext next">&gt;</div>
  </div>

  <h2>EARPHONE</h2>
  <div class="headphone-content">
    <div class="content-prevnext prev">&lt;</div>
      <div v-for="list in phone" v-if="list.type=='ear' " transition="expand-right" class="content-list">
        <a href="/item/@{{ list.id }}" class="content-list-inner"
          style="
          left : @{{* (earcnt += 1)*200 }}px;
          background : url('/img/@{{list.imageurl}}'),url('/img/MDR-Z1000.jpg');
          background-size: cover;
          background-position:center;
          "></a>
        <div class="inner-hidden" style="left:@{{* earcnt*content_width }}px;">
          <p class="item-name">@{{ list.name }}</p>
          <p class="item-price">¥@{{ list.price}}</p>
        </div>
      </div>
    <div class="content-prevnext next">&gt;</div>
  </div>
</main>

@endsection
