
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
<body>
<div class="div" id="home">
    <!-- Modal -->


</div>



<nav class="navbar navbar-expand-lg sticky-top bg-dark" >
    <div class="container" >

        <form method="post">
        <a class="navbar-brand" href=""><button class="btn btn-light " data-toggle="modal" data-target="#modalLoginForm"
                                                name="btnLogout" id="btnLogout" type="submit">Log Out </button></a>
        </form>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL; ?>/PriceList">Price List</a>
                </li>
                <!--      <li class="nav-item">-->
                <!--        <a class="nav-link" href="#laptop">Input Data</a>-->
                <!--      </li>-->
            </ul>
        </div>
    </div>
</nav>

