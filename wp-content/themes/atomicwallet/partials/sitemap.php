
<div class="container-map">

<div class="wrap-block-notes">
    <h2>Pages</h2>
    <ul>
    <?php
    // Add pages you'd like to exclude in the exclude here
    wp_list_pages(
    array(
    'exclude' => '', // enter the ID or comma-separated list of page IDs to exclude
    'title_li' => '',
    )
    );
    ?>
    </ul>
</div>

<div class="wrap-block-notes">
<h2>Posts</h2>
<ul>
<?php
// Add categories you'd like to exclude in the exclude here
$learnedia_cats = get_categories('exclude=');
foreach ($learnedia_cats as $learnedia_cat) {
$learnedia_posts_by_slug = array(
'category_name'    => $learnedia_cat->slug,
'exclude'          => '', // enter the ID or comma-separated list of page IDs to exclude
'numberposts'      => '10' // number of posts to show, default value is 5
);
$learnedia_posts_array = get_posts( $learnedia_posts_by_slug );
echo "<ul>";
foreach ($learnedia_posts_array as $learnedia_post){
echo '<li><a href="'.get_permalink($learnedia_post).'">'.get_the_title($learnedia_post).'</a></li>';
}
echo "</ul>";
echo "</li>";
}
?>
</ul>
</div>

</div>
