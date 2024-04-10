<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daniele Fit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <x-navbar/>
    @if (session('success'))
       <div>
        {{ session('success')}}
       </div>
    @elseif(session('error'))
       <div>
        {{ session('error')}}
       </div>
    @endif
    {{$slot}}
    <x-footer/>
  </body>
</html>