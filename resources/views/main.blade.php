<!DOCTYPE html>
<html lang="en">
<head>
@include('_head')
</head>
  <body>

   @include('nav')

    <div class="container">
        @yield('content')
        
        @include('footer') 
    </div>

     @include('javascript')
   
  </body>
</html>