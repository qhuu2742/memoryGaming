<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Management</title>
</head>
<body>
Quản lý tin tức:
<br>
<a href="view_insert.php">Thêm</a>
<br>

<?php
include "../../connect.php";

$folder_photo = '../../post_image/';
$sql = "select * from news";
$result = mysqli_query($connect, $sql);
?>
<table width="100%" border="1">
    <tr>
        <th>image</th>
    </tr>
    <?php foreach ($result as $each): ?>
    <tr>
        <td>
        <td><img height="200" src="<?php echo $folder_photo . $each['post_image'] ?>"></td>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php mysqli_close($connect)?>
</body>
</html>