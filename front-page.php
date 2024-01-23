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

                <?php if ($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()):
                        $the_query->the_post(); ?>
                        <div class="blog-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/blog_default_img.png" alt="">
                            <div class="category">
                                <?php $categories = get_the_category();
                                foreach ($categories as $category): ?>
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
            <div class="sectionCommitment">
                <h2 class='commitment'> こだわり</h2>
                <p class='particular'>Particular </p>
            </div>

            <div class="horizontal-container">

                <div class="column-item">
                    <div class="column-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/東御という土地を選んだ理由.png"
                            alt=""></div>
                    <p class="column-title">東御という土地を選んだ理由</p>
                    <p class="column-description">
                        湯の丸高原へ向かう新張地区の道から見上げる烏帽子岳から湯ノ丸山、浅間山までのその風景に感動し、直感的に「ここでぶどうを作る！」ことを決意しました。東御市は、日照時間が長く日当たりが良い。乾いた風が常に吹き、雨が降っても枝葉が短時間で乾くため病原菌も発生しにくく、葡萄栽培に最適な地域と言えます。
                    </p>
                </div>

                <div class="column-item">
                    <div class="column-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/R0003559.png"
                            alt=""></div>
                    <p class="column-title">農薬節減栽培から本来の味へ</p>
                    <p class="column-description">
                        農薬節減栽培は、土壌微生物と菌根菌の増加を促し、土壌環境を保全し、土壌環境にもとから備わっている栄養分を引き出すことが期待できます。
                    </p>
                </div>

                <div class="column-item">
                    <div class="column-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/R0003785.png"
                            alt=""></div>
                    <p class="column-title">土地のポテンシャルを引き出す</p>
                    <p class="column-description">
                        東御市の気候や土壌の特性を活かし、それぞれの環境が最大限に力を発揮することで、最高品質のぶどうができると確信しています。
                    </p>
                </div>
            </div>

            <div class="anchorTagBtn">
                <a href="">
                    詳しくはこちら
                </a>
            </div>
        </div>
        <!--  Second Element -->
        <div class="l-wrap">
            <div class="sectionCommitment">
                <h2 class='commitment'> 取り組み</h2>
                <p class='particular'>Particular </p>
            </div>

            <div class="horizontal-container">

                <div class="column-item">
                    <div class="column-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/PXL_20230723_010120440.png"
                            alt=""></div>
                    <p class="column-title">自然循環農法がもたらす事</p>
                    <p class="column-description">
                        自然循環農法は、土壌の健康を維持し、生物多様性を促進し、持続可能な食物生産を実現します。これは、自然と共生する農業の未来を描きます。
                    </p>
                </div>

                <div class="column-item">
                    <div class="column-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/R0003591.png"
                            alt=""></div>
                    <p class="column-title">
                        安全って？安心って？<br>
                        食用ぶどうの本来の味
                    </p>
                    <p class="column-description">
                        安全とは、農薬や化学肥料の残留がないこと。安心とは、生産者と消費者が納得すること。本来のぶどうの味は、化学肥料や農薬に頼らず、土壌の微生物や生態系の働きを活用して育てられたぶどうの味である。
                    </p>
                </div>

                <div class="column-item">
                    <div class="column-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/mud.png" alt="">
                    </div>
                    <p class="column-title">土壌を育てる</p>
                    <p class="column-description">
                        農業における土壌の育成は、生物多様性の保全と土壌の健康を維持することで、持続可能な食物生産を実現します。これは、自然と共生する農業の未来に繋がります。
                </div>
            </div>

            <div class="anchorTagBtn">
                <a href="">
                    詳しくはこちら
                </a>
            </div>
        </div>


    </section>
</div>
<?php get_footer(); ?>