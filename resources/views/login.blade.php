<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('../assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{url('../assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('../assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{url('../assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="../assets/images/logo.png" alt="logo"></a><span class="splash-description">Silahkan Masukkan Informasi Pengguna</span></div>
            <div class="card-body">
                <form action="/postlogin" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="idpegawai" name="idpegawai" type="text" placeholder="ID Pegawai" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Kata Sandi">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{url('../assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('../assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>
 
</html>