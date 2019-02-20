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