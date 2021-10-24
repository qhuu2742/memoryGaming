<ul>
    <li>
        <a href="../news_management">Quản bài viết</a>
    </li>
</ul>
<ul>
    <li>
        <a href="../slider_management">Quản lý slider</a>
    </li>
</ul>
<?php
if (isset($_SESSION['cap_do'])){
    if ($_SESSION['cap_do']==1) { ?>
        <ul>
            <li>
                <a href="../quan_ly_admin">Quản lý admin</a>
            </li>
        </ul>
    <?php }} ?>
<ul>
    <li>
        <a href="../quan_ly_hoa_don">Quản lý hóa đơn</a>
    </li>
</ul>

<ul>
    <li>
        <a href="../common/logout.php">Đăng xuất</a>
    </li>
</ul>