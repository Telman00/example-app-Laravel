<!doctype html>
<html lang="en">
@include('front.partials._head') 
<body>
  @include('front.partials._header') 
  @include('front.partials._nav')

  
  @yield('_content') 

  @include('front.partials._footer') 
  @include('front.partials._js') 

</body>
</html>
