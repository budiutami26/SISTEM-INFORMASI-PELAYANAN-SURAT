<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - SIPES PNC</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">.</a>
        <img src="assets/img/pnc.png" width="80" height="80" >&nbsp;&nbsp;&nbsp;&nbsp;SIPES
          <span class="navbar-toggler-icon"></span>
        </nav>
    <div class="container "><br>
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
                    <input type="text" name="nim" class=" form-control" placeholder="NIM" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <p class="text-right"><a href="http://api.whatsapp.com/send?phone=62895392593013">Lupa Password</a></p>
                <button type="submit" class="btn btn-primary btn-block ">Log In</button><hr> 
            </form>
        </div>
    </div>

    <footer id="footer" class="footer">
        <div class=" text-center copyright ">
          &copy; Copyright <strong><span>2023</span></strong>. All Rights Reserved
        </div>
      </footer><!-- End Footer -->
</body>
</html>