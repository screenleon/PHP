<?php
$target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOK = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST['submit'])) {
    // foreach ($_FILES['fileToUpload'] as $key => $value) {
    //     echo $key . " has the value {" . $value . "}<br>";
    // }
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
    if ($check !== false) {
        echo "File is an image - " . $check['mime'] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOK = 0;
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $uploadOK = 0;
    }

    if ($_FILES['fileToUpload']['size'] > 10000000) {
        echo "Sorry, file is too large.<br>";
        $uploadOK = 0;
    }

    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOK === 0) {
        echo "Sorry, file was not uploaded";
    } else {
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
            echo "The file " . basename($_FILES['fileToUpload']['name']) . " has been uploaded.";
        } else {
            echo "file: " . $_FILES['fileToUpload']['tmp_name'] . ", target: " . $target_file . "<br>";
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
