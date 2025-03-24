<!DOCTYPE html>
<html lang="en">
  <head>

  @include('frontend.include.meta')

  @include('frontend.include.style')
  
</head>

<body class="index-page">

  @include('frontend.include.header')

  <main class="main">
      @yield('main')
  </main>

  @include('frontend.include.footer')

  @include('frontend.include.script')

</body></html>