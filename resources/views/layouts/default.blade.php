<!DOCTYPE html>
<html>

<head>
    
      @include('includes.head')

       <title> {{ $title }} </title>
  @yield('meta_tags')

   
</head>

<body>
    <div class="page-wrapper">
        @include('includes.header')
         @yield('content')
        @include('includes.footer')
    </div>
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
</body>

</html>
