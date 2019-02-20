<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CSV File Reader</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1 align="center">CSV File Reader</h1>
        <p align="center"> This is a simple PHP program that reads a user uploaded scv file and displays it as an HTML table by Ebram Kerolos.</p>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <div class="alert alert-primary" role="alert">
        Please upload a CSV file to get started:
    </div>
<form action="fileUpload.php" method="post" enctype="multipart/form-data">
    Upload a File:
    <div class="form-group">
    <input type="file" name="myfile" class="form-control-file" id="fileToUpload">
    </div>

    <input class="btn btn-primary" type="submit" name="submit" value="Upload File Now">

</form>
</body>
</html>