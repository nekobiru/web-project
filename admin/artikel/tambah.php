<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>head</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <script src="ckeditor/ckeditor.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="inc/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="inc/css/custom.css" type="text/css" media="all" />
    <link rel="stylesheet" href="inc/fontawesome-free-5.15.3-web/css/all.min.css" type="text/css" media="all" />
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
                    <a class="nav-link" href="./?navlink=home">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?navlink=home">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</head>
<body>
    <form action="" method="post" accept-charset="utf-8">
        <input type="text" name="Judul" id="judul" />
        <textarea cols="10" id="editor1" name="editor1" rows="10" data-sample-short></textarea>
        <input type="submit" name="kirim" id="kirim" value="Simpan" />
    </form>
    <script>
        CKEDITOR.replace('editor1', {
            height: 480,

            filebrowserUploadUrl: 'ckeditor/ck_upload.php',
            filebrowserUploadMethod: 'form'
        });
    </script>
    <script src="inc/js/jquery-3.6.0.min.js"></script>
    <script src="inc/js/popper.min.js"></script>
    <script src="inc/js/bootstrap.min.js"></script>
    <script src="inc/fontawesome-free-5.15.3-web/js/all.min.js"></script>
</body>
</html>