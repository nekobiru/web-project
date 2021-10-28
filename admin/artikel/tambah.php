<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>head</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <script src="ckeditor/ckeditor.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    <textarea cols="10" id="editor1" name="editor1" rows="10" data-sample-short></textarea>
    <script>
        CKEDITOR.replace('editor1', {
            height: 500,

            filebrowserUploadUrl: 'ckeditor/ck_upload.php',
            filebrowserUploadMethod: 'form'
        });
    </script>
</body>
</html>