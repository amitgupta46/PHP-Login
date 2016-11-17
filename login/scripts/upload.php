<?php require "../loginheader.php"; ?>
<?php
include_once 'dbconfig.php';

$target_dir = "/tmp/"; //save to this direcory
$baseFile = basename($_FILES["fileToUpload"]["tmp_name"]);
$fileSize = $_FILES["fileToUpload"]["size"];

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
/*if($_SERVER['REQUEST_METHOD'] == "POST") {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image but uploaded.. ;) ";
        $uploadOk = 1;
    }
}
*/
// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}*/
// Check file size
/*if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}*/
/*// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $authoridquery = 'SELECT id from members WHERE members.username="'.$_SESSION['username'].'"'; 
        $authorid = '"'.mysql_query($authoridquery).'"';
        $patientid = $_SESSION['username'];
        $sql="INSERT INTO records(authorid,patientid,filepath) VALUES('".$authorid."','".$patientid."','".$target_dir."')";
        mysql_query($sql);
        echo "sql uploading done!"; //debug msg
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>