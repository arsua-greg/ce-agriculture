<?php get_header(); ?>
<div class="page__content">
    <div class="banner">
        <div class="banner__wrapper">
            <div class="banner__float">
                <h1 class="banner__float--title">糖度・香り高く<br />味わい深い</h1>
                <p class="banner__float--desc">東御の自然の恵をいっぱいに<br />浴びたぶどうをお届します</p>
            </div>
            <button type="button" class="c-btn">
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
                        <a href="<?php echo the_permalink(); ?>" class="blog-item">
                            <!-- <div class="blog-item"> -->
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
                                    <p><?php echo $category->name; ?></p>
                                <?php endforeach; ?>
                            </div>
                            <p class="title"><?php echo get_the_title(); ?></p>
                            <!-- </div> -->
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="sect_2">
        <div class="second2-1 column-reverse">
            <div class="datail-box">
                <!-- asdf -->
                <h2>自然循環栽培法</h2>
                <p class="text1">Natural Circulation</p>
                <p class="paragraph1">
                    菌根菌と共存するぶどうの根は、地下深くからリン酸を吸収し、植物のエネルギー循環を活性化させ、糖の生産力を高めます。また、多種多様なミネラルやアミノ酸を吸収し、果実に蓄積することで、甘さと複雑さを増すと期待されています。一方、従来の農法では、地面から15cmの深さでのみ栄養を吸収し、化学肥料の使用により微生物の多様性が低下し、風味に影響を及ぼす可能性があります。
                </p>
                <a class="c-btn" href="">
                    詳しくはこちら
                </a>
            </div>
            <div class="img-box">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/section2/01.png" alt="">
                </div>
            </div>
        </div>

        <div class="second2-1">
            <div class="img-box">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/section2/02.png" alt="">
                </div>
            </div>
            <div class="datail-box">
                <h2>化学肥料は不使用</h2>
                <p class="text1">No Chemical</p>
                <p class="paragraph1">当園自慢のぶどうは、全て信州の環境にやさしい農産物50（長野県認証）認定を受けた、おいしさと安全を追求した逸品です。</p>

                <h2 class="about-head">信州の環境にやさしい農産物について</h2>
                <p class="paragraph1">
                    化学肥料及び化学合成農薬について、「地域慣行施肥量」及び「地区農薬使用回数」の50％以上を削減(認証区分：50-50)した方法で栽培された農産物を認証する制度。詳しくはこちらをご覧ください。</p>
                <a class="c-btn" href="">
                    長野県認証
                </a>
            </div>
        </div>

        <div class="second2-3">
            <div class="l-wrap">
                <div class="datail-box">
                    <h2>生産者</h2>
                    <p class="text1">Producer</p>
                    <p class="paragraph1">『東御のぶどうの味をもっと沢山の人に伝えたい。』
                        東京でITエンジニアとしてのキャリアから転身、ぶどう栽培の道へ進むため長野の東御に移住。自然循環栽培の草分け的な存在に。ぶどうの生食用にとどまらず、加工品も展開。東御ブランドの新しい可能性を探求し続けています。
                    </p>
                    <a href="">
                        詳しくはこちら
                    </a>
                </div>
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/section2/03.png" alt="">
                    <img class="signature"
                        src="<?php echo get_template_directory_uri(); ?>/release/image/section2/04.png" alt="">
                </div>
            </div>
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