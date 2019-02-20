<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>File Upload with PHP</title>
</head>
<body>
<form action="fileUpload.php" method="post" enctype="multipart/form-data">
    Upload a File:
    <input type="file" name="myfile" id="fileToUpload">
    <input type="submit" name="submit" value="Upload File Now" >
</form>
</body>
</html>