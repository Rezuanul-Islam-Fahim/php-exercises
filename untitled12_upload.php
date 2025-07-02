<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$img_file_ext = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$check_file = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
$upload_ok = 1;

if ($check_file !== false) {
    echo "File is image - " . $check_file["mime"] . "<br>";
    $upload_ok = 1;
} else {
    echo "File is not image" . "<br>";
    $upload_ok = 0;
}

if (file_exists($target_file)) {
    echo "File already exists" . "<br>";
    $upload_ok = 0;
}

if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "File is too big to upload" . "<br>";
    $upload_ok = 0;
}

if ($img_file_ext != "jpg" && $img_file_ext != "jpeg" && $img_file_ext != "png" && $img_file_ext != "gif") {
    echo "Only allowed files are JPG, JPEG, PNG and GIF" . "<br>";
    $upload_ok = 0;
}

if ($upload_ok != 0) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) .
            " has been uploaded successfully." . "<br>"; 
    } else { 
        echo "An error occurred when uploading file.<br>";
    }
} else {
    echo "Sorry. Your file was not uploaded.<br>";
}
?>