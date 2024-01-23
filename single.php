<?php get_header(); ?>
<?php
while (have_posts()) : the_post(); ?>
    <div class="page__single">
        <div class="post_content">
            <div class="post_content--img">
                <?php
                $featured_img = the_post_thumbnail();
                if ($featured_img == "") : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/blog_default_img.png" alt="">
                <?php endif; ?>
            </div>
            <div class="post_content--title">
                <?php echo the_title(); ?>
            </div>
            <p class="post_content--date"><?php echo the_date("Y.m.d"); ?></p>
            <p class="post_content--content"><?php echo the_content(); ?></p>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>