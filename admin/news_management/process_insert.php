<?php
$post_title = $_POST['post_title'];
$category_id = $_POST['category_id'];
$post_details = $_POST['post_details'];
//$posting_date = $_POST['posting_date'];
$posted_by = $_POST['posted_by'];
//$updation_date = $_POST['updation_date'];
$post_image = $_FILES['post_image'];
//print_r($post_title);
//print_r($category_id);
//print_r($post_details);
//print_r($posted_by);

$folder_photo = '../../post_image/';
$photo_tail = explode('.', $post_image['name'])[1];
$image_name = time() . '.' . $photo_tail;
$photo_path = $folder_photo . $image_name;
move_uploaded_file($post_image['tmp_name'], $photo_path);

include '../../connect.php';

$sql = "insert into news(post_title, category_id, post_details, posted_by, post_image)
values ('$post_title', '$category_id', '$post_details', '$posted_by', '$image_name')";

mysqli_query($connect, $sql);
mysqli_close($connect);

header('location:index.php');