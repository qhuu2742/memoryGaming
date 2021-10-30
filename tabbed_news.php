<?php
include "connect.php";
$sql2 = "select * from news";
if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
    $sql2 .= " where category_id = '$category_id'";
}
$sql2 .= " limit 3";
$sql = "select * from news_category";
$result = mysqli_query($connect, $sql);
$result2 = mysqli_query($connect, $sql2);
?>
<div class="nk-gap-3"></div>
<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Tabbed</span> News</span></h3>
<div class="nk-gap"></div>
<div class="nk-tabs">
    <!--
Additional Classes:
    .nav-tabs-fill
-->
    <ul class="nav nav-tabs nav-tabs-fill" role="tablist">
        <?php foreach ($result as $each): ?>
        <li class="nav-item">
            <a class="nav-link active" href="?category_id=<?php echo $each['id']; ?>" role="tab"><?php echo $each['category_name']; ?></a>
        </li>
        <?php endforeach; ?>
<!--        <li class="nav-item">-->
<!--            <a class="nav-link" href="#tabs-1-2" role="tab" data-toggle="tab">MMO</a>-->
<!--        </li>-->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link" href="#tabs-1-3" role="tab" data-toggle="tab">Strategy</a>-->
<!--        </li>-->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link" href="#tabs-1-4" role="tab" data-toggle="tab">Adventure</a>-->
<!--        </li>-->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link" href="#tabs-1-5" role="tab" data-toggle="tab">Racing</a>-->
<!--        </li>-->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link" href="#tabs-1-6" role="tab" data-toggle="tab">Indie</a>-->
<!--        </li>-->
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade show active" id="tabs-1-1">
            <div class="nk-gap"></div>
            <!-- START: Action Tab -->

            <?php foreach ($result2 as $each_news): ?>
            <div class="nk-blog-post nk-blog-post-border-bottom">
                <a href="blog-article.html" class="nk-post-img">
                    <img src="assets/images/post-2-fw.jpg"
                         alt="Grab your sword and fight the Horde">

                    <span class="nk-post-categories">
                                            <span class="bg-main-1">Action</span>
                                        </span>

                </a>
                <div class="nk-gap-1"></div>
                <h2 class="nk-post-title h4"><a href="blog-article.html"><?php echo $each_news['post_title']; ?></a></h2>
                <div class="nk-post-date mt-10 mb-10">
                    <span class="fa fa-calendar"></span> Sep 5, 2018
                    <span class="fa fa-comments"></span> <a href="#">7 comments</a>
                </div>
                <div class="nk-post-text">
                    <p>For good, too; though, in consequence of my previous emotions, I was still
                        occasionally seized with a stormy sob . After we had jogged on for some
                        little time, I asked the carrier...</p>
                </div>
            </div>
            <?php endforeach; ?>





            <!-- END: Action Tab -->
            <div class="nk-gap"></div>
        </div>

    </div>
</div>