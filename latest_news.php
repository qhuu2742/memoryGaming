<?php
$folder_photo = 'post_image/';
include "connect.php";
$sql = "SELECT * from news LEFT JOIN news_category ON news.category_id = news_category.id limit 6";
$sql2 = "SELECT * from news LEFT JOIN news_category ON news.category_id = news_category.id limit 4";

$result = mysqli_query($connect, $sql);
$result2 = mysqli_query($connect, $sql2);

?>
<div class="nk-gap-2"></div>
<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> News</span></h3>
<div class="nk-gap"></div>

<div class="nk-news-box">

    <div class="nk-news-box-list">
        <div class="nano">
            <div class="nano-content">

                <?php foreach ($result as $each): ?>
                <div class="nk-news-box-item nk-news-box-item-active">
                    <div class="nk-news-box-item-img">
                        <img src="<?php echo $folder_photo . $each['post_image']; ?>"
                             alt="Smell magic in the air. Or maybe barbecue">
                    </div>
                    <img src="<?php echo $folder_photo . $each['post_image']; ?>" alt="Smell magic in the air. Or maybe barbecue"
                         class="nk-news-box-item-full-img">
                    <h3 class="nk-news-box-item-title"><?php echo $each['post_title']; ?></h3>

                    <span class="nk-news-box-item-categories">
                                    <span class="bg-main-4"><?php echo $each['category_name']; ?></span>
                                </span>

                    <div class="nk-news-box-item-text">
                        <p><?php echo substr($each['post_details'],0,240) . ' ...'; ?></p>
                    </div>
                    <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                    <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> <?php echo $each['posting_date']; ?>
                    </div>
                </div>
                <?php endforeach; ?>

<!--                <div class="nk-news-box-item">-->
<!--                    <div class="nk-news-box-item-img">-->
<!--                        <img src="assets/images/post-2-sm.jpg" alt="Grab your sword and fight the Horde">-->
<!--                    </div>-->
<!--                    <img src="assets/images/post-2.jpg" alt="Grab your sword and fight the Horde"-->
<!--                         class="nk-news-box-item-full-img">-->
<!--                    <h3 class="nk-news-box-item-title">Grab your sword and fight the Horde</h3>-->
<!---->
<!--                    <span class="nk-news-box-item-categories">-->
<!--                                    <span class="bg-main-1">Action</span>-->
<!--                                </span>-->
<!---->
<!--                    <div class="nk-news-box-item-text">-->
<!--                        <p>For good, too; though, in consequence of my previous emotions, I was still-->
<!--                            occasionally seized with a stormy sob . After we had jogged on for some little-->
<!--                            time, I asked the carrier...</p>-->
<!--                    </div>-->
<!--                    <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>-->
<!--                    <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 5, 2018-->
<!--                    </div>-->
<!--                </div>-->


<!--                <div class="nk-news-box-item">-->
<!--                    <div class="nk-news-box-item-img">-->
<!--                        <img src="assets/images/post-3-sm.jpg" alt="We found a witch! May we burn her?">-->
<!--                    </div>-->
<!--                    <img src="assets/images/post-3.jpg" alt="We found a witch! May we burn her?"-->
<!--                         class="nk-news-box-item-full-img">-->
<!--                    <h3 class="nk-news-box-item-title">We found a witch! May we burn her?</h3>-->
<!---->
<!--                    <span class="nk-news-box-item-categories">-->
<!--                                    <span class="bg-main-2">Adventure</span>-->
<!--                                </span>-->
<!---->
<!--                    <div class="nk-news-box-item-text">-->
<!--                        <p>And she went on planning to herself how she would manage it. `They must go by the-->
<!--                            carrier,' she thought; `and how funny it'll seem, sending presents to one's own-->
<!--                            feet!...</p>-->
<!--                    </div>-->
<!--                    <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>-->
<!--                    <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Aug 27, 2018-->
<!--                    </div>-->
<!--                </div>-->


<!--                <div class="nk-news-box-item">-->
<!--                    <div class="nk-news-box-item-img">-->
<!--                        <img src="assets/images/post-4-sm.jpg" alt="For good, too though, in consequence">-->
<!--                    </div>-->
<!--                    <img src="assets/images/post-4.jpg" alt="For good, too though, in consequence"-->
<!--                         class="nk-news-box-item-full-img">-->
<!--                    <h3 class="nk-news-box-item-title">For good, too though, in consequence</h3>-->
<!---->
<!--                    <span class="nk-news-box-item-categories">-->
<!--                                    <span class="bg-main-3">Strategy</span>-->
<!--                                </span>-->
<!---->
<!--                    <div class="nk-news-box-item-text">-->
<!--                        <p>This little wandering journey, without settled place of abode, had been so-->
<!--                            unpleasant to me, that my own house, as I called it to myself, was a perfect-->
<!--                            settlement to me compared to that...</p>-->
<!--                    </div>-->
<!--                    <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>-->
<!--                    <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Aug 14, 2018-->
<!--                    </div>-->
<!--                </div>-->


