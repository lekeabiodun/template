<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="{{getApp('about')}}">
        <meta name="author" content="">
        <title>@yield('title', getApp('title'))</title>  
        <link rel="shortcut icon" href="{{ asset('storage/logo.png') }}">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-extend.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/site.min.css')}}">
        <link href="{{asset('assets/skins/grey.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Plugins -->
        <link rel="stylesheet" href="{{asset('assets/vendor/animsition/animsition.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/asscrollable/asScrollable.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/switchery/switchery.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/slidepanel/slidePanel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/flag-icon-css/flag-icon.css')}}">
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/pace/css/pace.min.css') }}"> --}}
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/toastr/toastr.css') }}"> --}}
        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('assets/fonts/material-design/material-design.min.css')}}">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
        <!-- Scripts -->
        {{-- <script src="{{asset('assets/js/turbolinks.js')}}"></script>  --}}
        <script src="{{asset('assets/vendor/breakpoints/breakpoints.js')}}"></script>
        <script>
            Breakpoints();
        </script>
        <style type="text/css">
            .text-decoration-none{ text-decoration: none !important; }
        </style>
        @yield('style')
        <livewire:styles>
    </head>
    <body class="animsition dashboard @yield('bodyTagClass')">
        @include('layouts.navbar')
        @include('layouts.sidebar')
        @yield('content')
        <!-- Footer -->
        <footer class="site-footer">
          <div class="site-footer-legal">© {{date('Y')}} Powered by <a href="#" target="_blank">OPATech</a></div>
        </footer>
        <!-- Core  -->
        <script src="{{asset('assets/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/popper-js/umd/popper.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/bootstrap.js')}}"></script>
        <!-- Plugins -->
        <script src="{{asset('assets/vendor/animsition/animsition.js')}}"></script>
        <script src="{{asset('assets/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
        <script src="{{asset('assets/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
        <script src="{{asset('assets/vendor/asscrollable/jquery-asScrollable.js')}}"></script>
        <script src="{{asset('assets/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>
        {{-- <script src="{{ asset('assets/vendor/pace/js/pace.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script> --}}        
        <!-- Scripts -->
        <script src="{{asset('assets/js/Component.js') }}"></script>
        <script src="{{asset('assets/js/Plugin.js') }}"></script>
        <script src="{{asset('assets/js/Base.js') }}"></script>
        <script src="{{asset('assets/js/Config.js') }}"></script>
        
        <script src="{{asset('assets/js/Section/Menubar.js') }}"></script>
        <script src="{{asset('assets/js/Section/GridMenu.js') }}"></script>
        <script src="{{asset('assets/js/Section/Sidebar.js') }}"></script>
        <script src="{{asset('assets/js/Section/PageAside.js') }}"></script>
        <script src="{{asset('assets/js/Plugin/menu.js') }}"></script>
        <script src="{{asset('assets/js/Site.js') }}"></script>
        <script>
            (function(document, window, $){
                'use strict';
                var Site = window.Site;
                $(document).ready(function(){
                Site.run();
                });
            })(document, window, jQuery);
        </script>
        <script type="text/javascript">
            @if(session('error')) toastr["error"]("{{session('error')}}") @endif
            @if($errors) @foreach($errors->all() as $error) toastr["error"]("{{ $error }}"); @endforeach @endif
            @if(session('success')) toastr["success"]("{{session('success')}}") @endif
        </script>
        @yield('script')
        <livewire:scripts>
    </body>
</html>
