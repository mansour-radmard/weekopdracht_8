<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head')
</head>

<body>
   @include('includes.navbar')

   <div class="container">
      @include('includes.header')
         @yield('content')
   </div>

   <footer class="py-5 bg-dark">
      @include('includes.footer')
   </footer>

   @include('includes.scripts')
</body>

</html>
