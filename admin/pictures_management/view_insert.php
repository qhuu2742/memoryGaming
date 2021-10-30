<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "../../connect.php";
$sql = "select * from pictures_category";
$result = mysqli_query($connect, $sql);
?>
<form action="process_insert.php" method="post" enctype="multipart/form-data">
    Pictures:
    <input type="file" name="image">
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
    Description: <textarea name="description" cols="30" rows="10"></textarea>
    <br>
    <button>Submit</button>
</form>
</body>
</html>