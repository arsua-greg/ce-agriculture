<?php get_header(); ?>
<div class="page__content">
    <div class="banner">
        <div class="banner__wrapper">
            <div class="banner__float">
                <h1 class="banner__float--title">糖度・香り高く<br />味わい深い</h1>
                <p class="banner__float--desc">東御の自然の恵をいっぱいに<br />浴びたぶどうをお届します</p>
            </div>
            <a href="https://www.queenrouge.jp/" class="c-btn" id="orchard">
                <p>Online Shop</p>
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow_link.svg" alt="">
            </a>
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
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="sect_2" id="circulation">
        <div class="second2-1 column-reverse">
            <div class="datail-box">
                <h2>自然循環栽培法</h2>
                <p class="text1">Natural Circulation</p>
                <p class="paragraph1">
                    菌根菌と共存するぶどうの根は、地下深くからリン酸を吸収し、植物のエネルギー循環を活性化させ、糖の生産力を高めます。また、多種多様なミネラルやアミノ酸を吸収し、果実に蓄積することで、甘さと複雑さを増すと期待されています。一方、従来の農法では、地面から15cmの深さでのみ栄養を吸収し、化学肥料の使用により微生物の多様性が低下し、風味に影響を及ぼす可能性があります。
                </p>
                <a class="c-btn" href="">
                    <p>詳しくはこちら</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow_link.svg" alt="">
                </a>
            </div>
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/section2/01.png" alt="">
            </div>
        </div>
        <div class="second2-1">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/section2/02.png" alt="">
            </div>
            <div class="datail-box db">
                <h2>化学肥料は不使用</h2>
                <p class="text1">No Chemical</p>
                <p class="paragraph1 prgrph1">当園自慢のぶどうは、全て信州の環境にやさしい農産物50（長野県認証）認定を受けた、おいしさと安全を追求した逸品です。</p>
                <h3 class="about-head abth1">信州の環境にやさしい<br class="sp-only">農産物について</h3>
                <p class="paragraph1">
                    化学肥料及び化学合成農薬について、「地域慣行施肥量」及び「地区農薬使用回数」の50％以上を削減(認証区分：50-50)した方法で栽培された農産物を認証する制度。詳しくは<a href="https://www.pref.nagano.lg.jp/nogi/sangyo/nogyo/sedo.html" target="_blank">こちら</a>をご覧ください。</p>
                <a class="c-btn" href="<?php echo home_url(); ?>/#certification">
                    <p>長野県認証</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow_link.svg" alt="">
                </a>
            </div>
        </div>
        <div class="second2-3">
            <div class="l-wrap">
                <div class="datail-box">
                    <h2>生産者</h2>
                    <p class="text1">Producer</p>
                    <p class="paragraph1">『東御のぶどうの味をもっと沢山の人に伝えたい。』<br />
                        東京でITエンジニアとしてのキャリアから転身、ぶどう栽培の道へ進むため長野の東御に移住。自然循環栽培の草分け的な存在に。ぶどうの生食用にとどまらず、加工品も展開。東御ブランドの新しい可能性を探求し続けています。
                    </p>
                    <img id="products" class="signature" src="<?php echo get_template_directory_uri(); ?>/release/image/section2/04.png" alt="">
                    <a class="c-btn" href="">
                        <p>詳しくはこちら</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow_link.svg" alt="">
                    </a>
                </div>
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/section2/03.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="sect_3">
        <div class="l-wrap">
            <div class="sect_3__title">
                <h2 class="title-main">商 品</h2>
                <span class="sub-title">Products</span>
            </div>
            <div class="sect_3__text-content">
                <p class="sect_3__text-content--text">東御こもだ果樹園では、黒・緑・赤の3 色のぶどうを栽培しています。それぞれの品種には個性がありますが、共通の美味しさの基準は以下のようなものです。<br />
                    ・枝の状態は鮮やかな緑色で、収穫から時間が経っていないものが新鮮です。<br />
                    ・実の状態は色づきが良く、ブルーム<span class="exponent">*1</span> が付いているものが甘くてジューシーです。<br />
                    ・糖度は18 度以上が高品質とされています<span class="exponent">*2</span> 。<br />
                    これらの基準を満たすぶどうを、信州の環境にやさしい農産物5050（長野県認証）の基準に従って栽培しています。日照時間が長く、昼夜の寒暖差が大きい東御市の南斜面は、ぶどうの甘みと酸味のバランスを引き出す最適な環境となっています。農薬や化学肥料の使用量を減らし、健全な土壌維持と適切な着房制限を行うことにより、味わい深く高品質なぶどうを育てています。ぜひ、東御こもだ果樹園のぶどうをご賞味ください。<br />

                    *1 ブルームとは、ぶどうの表面に付いている白い粉のようなもので、ぶどうが自ら分泌する天然の蝋（ろう）物質です。ブルームはぶどうを水分の蒸発や病気から守り、鮮度を保つ役割があります。ブルームは無害で食べても問題ありません。<br />
                    *2 糖度や食味は、品種ごとの違いや、その年の気候によって変わります。このため、同じ品種でも年によって味が異なることがあります。こもだ果樹園では、その年々の変化を大切にしながら、一貫して高品質を保つよう努めています。ぜひ、その年ごとの味の違いを楽しんでいただき、自然の魅力を感じていただければ幸いです。</p>
            </div>
            <button type="button" class="c-btn sect_3__btn" onclick="showText()">
                <p class="open">もっと読む</p>
                <p class="close">閉じる</p>
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/section_3/arrow_down.svg" alt="">
            </button>
        </div>
        <div class="sect_3__product-images">
            <?php
            $products = [
                [
                    "image" => "sect_3_img_1.png",
                    "title" => "Kyoho",
                    "jp_name" => "巨 峰",
                    "catchphrase" => "ここにキャッチコピーここにキャッチコピー",
                    "link" => "https://www.queenrouge.jp/"
                ],
                [
                    "image" => "sect_3_img_2.png",
                    "title" => "Nagano Purple",
                    "jp_name" => "ナガノパープル",
                    "catchphrase" => "ここにキャッチコピーここにキャッチコピー",
                    "link" => "https://www.queenrouge.jp/"
                ],
                [
                    "image" => "sect_3_img_3.png",
                    "title" => "Shine Masquat",
                    "jp_name" => "シャインマスカット",
                    "catchphrase" => "ここにキャッチコピーここにキャッチコピー",
                    "link" => "https://www.queenrouge.jp/"
                ],
                [
                    "image" => "sect_3_img_4.png",
                    "title" => "Queen Rouge",
                    "jp_name" => "クイーンルージュ",
                    "catchphrase" => "ここにキャッチコピーここにキャッチコピー",
                    "link" => "https://www.queenrouge.jp/"
                ],
                [
                    "image" => "sect_3_img_5.png",
                    "title" => "Queen Nina",
                    "jp_name" => "クイーンニーナ",
                    "catchphrase" => "ここにキャッチコピーここにキャッチコピー",
                    "link" => "https://www.queenrouge.jp/"
                ],
                [
                    "image" => "sect_3_img_6.png",
                    "title" => "Queen Seven",
                    "jp_name" => "クイーンセブン",
                    "catchphrase" => "ここにキャッチコピーここにキャッチコピー",
                    "link" => "https://www.queenrouge.jp/"
                ],
                [
                    "image" => "sect_3_img_7.png",
                    "title" => "Grape Juice",
                    "jp_name" => "ぶどうジュース",
                    "catchphrase" => "ここにキャッチコピーここにキャッチコピー",
                    "link" => "https://www.queenrouge.jp/"
                ],
                [
                    "image" => "sect_3_img_8.png",
                    "title" => "Semi Dry",
                    "jp_name" => "セミドライ",
                    "catchphrase" => "ここにキャッチコピーここにキャッチコピー",
                    "link" => "https://www.queenrouge.jp/"
                ],
            ];

            foreach ($products as $product) :
            ?>
                <div class="product-item">
                    <a href="<?= $product["link"]; ?>">
                        <img class="product-img" src="<?= get_template_directory_uri(); ?>/release/image/section_3/<?= $product["image"]; ?>" alt="">
                        <div class="product-item__float"></div>
                        <div class="product-item__text-container delete-bg">
                            <p class="product-item__title"><?= $product["title"]; ?></p>
                            <p class="product-item__jp-name"><?= $product["jp_name"]; ?></p>
                            <p class="product-item__catchphrase"><?= $product["catchphrase"]; ?></p>
                            <button href="<?= $product["link"]; ?>" type="button" class="c-btn product-item__btn">
                                <p>Online Shop</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow_link.svg" alt="">
                            </button>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="sect_4" id="commitment">
        <div class="l-wrap">
            <div class="sectionCommitment">
                <h2 class="title-main"> こだわり</h2>
                <p class="sub-title">Particular </p>
            </div>
            <div class="horizontal-container">
                <div class="column-item">
                    <div class="column-img"><img src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/ricefield.png" alt=""></div>
                    <p class="column-title">東御という土地を選んだ理由</p>
                    <p class="column-description">
                        湯の丸高原へ向かう新張地区の道から見上げる烏帽子岳から湯ノ丸山、浅間山までのその風景に感動し、直感的に「ここでぶどうを作る！」ことを決意しました。東御市は、日照時間が長く日当たりが良い。乾いた風が常に吹き、雨が降っても枝葉が短時間で乾くため病原菌も発生しにくく、葡萄栽培に最適な地域と言えます。
                    </p>
                </div>
                <div class="column-item">
                    <div class="column-img"><img src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/red_grapes.png" alt=""></div>
                    <p class="column-title">農薬節減栽培から本来の味へ</p>
                    <p class="column-description">
                        農薬節減栽培は、土壌微生物と菌根菌の増加を促し、土壌環境を保全し、土壌環境にもとから備わっている栄養分を引き出すことが期待できます。
                    </p>
                </div>
                <div class="column-item">
                    <div class="column-img"><img src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/landscape.png" alt=""></div>
                    <p class="column-title">土地のポテンシャルを引き出す</p>
                    <p class="column-description">
                        東御市の気候や土壌の特性を活かし、それぞれの環境が最大限に力を発揮することで、最高品質のぶどうができると確信しています。
                    </p>
                </div>
            </div>
            <div class="anchorTagBtn" id="attempt">
                <a class="c-btn" href="">
                    <p>詳しくはこちら</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow_link.svg" alt="">
                </a>
            </div>
        </div>
        <!--  Second Element -->
        <div class="l-wrap">
            <div class="sectionCommitment">
                <h2 class='title-main'>取り組み</h2>
                <p class='sub-title'>Particular </p>
            </div>
            <div class="horizontal-container">
                <div class="column-item">
                    <div class="column-img"><img src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/garden.png" alt="">
                    </div>
                    <p class="column-title">自然循環農法がもたらす事</p>
                    <p class="column-description">
                        自然循環農法は、土壌の健康を維持し、生物多様性を促進し、持続可能な食物生産を実現します。これは、自然と共生する農業の未来を描きます。
                    </p>
                </div>
                <div class="column-item">
                    <div class="column-img"><img src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/person.png" alt="">
                    </div>
                    <p class="column-title">
                        安全って？安心って？<br>
                        食用ぶどうの本来の味
                    </p>
                    <p class="column-description">
                        安全とは、農薬や化学肥料の残留がないこと。安心とは、生産者と消費者が納得すること。本来のぶどうの味は、化学肥料や農薬に頼らず、土壌の微生物や生態系の働きを活用して育てられたぶどうの味である。
                    </p>
                </div>
                <div class="column-item">
                    <div class="column-img"><img src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/soil.png" alt="">
                    </div>
                    <p class="column-title">土壌を育てる</p>
                    <p class="column-description">
                        農業における土壌の育成は、生物多様性の保全と土壌の健康を維持することで、持続可能な食物生産を実現します。これは、自然と共生する農業の未来に繋がります。
                </div>
            </div>
            <div class="anchorTagBtn1">
                <a class="c-btn" href="">
                    <p>詳しくはこちら</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow_link.svg" alt="">
                </a>
            </div>
        </div>
        <!--  Third Element -->
        <div class='l-wrap-2' id="sdg">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow_link.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class='custom-item-column'>
                    <div class="column-img"><img src="<?php echo get_template_directory_uri(); ?>/release/image/section_4/grapes_with_person.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-container">
        <div class="footer-title">
            <h2 class="title-main">信 頼</h2>
            <span class="sub-title">Trust</span>
        </div>
        <div class="footer_column">
            <div class="footer_column--col">
                <p class="title">長野認証</p>
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/footer_logo_1.png" alt="">
                <p class="content">当園のぶどうは全て、信州の環境にやさしい農産物（長野県認証）において<br>
                    ・　節減対象農薬：当地比50％減<br>
                    ・　化学肥料（窒素成分）：不使用<br>
                    ・　除草剤：不使用<br>
                    にて栽培されたぶどうです。<br>
                    完熟堆肥と自然由来の腐食酸を土作りの基本資材とし、微生物多様性と土地の環境の恵みを最大限に引き出すよう栽培を心がけています。
                </p>
            </div>
            <div class="footer_column--col">
                <p class="title">フードアクション2020</p>
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/footer_logo_2.png" alt="">
                <p class="content">
                    フード・アクション・ニッポン アワード2020で、皮ごと食べる3色ぶどうギフトセットが特別賞を受賞いたしました。<br>
                    フード・アクション・ニッポンは、日本の食を次の世代に残し、創るために、民間企業・ 団体・行政・消費者等が<br>
                    一体となって推進する国産農林水産物の消費拡大の取組です。<br><br>
                    Youtube<br>
                </p>
                <a class="content link" href="https://www.youtube.com/watch?v=IGRSMwYZiuc">https://www.youtube.com/watch?v=IGRSMwYZiuc</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>