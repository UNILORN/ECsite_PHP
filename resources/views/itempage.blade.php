<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/temp.css" media="screen">
    <link rel="stylesheet" href="/css/itempage.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Orbitron|Tillana" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

  </head>
  <body>

    <header>
       <div class="logo-img">AokiResonance</div>
       <div class="buildname">
         <p>MusicDevice</p>
         <p>HeadPhone</p>
         <p>EarPhone</p>
       </div>
       <div class=""></div>
    </header>

    <nav>
      <ul class="nav-bar">
        <li>HOME</li>
        <li>Headphone</li>
        <li>Earphone</li>
        <p>
          <input type="text" name="search" value="" placeholder="検索">
          <input type="submit" name="search_submit" value="検索">
        </p>
      </ul>
    </nav>


    <main>
      <div class="item-img">
        <img src="/img/{{$data['imageurl']}}" alt="" />
      </div>
      <div class="item-content">
        <h2>{{$data["name"]}}</h2>
        <h1 class="price" style="color:blue">{{$data["price"]}}円</h1>
      </div>
    </main>

    <footer>

    </footer>

  </body>
</html>
