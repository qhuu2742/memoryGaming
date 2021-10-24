<?php

$image_slider = $_FILES['image_slider'];

$folder_photo = '../../image_slider/';
$photo_tail = explode('.', $image_slider['name'])[1];
$image_name = time() . '.' . $photo_tail;
$photo_path = $folder_photo . $image_name;
move_uploaded_file($image_slider['tmp_name'], $photo_path);

include '../../connect.php';

$sql = "insert into slider(image_slider) 
values ('$image_name')";


mysqli_query($connect, $sql);
mysqli_close($connect);
