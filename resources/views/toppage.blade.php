<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ECTOP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/temp.css" media="screen">
    <link rel="stylesheet" href="/css/toppage.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Orbitron|Tillana" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="/js/toppage.js"></script>
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
        <li>About</li>
        <p>
          <input class="search_text" type="text" name="search" value="" placeholder="Search">
          <input class="search_button" type="submit" name="search_button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </p>
      </ul>
    </nav>


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
          <div class="inner-hidden" style="left:@{{ $index*200 }}px;">@{{ list.name }}</div>
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
          <div class="inner-hidden" style="left:@{{ $index*200 }}px;">@{{ list.name }}</div>
        </div>
        <div class="content-prevnext next">&gt;</div>
      </div>
    </main>

    <footer>

    </footer>

  </body>
</html>
