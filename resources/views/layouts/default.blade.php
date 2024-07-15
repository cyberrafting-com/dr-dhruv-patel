<!DOCTYPE html>
<html>

<head>
    
       <title> {{ $title }} </title>
       <meta name="description" content="@yield('meta_desc')">
     <link rel="canonical" href="{{ url()->current() }}" />
    
      @include('includes.head')

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
