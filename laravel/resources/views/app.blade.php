<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    @yield('title')
  </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

  <!-- reset.css destyle -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />

  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" type="text/css /">

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>

  @yield('content')

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" type="text/javascript"></script>
  <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
