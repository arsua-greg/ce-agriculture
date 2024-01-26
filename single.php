<?php get_header(); ?>
<?php
while (have_posts()) : the_post(); ?>
    <div class="page__single">
        <div class="post_content">
            <div class="post_content--img">
                <?php
                $featured_img = the_post_thumbnail();
                if (has_post_thumbnail()) : ?>
                    <?php echo $featured_img; ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/blog_default_img.png" alt="">
                <?php endif; ?>
            </div>
            <div class="post_content--title">
                <?php echo the_title(); ?>
            </div>
            <p class="post_content--date"><?php echo get_the_date("Y.m.d"); ?></p>
            <div class="post_content--content"><?php echo the_content(); ?></div>
        </div>
    </div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<div class="related_posts">
    <div class="l-wrap">
        <div class="blog-container">
            <?php
            $current_post_id = get_the_ID();
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 4,
                'post__not_in'   => array($current_post_id),
            );

            $the_query = new WP_Query($args);
            ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="blog-item">
                    <div class="blog-img">
                        <a href="<?php echo the_permalink(); ?>">
                            <?php
                            $featured_img = the_post_thumbnail();
                            if (has_post_thumbnail()) : ?>
                                <?php echo $featured_img; ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/blog_default_img.png" alt="">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="category">
                        <?php $categories = get_the_category();
                        foreach ($categories as $category) : ?>
                            <p>
                                <a href="<?php echo get_category_link($category->term_id); ?>">
                                    <?php echo $category->name; ?>
                                </a>
                            </p>
                        <?php endforeach; ?>
                    </div>
                    <p class="title">
                        <?php echo the_title(); ?>
                    </p>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>