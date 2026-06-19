<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Files</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fupload" id="fupload" />
        <br><br>
        <button>upload file</button>
    </form>
</body>
</html>
<?php
if (isset($_FILES['fupload']['name'])) {
    $temp_name=$_FILES['fupload']['tmp_name'];
    $file_name=$_FILES['fupload']['name'];
    if(move_uploaded_file($temp_name,__DIR__ . "/uploads/" .$file_name)){
        echo "<br>file uploaded";
    }else{
        echo "<br>error on uploading file"; 
    }
    
}else{
    echo "<br>file not found";
}


/*
Q: ehat is $_FILE[];
A:“$_FILES is a superglobal array in PHP used to store information about uploaded files, such as file name, type, size, temporary location, and error status.”
Q: How do you upload files securely in PHP?
A: I validate file type using MIME, check file size, handle upload errors, rename files using uniqid, and store them securely using move_uploaded_file.
*/
?>
