<?php get_header();  ?>
<main id="main-page">
    <?php
    if( have_posts() ):
        while (have_posts() ): the_post();
            get_template_part('content');
        endwhile;
    else:
        echo 'Tidak ada postingan';
    endif;

    ?>
    <div style="text-align:left">
    <h1>Category: Covid-19</h1>
    <?php
    $category_covid19 = new WP_Query('category_name=covid-19');

    if   ($category_covid19 -> have_posts()):
        while ($category_covid19->have_posts()): $category_covid19->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li>
    <?php
    endwhile;
    else:
        echo 'Tidak ada postingan';
    endif;
?>
    </div>
</main>
<?php get_footer(); ?>
