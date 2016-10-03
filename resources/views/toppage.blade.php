<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/toppage.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Orbitron|Tillana" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.min.js" type="text/javascript"></script>
    <script src="js/toppage.js"></script>
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
      <div class="headphone-content">
        <div class="content-prevnext">&lt;</div>
        <div v-for="list in headphone" class="content-list">
          <div class="content-list-inner" style="left:@{{ space }}px">@{{ list }}</div>
        </div>
        <div class="content-prevnext">&gt;</div>
      </div>
    </main>

    <footer>

    </footer>

  </body>
</html>
