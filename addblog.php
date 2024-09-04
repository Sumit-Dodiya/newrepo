<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="/ckeditor/ckeditor.js"></script>
</head>
<body>
    <form method="post" enctype="multipart/form-data">

    <input type="text" name="title" ><br><br>
    <input type="file" name="blog_img"><br><br>
    <textarea name="description" id="editor1" cols="30" rows="10"></textarea>
    <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                CKEDITOR.replace( 'editor1' );
            </script>
    </form>
</body>
</html>
