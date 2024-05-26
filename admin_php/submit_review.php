<?php
include 'config.php';

session_start();

$name = mysqli_real_escape_string($conn, $_POST['name']);
$designation = mysqli_real_escape_string($conn, $_POST['designation']);
$review = mysqli_real_escape_string($conn, $_POST['review']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$visible = 0;

// Default picture if photo is not selected
$defaultPicture = "uploads/ag-creation.png";

if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == UPLOAD_ERR_OK) {
    $target_dir = "../uploads/";
    $original_path = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]). "_".time();
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($_FILES["photo"]["size"] > 200000) {
        echo "Sorry, your file is too large.";
        exit;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        exit;
    }

    if (!move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }

    $photoPath = $original_path . basename($_FILES["photo"]["name"]). "_".time();
} else {
    // Use default picture if photo is not selected
    $photoPath = $defaultPicture;
}

$sql = "INSERT INTO reviews (name, designation, photo, review, visible, title)
VALUES ('$name', '$designation', '$photoPath', '$review', '$visible', '$title')";

if ($conn->query($sql) === TRUE) {
    echo "Thanks For Your Valuable Review !";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
