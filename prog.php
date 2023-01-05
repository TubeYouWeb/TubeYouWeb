<?php

$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["mp4_file"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["mp4_file"]["size"] > 1000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow only MP4 files
if($imageFileType != "mp4") {
    echo "Sorry, only MP4 files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["mp4_file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["mp4_file"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>