<section class="posts-section">
    <style>
        <?php include('posts-section.css');?>
    </style>
    <?php
        $title = get_field('title');
        $btn = get_field('button');
    ?>
    <div class="container">
        <div class="top">
            <h2><?php echo $title;?></h2>
            <a href="/blog">Читати все</a>
        </div>

        <div class="items">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
            );

            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()): $query->the_post();
                    $img_url = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : $default_unit_img_url;
                    ?>
                    <div class="item">
                        <div class="img_wrap">
                            <img src="<?=$img_url?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
                        </div>
                        <div class="item_title"><?php the_title(); ?></div>
                        <div class="item_bottom">
                            <div class="item_description"><?php echo get_the_excerpt(); ?></div>
                            <a href="<?php echo get_permalink(); ?>" class="item_btn">Читати</a>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>