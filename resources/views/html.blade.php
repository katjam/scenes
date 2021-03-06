<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Scenes - {{ env('SITE_NAME') }}</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Katjam">
  <meta name="description" content="Scenes - First Pass breakdown and scheduling aid.">
  <meta name="keywords" content="film breakdown scheduling">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if lte IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="apple-touch-icon" href="/favicon.png">
  <link href="<?= url('css/style.css');?>" rel="stylesheet">
</head>
<body class="@yield('body-class', 'docs') language-php">

  <span class="overlay"></span>

  <nav class="main no-print">
    <div class="container">
      <a href="/scenes" class="brand">
      <img src="/logo.png">
      </a>
        <div class="title-menu">
          <div class="site-title">{{ env('SITE_NAME', 'add SITE_NAME to .env') }}</div>
          @include('partials.main-nav')
        </div>
    </div>
  </nav>
  <div class="main">
  @yield('content')
  </div>

  <footer class="main no-print">
    <p>&copy;<a href="http://katj.am"> Katja Mordaunt<a></p>
  </footer>


