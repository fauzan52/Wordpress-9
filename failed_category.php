<div style="text-align:left">
    <h1>Category: COVID-19</h1>
    <?php 
        $more_page_category_covid19 = get_query_var('paged');

        $category_covid19 = new WP_Query(array(
            'category_name' => 'covid-19',
            'posts_per_page' => 3,
            'paged' => $more_page_category_covid19
        ));

        if ($category_covid19->have_posts()):
            while ($category_covid19->have_posts()):
                $category_covid19->the_post();
    ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php
        endwhile;
        
        echo paginate_links(array(
            'total' => $category_covid19->max_num_pages
        ));
    endif;
    ?>
    </div>