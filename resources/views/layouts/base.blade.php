<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Fast Despatch Logistics</title>
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   <script src="{{asset('js/jquery.js')}}"></script>

   <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="arrow-right"></div>
@include('pages.promotions.components.promotion-banner')

@include('pages.components.alert')

<div class="flash-message"></div>


@yield('body')
   
@include('pages.components.footer')

<!-- JavaScript Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> 

  
    
</body>
</html>