<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Laravel</title>
         <meta name="csrf-token" content="{{ csrf_token() }}">
            <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>   
  
        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
       
    </head>
    <body class="antialiased">
        <div class="container" id="app">
        @csrf    

           
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            window.csrfToken = document.querySelector('meta[name="csrf-token"]').content;
        </script>
    </body>
</html>
