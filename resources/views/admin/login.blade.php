<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Icon -->
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--  Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
</head>
<body class="bg-light">
    
    <div class="container-fluid d-flex justify-content-center position-absolute bottom-50 ">
        
        <div class="col-3 col-lg-6 ">
            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
            <div class="card px-0 pb-0 ">
                <div class="justify-content-center d-flex">
                    <h3 class="display-4">Admin Login</h3>
                    <img src="{{ asset('img/logo.png') }}" class="mt-3 ml-2" width="50" height="50">
                </div>
                <form action="{{ route('admin.check') }}" class="mt-4" method="POST">
                   
                    @csrf
                    
                    <div class="form-group">
                        <div class="input-group input-group-lg col-12">
                            <span class="input-group-prepend"><i class="input-group-text fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" class="form-control input-lg" name="email" placeholder="Email" value="{{ old('email') }}">
                        </div>
                        <div class="col-sm-12">
                            <span class="text-danger ">@error('email'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg col-12">
                            <span class="input-group-prepend"><i class="input-group-text fa fa-lock" aria-hidden="true"></i></span>
                            <input type="password" class="form-control input-lg" name="password" placeholder="Password" value="{{ old('password') }}">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-check ml-4">
                        <input class="form-check-input" type="checkbox" name="remember" id="exampleRemember">
                        <label class="form-check-label" for="exampleRemember">
                                Remember me
                        </label>
                    </div>

                    <div class="form-group justify-content-center col-9 mt-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                    <div class="pull-right mr-2 mb-2">
                        <a href="" class="text-warning">
                            <small>Forgot password?</small>
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>