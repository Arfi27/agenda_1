<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AGENDA | Daftar</title>

    <link href="{{asset('templates/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('templates/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{asset('templates/css/animate.css') }}" rel="stylesheet">
    <link href="{{asset('templates/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">AH</h1>

            </div>
            <h3>Welcome to Agenda</h3>
            <p>
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Konfirmasi Akun</p>
            <form class="m-t" role="form" action="{{url('/home')}}">
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="telepon" class="form-control" placeholder="Telepon" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <a href="{{url('/home')}}"><button type="submit" class="btn btn-primary block full-width m-b">Daftar</button></a>

                <p class="text-muted text-center"><small>Sudah mempunyai akun?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{url('/')}}">Masuk</a>
            </form>
            <p class="m-t"> <small>AGENDA &copy; 2019</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
