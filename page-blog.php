<?php get_header(); 

$posts = get_posts([
    'post_type' => 'press-release',
    'posts_per_page' => 3,
    'category' => 9,
]);

foreach($posts as $post) {
    setup_postdata($post);

    echo '<h1>' . get_the_title() . '</h1>';
    echo '<a href="' . get_the_permalink() . '">Read More</a>';
    echo '<hr>';
}
wp_reset_postdata();



get_footer(); ?>
