<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  {{-- <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ siteUrl }}/uploads/apple-touch-icon-152x152.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ siteUrl }}/uploads/apple-touch-icon-152x152.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ siteUrl }}/uploads/apple-touch-icon-152x152.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ siteUrl }}/uploads/apple-touch-icon-152x152.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ siteUrl }}/uploads/apple-touch-icon-152x152.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ siteUrl }}/uploads/apple-touch-icon-152x152.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ siteUrl }}/uploads/apple-touch-icon-152x152.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ siteUrl }}/uploads/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="{{ siteUrl }}/uploads/apple-touch-icon-152x152.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="{{ siteUrl }}/uploads/apple-touch-icon-152x152.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="{{ siteUrl }}/uploads/apple-touch-icon-152x152.png" sizes="128x128" /> --}}
  <meta name="application-name" content="&nbsp;" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
  <title>Sonderiskool</title>
</head>
<body>

  <header id="header">
    @include('components.partials.header')
  </header>

  <main id="main"> 
    @yield('content')
  </main>

  <footer id="footer" class="bg-dark">
    @include('components.partials.footer')
  </footer>

  @include('components.partials.sidebar')

  <script src="/js/app.js"></script>
</body>
</html>