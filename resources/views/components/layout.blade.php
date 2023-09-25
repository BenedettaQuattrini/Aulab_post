<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/js/app.js','resources/css/app.css'])
    <title>The Aulab Post</title>

</head>
<x-navbar></x-navbar>
<body>
 <div class="min-vh-100">
     {{$slot}}
</div>   
<x-footer></x-footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script> AOS.init(); </script>
</body>
</html>