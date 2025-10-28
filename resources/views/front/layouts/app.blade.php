<!doctype html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <link href="{{asset('css/output.css')}}" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="https://unpkg.com/flickity-fade@2/flickity-fade.css"> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />

  @stack('before-scripts')
</head>
<body class="font-poppins text-gray-900">

@yield('content')

@stack('after-scripts')
</body>
</html>