<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AGENDA | Forgot password</title>

    <link href="{{asset('templates/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('templates/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{asset('templates/css/animate.css') }}" rel="stylesheet">
    <link href="{{asset('templates/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="passwordBox animated fadeInDown">
        <div class="row">

            <div class="col-md-12">
                <div class="ibox-content">

                    <h2 class="font-bold">Lupa password</h2>

                    <p>
                        Masukan email beserta password, untuk memperbarui passwordmu
                    </p>

                    <div class="row">

                        <div class="col-lg-12">
                            <form class="m-t" role="form" action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email address" required="">
                                </div>

                                <button type="submit" class="btn btn-primary block full-width m-b">Kirim password baru</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright AGENDA 
            </div>
            <div class="col-md-6 text-right">
               <small>© 2019</small>
            </div>
        </div>
    </div>

</body>

</html>
