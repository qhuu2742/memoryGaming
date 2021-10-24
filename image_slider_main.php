<?php
$folder_photo = 'image_slider/';
include "connect.php";
$sql = "select * from slider limit 4";
$result = mysqli_query($connect, $sql);
?>


<div class="nk-image-slider" data-autoplay="8000">

    <?php foreach ($result as $each): ?>
    <div class="nk-image-slider-item">
        <img src="<?php echo $folder_photo . $each['image_slider']; ?>" alt="" class="nk-image-slider-img"
             data-thumb="<?php echo $folder_photo . $each['image_slider']; ?>">

<!--        <div class="nk-image-slider-content">-->
<!---->
<!--            <h3 class="h4">As we Passed, I remarked</h3>-->
<!--            <p class="text-white">As we passed, I remarked a beautiful church-spire rising above some old-->
<!--                elms in the park; and before them, in the midst of a lawn, chimneys covered with ivy, and-->
<!--                the windows shining in the sun.</p>-->
<!--            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read-->
<!--                More</a>-->
<!---->
<!--        </div>-->

    </div>
    <?php endforeach; ?>
</div>