<!--                <div class="nk-news-box-item">-->
<!--                    <div class="nk-news-box-item-img">-->
<!--                        <img src="assets/images/post-5-sm.jpg" alt="He made his passenger captain of one">-->
<!--                    </div>-->
<!--                    <img src="assets/images/post-5.jpg" alt="He made his passenger captain of one"-->
<!--                         class="nk-news-box-item-full-img">-->
<!--                    <h3 class="nk-news-box-item-title">He made his passenger captain of one</h3>-->
<!---->
<!--                    <span class="nk-news-box-item-categories">-->
<!--                                    <span class="bg-main-5">Indie</span>-->
<!--                                </span>-->
<!---->
<!--                    <div class="nk-news-box-item-text">-->
<!--                        <p>Just then her head struck against the roof of the hall: in fact she was now more-->
<!--                            than nine feet high, and she at once took up the little golden key and hurried-->
<!--                            off to the garden door...</p>-->
<!--                    </div>-->
<!--                    <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>-->
<!--                    <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 23, 2018-->
<!--                    </div>-->
<!--                </div>-->


<!--                <div class="nk-news-box-item">-->
<!--                    <div class="nk-news-box-item-img">-->
<!--                        <img src="assets/images/post-6-sm.jpg"-->
<!--                             alt="At first, for some time, I was not able to answer">-->
<!--                    </div>-->
<!--                    <img src="assets/images/post-6.jpg"-->
<!--                         alt="At first, for some time, I was not able to answer"-->
<!--                         class="nk-news-box-item-full-img">-->
<!--                    <h3 class="nk-news-box-item-title">At first, for some time, I was not able to answer-->
<!--                    </h3>-->
<!---->
<!--                    <span class="nk-news-box-item-categories">-->
<!--                                    <span class="bg-main-5">Racing</span>-->
<!--                                </span>-->
<!---->
<!--                    <div class="nk-news-box-item-text">-->
<!--                        <p>This little wandering journey, without settled place of abode, had been so-->
<!--                            unpleasant to me, that my own house, as I called it to myself, was a perfect-->
<!--                            settlement to me compared to that...</p>-->
<!--                    </div>-->
<!--                    <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>-->
<!--                    <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 3, 2018-->
<!--                    </div>-->
<!--                </div>-->

            </div>
        </div>
    </div>

    <div class="nk-news-box-each-info">
        <div class="nano">

            <div class="nano-content">
                <!-- There will be inserted info about selected news-->
                <div class="nk-news-box-item-image">
                    <img src="assets/images/post-1.jpg" alt="">
                    <span class="nk-news-box-item-categories">
                                    <span class="bg-main-4">MMO</span>
                                </span>
                </div>
                <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>
                <div class="nk-news-box-item-text">
                    <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend!
                        Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                </div>
                <a href="blog-article.html" class="nk-news-box-item-more">Read More</a>
                <div class="nk-news-box-item-date">
                    <span class="fa fa-calendar"></span> Sep 18, 2018
                </div>
            </div>
        </div>
    </div>
</div>

<div class="nk-gap-2"></div>
<div class="nk-blog-grid">
    <div class="row">

        <?php foreach ($result2 as $each2): ?>
        <div class="col-md-6 col-lg-3">
            <!-- START: Post -->
            <div class="nk-blog-post">
                <a href="blog-article.html" class="nk-post-img">
                    <img src="<?php echo $folder_photo . $each2['post_image']; ?>" alt="He made his passenger captain of one">
<!--                    <span class="nk-post-comments-count">13</span>-->

                    <span class="nk-post-categories">
                                    <span class="bg-main-5"><?php echo $each2['category_name']; ?></span>
                                </span>

                </a>
                <div class="nk-gap"></div>
                <h2 class="nk-post-title h4"><a href="blog-article.html"><?php echo $each2['post_title']; ?></a></h2>
                <div class="nk-post-text">
                    <p><?php echo substr($each2['post_details'],0,240) . ' ...'; ?></p>
                </div>
                <div class="nk-gap"></div>
                <a href="blog-article.html"
                   class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read
                    More</a>
                <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 23, 2018
                </div>
            </div>

            <!-- END: Post -->
        </div>
        <?php endforeach; ?>



    </div>
</div>