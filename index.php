<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>head</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <script src="ckeditor/ckeditor.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="admin/inc/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="admin/inc/css/custom.css" type="text/css" media="all" />
    <link rel="stylesheet" href="admin/inc/fontawesome-free-5.15.3-web/css/all.min.css" type="text/css" media="all" />
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark container">
        <a class="navbar-brand" href="#">Pcraft7265</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./?navlink=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?navlink=about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?navlink=contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="container-md bg-white jumbotron"
        <?php
                if (isset($_GET['navlink'])) {
                    switch ($_GET['navlink']) {
                        case 'home': include "home.php"; break;
                        case 'about': include "about.php"; break;
                        case 'contact': include "contact.php"; break;
                        default: echo "<h1>tidak ada halaman :(</h1>"; break;
                    }
                } else {
                    include "home.php";
                }
                ?>
    </section>
    <footer class="container navbar-expand-md bg-custom">
        <p class="card-text text-secondary">&copy;2021 Pcraft7265</p>
    </footer>
    <script src="admin/inc/js/jquery-3.6.0.min.js"></script>
    <script src="admin/inc/js/popper.min.js"></script>
    <script src="admin/inc/js/bootstrap.min.js"></script>
    <script src="admin/inc/fontawesome-free-5.15.3-web/js/all.min.js"></script>
</body>
</html>