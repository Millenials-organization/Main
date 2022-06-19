<?php
// connect to the database
// $conn = mysqli_connect('localhost', 'root', '', 'brodatabase');
require("./Table/config.php");

$sql = "SELECT * FROM applicantlist";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $document = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $document;

    // get the file extension
    $extension = pathinfo($document, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
     $size = $_FILES['myfile']['size'];

    $name =$_POST["name"]; 
    $phone =$_POST["phone"]; 
    $email =$_POST["email"]; 
    $description =$_POST["description"]; 
    $fgamount =$_POST["fgamount"]; 
    $approval ="New"; 


    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } 
    // elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
    //     echo "File too large!";
    // } 
    
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO applicantlist ( name,phone, email, description, document, approval, fundgoal  ) VALUES ( '$name','$phone', '$email', '$description', '$document', '$approval', '$fgamount' )";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    } 
}

// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM applicantlist WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['document'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['document']));
        readfile('uploads/' . $file['document']);

        
        exit;
    }

}