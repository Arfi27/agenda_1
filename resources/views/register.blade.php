<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AGENDA | Register</title>

    <link href="{{asset('templates/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('templates/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{asset('templates/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{asset('templates/css/animate.css') }}" rel="stylesheet">
    <link href="{{asset('templates/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">AH+</h1>

            </div>
            <h3>Register to AH+</h3>
            <p>Create account to see it in action.</p>
            <form class="m-t" role="form" action="{{url('/')}}">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                </div>
                <button type="{{url('/')}}" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{url('/')}}">Login</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('templates/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{asset('templates/js/popper.min.js') }}"></script>
    <script src="{{asset('templates/js/bootstrap.js') }}"></script>
    <!-- iCheck -->
    <script src="{{asset('templates/js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
