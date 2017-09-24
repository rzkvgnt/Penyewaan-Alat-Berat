<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <style type="text/css">
        /*#app{
            width: 100%;
        }
        */
        nav {
            background-color: #e0e0e0;
        }
        footer {
            background-color: #455a64;
        }
    </style>
</head>
<body>
    <div id="app">
        @include('menu')


    </div>
        @yield('content')

    <!-- Scripts -->

</body>


@yield('footer')

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">

        $('.carousel.carousel-slider').carousel({fullWidth: true});
        $(document).ready(function(){
      $('.carousel').carousel();
    });

        $(document).ready(function(){
        $('.slider').slider();
        // Pause slider
        $('.slider').slider('pause');
        // Start slider
        $('.slider').slider('start');
        // Next slide
        $('.slider').slider('next');
        // Previous slide
        $('.slider').slider('prev');
        $(document).ready(function(){
        $('.tooltipped').tooltip({delay: 30});
        $(document).ready(function(){
        $('.parallax').parallax();
        $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 300,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
    });
  });

    });
        $('.carousel.carousel-slider').carousel({fullWidth: true});
        $('.carousel').carousel('next');
        $('.carousel').carousel('next', 3);

          $('.fixed-action-btn').openFAB();
          $('.fixed-action-btn').closeFAB();
          $('.fixed-action-btn.toolbar').openToolbar();
          $('.fixed-action-btn.toolbar').closeToolbar();
    </script>

    <script type="text/javascript">

  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();

    $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el)
      onClose: function(el)
  )};

      // Show sideNav
  $('.button-collapse').sideNav('show');
  // Hide sideNav
  $('.button-collapse').sideNav('hide');
  // Destroy sideNav
  $('.button-collapse').sideNav('destroy');
    </script>

    <style type="text/css">
      #box1{
        background-color: #fdd835;
        width: 100%;
        height: 10pt;
      }
    </style>

    <div id="box1"></div>
<footer class="page-footer" style="background-color: #212121;">
    <div class="container">
            <div class="center">
               <h4 class="white-text text-lighten-4">PT. BETON ELEMINDO PERKASA</h4>
               <h6 class="white-text text-lighten-4">Jalan Mulia Hilir, Kebon Jeruk, Jakarta Barat</h6>
            <div class="col 14 offset-12 s12">
                <i class="large material-icons">call</i>
                <h3 class="white-text">+62 896-9023-0648</h3><br>
            </div>
            </div>
    </div>
</footer>
</html>
