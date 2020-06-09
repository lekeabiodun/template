<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    {{-- <meta name="description" content="{{get_site('about')}}"> --}}
    <meta name="author" content="">
    {{-- <title>@yield('title', $Site['site_title'])::{{get_site('site_title')}}</title>   --}}
    <script src="{{asset('assets/assets/js/turbolinks.js')}}"></script> 

    
    <link rel="apple-touch-icon" href="{{asset('assets/assets/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{ asset('storage/logo.png') }}">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/global/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/css/bootstrap-extend.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/css/site.min.css')}}">
    
    <!-- Plugins -->
    <!-- 
    <link rel="stylesheet" href="{{asset('assets/global/vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/vendor/flag-icon-css/flag-icon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/vendor/waves/waves.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/examples/css/dashboard/v1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/vendor/pace/css/pace.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/vendor/toastr/toastr.css') }}"> -->

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('assets/global/fonts/material-design/material-design.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/global/fonts/brand-icons/brand-icons.min.css')}}"> -->
    <!-- <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'> -->
    
    <!--[if lt IE 9]>
    <script src="{{asset('assets/global/vendor/html5shiv/html5shiv.min.js')}}"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="{{asset('assets/global/vendor/media-match/media.match.min.js')}}"></script>
    <script src="{{asset('assets/global/vendor/respond/respond.min.js')}}"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="{{asset('assets/global/vendor/breakpoints/breakpoints.js')}}"></script>
    <script>
      Breakpoints();
    </script>
    <style type="text/css">
        .text-decoration-none{
            text-decoration: none !important;
        }
    </style>

    @yield('style')
    <livewire:styles>
  </head>
  <body class="animsition dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    
    @include('layouts.navbar')
    @include('layouts.sidebar')

    
    @yield('content')
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© {{date('Y')}} Powered by <a href="https://apptechsolutions.com.ng/" target="_blank">AppTech Solutions</a></div>
    </footer>
    <!-- Core  -->
    <script src="{{asset('assets/global/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/global/vendor/popper-js/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/global/vendor/bootstrap/bootstrap.js')}}"></script>
    
    <!-- <script src="{{asset('assets/global/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
    
    <script src="{{asset('assets/global/vendor/animsition/animsition.js')}}"></script>
    <script src="{{asset('assets/global/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('assets/global/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
    <script src="{{asset('assets/global/vendor/asscrollable/jquery-asScrollable.js')}}"></script>
    <script src="{{asset('assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>
    <script src="{{asset('assets/global/vendor/waves/waves.js')}}"></script> -->
    
    <!-- Plugins -->
    <!-- <script src="{{asset('assets/global/vendor/switchery/switchery.js')}}"></script>
    <script src="{{asset('assets/global/vendor/intro-js/intro.js')}}"></script>
    <script src="{{asset('assets/global/vendor/screenfull/screenfull.js')}}"></script>
    <script src="{{asset('assets/global/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
    <script src="{{asset('assets/global/vendor/matchheight/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('assets/global/vendor/peity/jquery.peity.min.js')}}"></script> -->
    
    <!-- Scripts -->
    <!-- <script src="{{asset('assets/global/js/Component.js')}}"></script>
    <script src="{{asset('assets/global/js/Plugin.js')}}"></script>
    <script src="{{asset('assets/global/js/Base.js')}}"></script>
    <script src="{{asset('assets/global/js/Config.js')}}"></script>
    
    <script src="{{asset('assets/assets/js/Section/Menubar.js')}}"></script>
    <script src="{{asset('assets/assets/js/Section/GridMenu.js')}}"></script>
    <script src="{{asset('assets/assets/js/Section/Sidebar.js')}}"></script>
    <script src="{{asset('assets/assets/js/Section/PageAside.js')}}"></script>
    <script src="{{asset('assets/assets/js/Plugin/menu.js')}}"></script>
    
    <script src="{{asset('assets/global/js/config/colors.js')}}"></script>
    <script src="{{asset('assets/assets/js/config/tour.js')}}"></script>
    <script>Config.set('assets', '{{asset('assets/assets')}}');</script> -->
    
    <!-- Page -->
    <!-- <script src="{{asset('assets/assets/js/Site.js')}}"></script>
    <script src="{{asset('assets/global/js/Plugin/asscrollable.js')}}"></script>
    <script src="{{asset('assets/global/js/Plugin/slidepanel.js')}}"></script>
    <script src="{{asset('assets/global/js/Plugin/switchery.js')}}"></script>
    <script src="{{asset('assets/global/js/Plugin/matchheight.js')}}"></script>
    <script src="{{asset('assets/global/js/Plugin/peity.js')}}"></script>

    <script src="{{ asset('assets/global/vendor/pace/js/pace.min.js') }}"></script>
    <script src="{{ asset('assets/global/vendor/toastr/toastr.js') }}"></script>

    <script src="{{asset('assets/assets/examples/js/dashboard/v1.js')}}"></script>
    <script src="{{asset('assets/assets/js/main.js')}}"></script>
    -->
    <script type="text/javascript">
        @if(session('error')) toastr["error"]("{{session('error')}}") @endif
        @if($errors) @foreach($errors->all() as $error) toastr["error"]("{{ $error }}"); @endforeach @endif
        @if(session('success')) toastr["success"]("{{session('success')}}") @endif
    </script>
    @yield('script')
    <livewire:scripts>
  </body>
</html>
