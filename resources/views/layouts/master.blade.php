<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" href="{{ URL::asset('images/favicon.png') }}">
    <link type="text/css" href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <script src="//code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <title>{{ $page->title }}</title>
  </head>
  <body>@include('partials/navbar')
    <div class="content-container except-navbar except-footer">@yield('content')</div>@include('partials/footer')
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" type="text/javascript"></script>
  <script src="{{ URL::asset('js/app.js') }}" type="text/javascript"></script>
</html>