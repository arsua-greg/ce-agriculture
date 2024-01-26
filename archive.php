<?php
/*
Template Name: Archives
*/
get_header(); ?>
<div class="page__category">
    <div class="category-content">
        <div class="l-wrap">
            <?php $category_title = single_cat_title('', false); ?>
            <h1 class="title-main"><?php echo $category_title; ?></h1>
            <div class="category-content__posts">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 12,
                    'paged' => $paged,
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
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
                                <?php echo get_the_title(); ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                    <?php echo wp_pagenavi(array("query" => $the_query)); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>