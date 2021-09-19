<?php
require_once('config.php');
require_once(BASE_PATH . '/logic/posts.php');
require_once(BASE_PATH . '/logic/auth.php');
require_once(BASE_PATH . '/logic/categories.php');
$category_id = isset($_REQUEST['category_id']) ? $_REQUEST['category_id'] : null;
$tag_id = isset($_REQUEST['tag_id']) ? $_REQUEST['tag_id'] : null;
$q = isset($_REQUEST['q']) ? $_REQUEST['q'] : null;
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
$page_size = 6;
$posts = getPosts($page_size, $page, $category_id, $tag_id, null, $q, 'publish_date', 'desc', getUserId());
$posts_count  = getPostsCount($category_id, $tag_id, null, $q);
$page_count = ceil($posts_count / $page_size);

function getUrl($p, $category_id, $tag_id, $q)
{
    $url = BASE_URL . "/posts.php?page=$p";
    if ($category_id != null) $url .= "&category_id=$category_id";
    if ($tag_id != null) $url .= "&tag_id=$tag_id";
    if ($q != null) $url .= "&q=$q";
    return $url;
}
?>
<?php require_once('layout/header.php'); ?>
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>Recent Posts</h4>
                        <h2>Our Recent Blog Entries</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Banner Ends Here -->
<section class="blog-posts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="<?= BASE_URL . '/posts.php' ?>">
                        <input type="text" value="<?= isset($_REQUEST['q']) ? $_REQUEST['q'] : '' ?>" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="all-blog-posts">
                    <div class="row">
                        <?php
                        foreach ($posts as $post) {
                        ?>
                            <div class="col-lg-6">
                                <?php include(BASE_PATH . '/views/posts-view.php') ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <ul class="page-numbers">
                        <?php
                        $prevUrl = getUrl($page - 1, $category_id, $tag_id, $q);
                        $nxtUrl = getUrl($page + 1, $category_id, $tag_id, $q);

                        if ($page > 1) echo "<li><a href='{$prevUrl}'><i class='fa fa-angle-double-left'></i></a></li>";

                        for ($i = 1; $i <= $page_count; $i++) {
                            $url = getUrl($i, $category_id, $tag_id, $q);
                            echo "<li class=" . ($i == $page ? "active" : "") . "><a href='{$url}'>{$i}</a></li>";
                        }

                        if ($page < $page_count) echo "<li><a href='{$nxtUrl}'><i class='fa fa-angle-double-right'></i></a></li>";
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('layout/footer.php') ?>