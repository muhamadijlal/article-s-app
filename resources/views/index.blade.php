<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Article's</title>

  @stack('css')
</head>
<body>
  @include("parts.navbar")

  <div class="bg-gray-100 w-full p-5 h-full space-y-5">
    @yield('content')
  </div>

  @include("parts.footer")

  @stack('js')
</body>
</html>