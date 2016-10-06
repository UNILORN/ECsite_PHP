<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/temp.css" media="screen">

    @yield('addcss')

    <link href="https://fonts.googleapis.com/css?family=Orbitron|Tillana|Archivo+Narrow" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    @yield('addscript')

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
        <li onclick="location.href='/'">HOME</li>
        <li onclick="location.href='/headphone'">Headphone</li>
        <li onclick="location.href='/earphone'">Earphone</li>
        <li onclick="location.href='/about'">About</li>
        <p>
          <input class="search_text" type="text" name="search" value="" placeholder="Search">
          <button class="search_button" type="button" name="search_button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </p>
      </ul>
    </nav>

    @yield('content')

    <footer>
      <div class="">

      </div>
    </footer>
  </body>
</html>
