<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <header id="header">
    @include('components.partials.header')
  </header>

  <main id="main"> 
    @yield('content')
  </main>

  <footer id="footer">
    @include('components.partials.footer')
  </footer>

  <footer id="footer">
    @include('components.partials.footer')
  </footer>

  @include('components.partials.sidebar')
</body>
</html>