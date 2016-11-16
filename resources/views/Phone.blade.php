@extends('app')

@section('title','')

@section('addcss')
  <link rel="stylesheet" href="/css/itempage.css" media="screen" title="no title">
@endsection

@section('addscript')
  <script type="text/javascript">
    var type = "{{$type}}";
  </script>
  <script src="/js/itempage.js"></script>
@endsection

@section('content')

  <main>
    <div v-for="items in item" class="">
        <li>
          <div class="item_image">

          </div>
          <ul>
            <li>@{{items.company}}</li>
          </ul>
          <div class="">

          </div>
        </li>
        @{{items.name}}
    </div>

  </main>

@endsection
