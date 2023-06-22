<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - SIPES PNC</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a href="http://e-learning.pnc.ac.id/?redirect=0" class="navbar-brand has-logo" >
          <span class="logo">
            <img src="assets/img/pncgede.png" alt="Politeknik Negeri Cilacap" title="SIPES" width="15%" height="auto">
              </span>
            </a>
            <h4 class="text-align"><br>Bagian Administrasi Akademik dan Kemahasiswaan</h4>
        </nav> --}}
    <div class="container"><br>
        <h1 class="text-center"><b>Selamat Datang di SIPES!</b></h1>
        <h4  class="text-center"><br>Sistem Informasi Pelayanan Permohonan Surat</h4>
        <div class="col-md-4 col-md-offset-4">
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
                <div class="form-group">
                    <input type="text" name="username" class=" form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <p class="text-right"><a href="http://api.whatsapp.com/send?phone=62895392593013">Lupa Password</a></p>
                <button type="submit" class="btn btn-primary btn-block ">Log In</button><hr> 
            </form>
        </div>
    </div>

    <footer id="footer" class="footer ">
        <div class=" text-center copyright ">
          &copy; Copyright <strong><span>2023</span></strong>. All Rights Reserved
        </div>
      </footer><!-- End Footer -->
</body>
</html>