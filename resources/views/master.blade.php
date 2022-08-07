<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lukenya Schools</title>
        <!-- Icon -->
        <link rel="icon" href="{{ asset('img/logo.png') }}">
        <!---- CSS -->
        <link href="/css/adminlte.css" rel="stylesheet" type="text/css" >
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!---- CSS -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--  Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
        
    </head>
    <body class="antialiased">
        
            <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                <a href="{{ url('dashboard') }}" class="navbar-brand">
                    <img src="{{ asset('img/logo.png') }}" class="rounded float-left" width="40" height="40">
                </a>

                <div class="pull-right">
                    <ul class="navbar-nav hover-overlay ripple shadow-1-strong rounded">
                        <li class="nav-item active mt-1">
                            <a href="{{ url('dashboard') }}" class="nav-link" role="button">Home</a>
                        </li>

                        <li class="nav-item mt-1">
                            <a href="{{ url('student') }}" class="nav-link" role="button">Students</a>
                        </li>

                        <li class="nav-item mt-1">
                            <a href="{{ url('parent') }}" class="nav-link" role="button">Parents</a>
                        </li>

                        <li class="nav-item mt-1">
                            <a href="{{ url('teachers') }}" class="nav-link">Staff</a>
                        </li>

                        <li class="nav-item mt-1">
                            <a href="" class="nav-link">Fees</a>
                        </li>

                        <li class="nav-item mt-1">
                            <a href="{{ url('subjects') }}" class="nav-link">Subjects</a>
                        </li>

                        <li class="nav-item mt-1">
                            <a href="{{ url('classes') }}" class="nav-link">Classes</a>
                        </li>

                        <li class="nav-item mt-1">
                            <a href="" class="nav-link">Results</a>
                        </li>

                        <li class="navbar-nav">
                            <a href="" class="nav-link">
                                <img src="/img/default.jpg" alt="user-image" class="img-size-20 img-circle " height="40">
                            </a>
                        </li>

                    </ul>

                    
                </div>

            </nav>
        

            <div>
                @yield('content')
            </div>

         <!--   <footer class="fixed-bottom">
                <hr style="padding-left: 0;">
                <div class="footer-content">
                    <p style="text-align: center;">Rich Techs©</p>
                </div>
            </footer>

            --->

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="{{ URL::asset('js/main.js')}}"></script>  

    </body>
</html>
