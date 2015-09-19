<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>{{ trans(Route::getCurrentRoute()->getName()) }} | Xadmin</title>

        <meta name="description" content="OneUI - Admin Dashboard Template & UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ asset('img/favicons/favicon.png') }}">

        <link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-16x16.png') }}" sizes="16x16">
        <link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-32x32.png') }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-96x96.png') }}" sizes="96x96">
        <link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-160x160.png') }}" sizes="160x160">
        <link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-192x192.png') }}" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicons/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicons/apple-touch-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicons/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicons/apple-touch-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicons/apple-touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicons/apple-touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicons/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicons/apple-touch-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-touch-icon-180x180.png') }}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Page JS Plugins CSS go here -->
        <link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/sweetalert/sweetalert.css') }}">
        @yield('header')

        <!-- OneUI CSS framework -->
        <link rel="stylesheet" id="css-main" href="{{ asset('css/oneui.min.css') }}">

        <!-- Custom Admin CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/custom-admin.css') }}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
        
    </head>
    <body>



        @yield('layout-child-content')


        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="{{ asset('js/oneui.min.js') }}"></script>
        <script src="{{ asset('js/admin/custom-admin.js') }}"></script>
        <script src="{{ asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script>
        <script src="https://js.pusher.com/3.0/pusher.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js"></script>

        <!-- Session flash messaging -->
        @include('admin.snippets.insta-flash')

        <!-- Page JS Plugins + Page JS Code -->
        @yield('footer')
        <script type="text/javascript">

            // Pusher Initialization
            var pusher = new Pusher('57ffd8dd7bd78657d42c', {
                encrypted: true
            });
            var channel = pusher.subscribe('file.uploaded');
            channel.bind('App\\Events\\FileWasUploaded', function(data) {
                console.log(data);
            });
        </script>
    </body>
</html>