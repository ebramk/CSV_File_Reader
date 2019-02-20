<?php
/**
 * Created by PhpStorm.
 * User: Ebram
 * Date: 2/19/2019
 * Time: 8:17 PM
 */


<?php
    $currentDir = getcwd();
    $uploadDirectory = "/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg','jpg','png','xls','csv']; // Get all the file extensions

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));
	$file_name = 'csv.csv';

	$uploadPath = $currentDir . $uploadDirectory . basename($fileName);

    if (isset($_POST['submit'])) {



        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }

        

        if (empty($errors)) {
            $didUpload = move_uploaded_file($file_name, $uploadPath);
            rename($fileTmpName,$file_name);

            if ($didUpload) {
                echo "The file " . basename($fileName) . " has been uploaded";
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    }


?>