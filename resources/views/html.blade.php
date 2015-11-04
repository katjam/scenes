<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>{{ isset($title) ? $title . ' - ' : null }}Laravel - The PHP Framework For Web Artisans</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Katjam">
  <meta name="description" content="Scenes - First Pass breakdown and scheduling aid.">
  <meta name="keywords" content="film breakdown scheduling">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if lte IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="{{ elixir('assets/css/laravel.css') }}">
  <link rel="apple-touch-icon" href="/favicon.png">
</head>
<body class="@yield('body-class', 'docs') language-php">

  <span class="overlay"></span>

  <nav class="main">
    <div class="container">
      <a href="/" class="brand">
        <img src="/assets/img/laravel-logo.png" height="30" alt="Laravel logo">
        Laravel
      </a>

      <div class="responsive-sidebar-nav">
        <a href="#" class="toggle-slide menu-link btn">&#9776;</a>
      </div>

      @if (Request::is('docs*') && isset($currentVersion))
        @include('partials.switcher')
      @endif

            <ul class="main-nav">
                    @include('partials.main-nav')
                          </ul>
                              </div>
                                </nav>

  @yield('content')

  <footer class="main">
    <ul>
      @include('partials.main-nav')
    </ul>
    <p>Scenes is a trademark of Katjam. Copyright &copy; Katja Mordaunt.</p>
    <p class="less-significant"><a href="http://katj.am">Design by Katja Mordaunt</a></p>
  </footer>


