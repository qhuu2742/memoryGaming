<?php
$folder_photo = 'post_image/';
include "connect.php";
$sql = "select * from news limit 2";
$result = mysqli_query($connect, $sql);
?>

<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> Posts</span></h3>
<div class="nk-gap"></div>

<div class="nk-blog-grid">

    <div class="row">

        <?php foreach ($result as $each): ?>
        <div class="col-md-6">
            <!-- START: Post -->

            <div class="nk-blog-post">
                <a href="blog-article.html" class="nk-post-img">
                    <img src="<?php echo $folder_photo . $each['post_image']; ?>"
                         alt="He made his passenger captain of one">

                </a>
                <div class="nk-gap"></div>
                <h2 class="nk-post-title h4"><a href="blog-article.html"><?php echo $each['post_title']; ?></a></h2>
                <div class="nk-post-by">
                    <img src="assets/images/avatar-3.jpg" alt="Wolfenstein" class="rounded-circle"
                         width="35"> by <a href="#"><?php echo $each['posted_by']; ?></a> in <?php echo $each['posting_date']; ?>
                </div>
                <div class="nk-gap"></div>
                <div class="nk-post-text">
                    <p><?php echo substr($each['post_details'],0,240); ?>...</p>
                </div>
                <div class="nk-gap"></div>
                <a href="blog-article.html"
                   class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read
                    More</a>
            </div>

            <!-- END: Post -->
        </div>
        <?php endforeach; ?>
            <!-- END: Post -->


    </div>
</div>
