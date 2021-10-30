<?php

$category_id = $_POST['category_id'];
$image = $_FILES['image'];
$description = $_POST['description'];

$folder_photo = '../../pictures/';
$photo_tail = explode('.', $image['name'])[1];
$image_name = time() . '.' . $photo_tail;
$photo_path = $folder_photo . $image_name;
move_uploaded_file($image['tmp_name'], $photo_path);

include '../../connect.php';

$sql = "insert into pictures_gallery(category_id, image, description)
values ('$category_id', '$image_name', '$description')";

mysqli_query($connect, $sql);
mysqli_close($connect);