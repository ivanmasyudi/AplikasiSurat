<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <style>
        html,
        body,
        .container,
        .row {
            height: 100%;
        }

        body {
            background: rgb(250, 234, 237) !important;
        }
    </style>
    <link rel="stylesheet" href="<?= base_url('assets') ?>/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/dataTables.bootstrap4.min.css">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center align-items-center d-flex justify-content-between">
            <div class="col-md-5">
                <img src="<?= base_url('assets')?>/img/Saly-1.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h2>Login With Your Account</h2>
                <p class="font-italic text-muted mb-0">Administrasi Surat Masuk dan Keluar</p>
                <p class="font-italic text-muted">by Ivan Masyudi </p>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <h5 class="font-weight-bold text-danger text-center">Form Login</h5>
                        </div>
                        <form action="admin" method="POST">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div>
                                <input type="submit" name="submit" value="Login" class="btn btn-danger btn-block">
                            </div>
                        </form>
                    </div>
                </div>
                </>
            </div>
        </div>
      </div>
  </body>
</html>
