<!DOCTYPE html>
<html>
    <head>
        <title>HTV2 Live - @yield('title')</title>
        <!--jQuery-->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
        <!--Type Icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css" />
        <!--Favicon-->
        <link rel="icon" href="images/favicon.png" />
        <!--Custom CSS-->      
        <link rel="stylesheet" href="css/app.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    </head>
    <body>
    
    @include('partials.nav')
    <div class="container" id="app">
    @yield('content')
    </div>
    @yield('script')
    </body>
</html>