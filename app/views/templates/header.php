
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $data['judul']; ?></title>
    <!-- MDB icon -->
    <link rel="icon" href="<?= BASEURL; ?>/assets/img/mdb-favicon.ico" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/mdb.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">

</head>
<body >
<div class="div " id="home">
    <!-- Modal -->
    <form action="<?= BASEURL; ?>/home/login" method="post">
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="text" id="username" name="username"  class="form-control validate">
                        <label data-error="wrong" data-success="right" for="username">Your email</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password"  class="form-control validate" id="password" name="password">
                        <label data-error="wrong" data-success="right" for="password">Your password</label>
                    </div>

                    <div class="mt-0">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                    </div>

                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default" href="" type="submit">Login</button>
                </div>


                <?php if( isset($error) ) : ?>
                    <div class="alert alert-danger" role="alert">
                        <p style="color: red; font-style: italic;">username atau password salah</p>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

    </form>
</div>



<nav class="navbar navbar-expand-lg sticky-top" >
    <div class="container" >

        <a class="navbar-brand" href="#"><button class="btn btn-light " data-toggle="modal" data-target="#modalLoginForm">Login Admin</button></a>



        <button class="navbar-toggler btn-outline-black custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav flex-column">
<!--                <li class="nav-item active">-->
<!--                    <a class="nav-link" href="--><?//= BASEURL; ?><!--"> Home <span class="sr-only">(current)</span></a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="--><?//= BASEURL; ?><!--/PriceList">Harga Laptop</a>-->
<!--                </li>-->

                <!--      <li class="nav-item">-->
                <!--        <a class="nav-link" href="#laptop">Input Data</a>-->
                <!--      </li>-->
            </ul>
        </div>
    </div>
</nav>

