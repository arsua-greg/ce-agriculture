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

                <?php if ($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()):
                        $the_query->the_post(); ?>
                        <a href="<?php echo the_permalink(); ?>" class="blog-item">
                            <!-- <div class="blog-item"> -->
                            <div class="blog-img">
                                <?php
                                $featured_img = the_post_thumbnail();
                                if ($featured_img == ""): ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/blog_default_img.png"
                                        alt="">
                                <?php endif; ?>
                            </div>
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
            <div class="sectionCommitment">
                <h2 class="title-main"> こだわり</h2>
                <p class="sub-title">Particular </p>
            </div>

            <div class="horizontal-container">

                <div class="column-item">
                    <div class="column-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/ricefield.png"
                            alt=""></div>
                    <p class="column-title">東御という土地を選んだ理由</p>
                    <p class="column-description">
                        湯の丸高原へ向かう新張地区の道から見上げる烏帽子岳から湯ノ丸山、浅間山までのその風景に感動し、直感的に「ここでぶどうを作る！」ことを決意しました。東御市は、日照時間が長く日当たりが良い。乾いた風が常に吹き、雨が降っても枝葉が短時間で乾くため病原菌も発生しにくく、葡萄栽培に最適な地域と言えます。
                    </p>
                </div>

                <div class="column-item">
                    <div class="column-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/red_grapes.png"
                            alt=""></div>
                    <p class="column-title">農薬節減栽培から本来の味へ</p>
                    <p class="column-description">
                        農薬節減栽培は、土壌微生物と菌根菌の増加を促し、土壌環境を保全し、土壌環境にもとから備わっている栄養分を引き出すことが期待できます。
                    </p>
                </div>

                <div class="column-item">
                    <div class="column-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/landscape.png"
                            alt=""></div>
                    <p class="column-title">土地のポテンシャルを引き出す</p>
                    <p class="column-description">
                        東御市の気候や土壌の特性を活かし、それぞれの環境が最大限に力を発揮することで、最高品質のぶどうができると確信しています。
                    </p>
                </div>
            </div>

            <div class="anchorTagBtn">
            <a class="c-btn" href="">
                            <p>詳しくはこちら</p>
                            <img src="<?php echo get_template_directory_uri();?>/release/image/arrow_link.svg" alt="">
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
                            src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/garden.png"
                            alt=""></div>
                    <p class="column-title">自然循環農法がもたらす事</p>
                    <p class="column-description">
                        自然循環農法は、土壌の健康を維持し、生物多様性を促進し、持続可能な食物生産を実現します。これは、自然と共生する農業の未来を描きます。
                    </p>
                </div>

                <div class="column-item">
                    <div class="column-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/person.png"
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
                            src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/soil.png" alt="">
                    </div>
                    <p class="column-title">土壌を育てる</p>
                    <p class="column-description">
                        農業における土壌の育成は、生物多様性の保全と土壌の健康を維持することで、持続可能な食物生産を実現します。これは、自然と共生する農業の未来に繋がります。
                </div>
            </div>

            <div class="anchorTagBtn1">
            <a class="c-btn" href="">
                            <p>詳しくはこちら</p>
                            <img src="<?php echo get_template_directory_uri();?>/release/image/arrow_link.svg" alt="">
                        </a>
            </div>
        </div>
        <!--  Third Element -->
        <div class='l-wrap-2'>
            <div class='custom-flex-container'>
                <div class='custom-item-column'>
                    <h2 class="title-main">SDGS</h2>
                    <p class="sub-title">SDGs</p>
                    <p class="question">SDGSって何？</p>
                    <p class="answer">SDGsは、2030年までに達成すべき17の国際目標です。これらの目標は、貧困、不平等、気候変動などのグローバルな課題を解決するための道筋を示しています。</p>
                    <p class='text-cultivation'>環境に配慮した自然循環栽培</p>
                    <p class='text-industry'>農林水産業が掲げる「みどりの食料システム」に準拠しています。</p>
                    <div class="anchorTagBtn2">
                        <a class="c-btn" href="">
                            <p>詳しくはこちら</p>
                            <img src="<?php echo get_template_directory_uri();?>/release/image/arrow_link.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class='custom-item-column'>
                    <div class="column-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/grapes_with_person.png"
                            alt="">
                    </div>
                </div>
            </div>

        </div>

    </section>
</div>
<?php get_footer(); ?>