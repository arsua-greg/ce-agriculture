<?php
/*
Template Name: Archives
*/
get_header(); ?>
<div class="page__category">
    <div class="category-content">
        <h1 class="title-main">ぶどうジュース</h1>
        <div class="category-content__posts">
            <?php while (have_posts()) : the_post(); ?>
                <div class="blog-item">
                    <div class="blog-img">
                        <?php
                        $featured_img = the_post_thumbnail();
                        if ($featured_img == "") : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/blog_default_img.png" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="category">
                        <?php $categories = get_the_category();
                        foreach ($categories as $category) : ?>
                            <p>
                                <?php echo $category->name; ?>
                            </p>
                        <?php endforeach; ?>
                    </div>
                    <p class="title">
                        <?php echo get_the_title(); ?>
                    </p>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>