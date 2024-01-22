<?php get_header(); ?>
<div class="page__content">
    <div class="banner">
        <div class="banner__wrapper">
            <div class="banner__float">
                <h1 class="banner__float--title">糖度・香り高く<br />味わい深い</h1>
                <p class="banner__float--desc">東御の自然の恵をいっぱいに<br />浴びたぶどうをお届します</p>
            </div>
            <button type="button" class="banner_btn">
                <p>Online Shop</p>
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow_link.svg" alt="">
            </button>
        </div>
    </div>
    <section class="sect_1">
        <div class="l-wrap">
            <div class="text-center">
                <h2 class="title-main">こもだ果樹園</h2>
                <span class="sub-title">BLOG</span>
            </div>
            <div class="blog-container">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 4,
                    'paged' => $paged,
                );

                $the_query = new WP_Query($args);
                ?>

                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="blog-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/blog_default_img.png" alt="">
                            <div class="category">
                                <?php $categories = get_the_category();
                                foreach ($categories as $category) : ?>
                                    <p><?php echo $category->name; ?></p>
                                <?php endforeach; ?>
                            </div>
                            <p class="title"><?php echo get_the_title(); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="sect_2">
        <div class="l-wrap">
            <h1>section 2</h1>
        </div>
    </section>
    <section class="sect_3">
        <div class="l-wrap">
            <h1>section 3</h1>
        </div>
    </section>
    <section class="sect_4">
        <div class="l-wrap">
            <h1>section 4</h1>
        </div>
    </section>
</div>
<?php get_footer(); ?>