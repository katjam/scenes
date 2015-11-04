<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Scenes</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Katjam">
  <meta name="description" content="Scenes - First Pass breakdown and scheduling aid.">
  <meta name="keywords" content="film breakdown scheduling">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if lte IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="apple-touch-icon" href="/favicon.png">
</head>
<body class="@yield('body-class', 'docs') language-php">

  <span class="overlay"></span>

  <nav class="main">
    <div class="container">
      <a href="/" class="brand">
      SCENES LOGO
      </a>

      <div class="responsive-sidebar-nav">
        <a href="#" class="toggle-slide menu-link btn">&#9776;</a>
      </div>

            <ul class="main-nav">
                    @include('partials.main-nav')
                          </ul>
                              </div>
                                </nav>

  @yield('content')

  <footer class="main">
    <p>Scenes is a trademark of Katjam. Copyright &copy; Katja Mordaunt.</p>
    <p class="less-significant"><a href="http://katj.am">Design by Katja Mordaunt</a></p>
  </footer>


