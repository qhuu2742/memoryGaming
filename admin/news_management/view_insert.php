<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add News</title>
</head>
<body>
<?php
include "../../connect.php";
$sql ="select * from news_category";
$result = mysqli_query($connect, $sql);
?>

<form action="process_insert.php" method="post" enctype="multipart/form-data">
    Post Title: <input type="text" name="post_title">
    <br>
    Category:
    <select name="category_id">
        <?php foreach ($result as $each): ?>
            <option value="<?php echo $each['id'] ?>">
                <?php echo $each['category_name']; ?>
            </option>
        <?php endforeach ?>
    </select>
    <br>
    Post Details: <textarea name="post_details" cols="30" rows="10"></textarea>
    <br>
    Posted by: <input type="text" name="posted_by">
    <br>
    Post Image: <input type="file" name="post_image">
    <br>
    <button>Submit</button>
</form>
<?php mysqli_close($connect); ?>
</body>
</html>