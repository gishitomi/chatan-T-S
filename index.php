<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href=" <?= get_template_directory_uri(); ?>/assets/css/style.css">

    <?php wp_head(); ?>
</head>

<body>
    <div class="container">
        <header>
            <ul class="qqq">
                <p class="ss"><?php dynamic_sidebar('smartslider_area_1'); ?></p>
            </ul>
            <img src=" <?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="">

            <div class="menu">
                <div class="menu-trigger" href="">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </header>
        <nav class="berger-menu">
            <ul>
                <li>Menu01</li>
                <li>Menu02</li>
                <li>Menu03</li>
                <li>Menu04</li>
            </ul>
        </nav>
        <main>
            <div class="visual-box">
                <img src=" <?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="logo">

                <div class="mainvisual">
                    <div class="pc">
                        <?php
                        echo do_shortcode('[smartslider3 slider=2]');
                        ?>
                    </div>
                    <div class="sp">
                        <?php
                        echo do_shortcode('[smartslider3 slider=3]');
                        ?>
                    </div>
                </div>

                <img src=" <?= get_template_directory_uri(); ?>/assets/img/visual_text_pc.png" alt="" class="visual-text">
                <img src=" <?= get_template_directory_uri(); ?>/assets/img/visual_text_sp.png" alt="" class="sp-visual-text">
            </div>
            <p class="p-pc">進化し続ける「街」アメリカンビレッジマガジン</p>
            <p class="p-sp">進化し続ける「街」<br>アメリカンビレッジマガジン</p>
        </main>
        <div class="tittle">
            <h1 class="theme">Latest Articles</h1>
        </div>
        <section class="article">
            <div class="all-pic">
                <div class="pic">
                    <img src=" <?= get_template_directory_uri(); ?>/assets/img/post_img_1.png" alt="">
                    <p>2018/5/20</p>
                    <p class="p">おしゃれカフェがありますよ</p>
                    <div class="underAll">
                        <div class="under">
                            <p class="read">READE MORE</p>
                            <p class="line"></p>
                        </div>
                    </div>
                </div>
                <div class="pic">
                    <img src=" <?= get_template_directory_uri(); ?>/assets/img/post_img_2.png" alt="">
                    <p>2018/5/19</p>
                    <p class="p">あのネオンはいつ交換するのか！？観覧車の謎に迫る!</p>
                    <div class="underAll">
                        <div class="under">
                            <p class="read">READE MORE</p>
                            <p class="line"></p>
                        </div>
                    </div>
                </div>
                <div class="pic">
                    <img src=" <?= get_template_directory_uri(); ?>/assets/img/post_img_3.png" alt="">
                    <p>2018/5/18</p>
                    <p class="p">ラソナの社内はこんなんよ</p>
                    <div class="underAll">
                        <div class="under">
                            <p class="read">READE MORE</p>
                            <p class="line"></p>
                        </div>
                    </div>
                </div>
                <div class="pic">
                    <img src=" <?= get_template_directory_uri(); ?>/assets/img/post_img_4.png" alt="">
                    <p>2018/5/27</p>
                    <p class="p">お隣のアラハはハワイ？</p>
                    <div class="underAll">
                        <div class="under">
                            <p class="read">READE MORE</p>
                            <p class="line"></p>
                        </div>
                    </div>
                </div>
                <div class="pic">
                    <img src=" <?= get_template_directory_uri(); ?>/assets/img/post_img_5.png" alt="">
                    <p>2018/5/16</p>
                    <p class="p">なぜテント？ラソナの人に聞いてみた</p>
                    <div class="underAll">
                        <div class="under">
                            <p class="read">READE MORE</p>
                            <p class="line"></p>
                        </div>
                    </div>
                </div>
                <div class="pic">
                    <img src=" <?= get_template_directory_uri(); ?>/assets/img/post_img_6.png" alt="">
                    <p>2018/5/15</p>
                    <p class="p">ベイエリアおしゃれすぎる問題</p>
                    <div class="underAll">
                        <div class="under">
                            <p class="read">READE MORE</p>
                            <p class="line"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <article class="article" id="article-list">
            <div class="all-pic">
        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 0.6;
        $args = array(
        'orderby' => 'date',
        'order'   => 'DESC',
        'paged' => $paged,
        );
        $article_lists = new WP_Query($args);
        ?>
        <?php if ($article_lists->have_posts() ) : ?>
        <?php while ($article_lists->have_posts() ) : $article_lists->the_post(); ?>
                        <div class="pic">
                            <div class="img-box">
                                <?php the_content(); ?>
                            </div>
                            <p><?php the_date(); ?></p>
                            <p class="p"><?php the_title(); ?></p>
                            <div class="underAll">
                                <div class="under">
                                    <p class="read">READE MORE</p>
                                    <p class="line"></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
        </article>
        <?php if($paged < $article_lists->max_num_pages) {?>
<div class="moreread" id="next">
  <a href="<?php echo next_posts($article_lists->max_num_pages, false); ?>">もっと見る</a>
</div>
<?php }?>
        <footer class="footer">
            <p class="copy">Copyright © Shinohara.ALL RGHTS RESERVED.</p>
        </footer>
    </div>

    <?php wp_footer(); ?>

    <script src=" <?= get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
    <script src=" <?= get_template_directory_uri(); ?>/assets/js/hover.js"></script>
    <script src=" <?= get_template_directory_uri(); ?>/assets/js/humberger.js"></script>
<<<<<<< HEAD
=======
    <script src=" <?= get_template_directory_uri(); ?>/assets/js/jquery.autopager-1.0.0.js"></script>
    <script>
  var maxpage = <?php echo $wp_query->max_num_pages; ?>;  // 最大ページ数取得
  $('#loading').css('display', 'none');　// ローディング画像は一旦消す。
  $.autopager({
    content: '#article-list .pic',// 読み込むコンテンツ
    link: '#next a', // 次ページへのリンク
    autoLoad: false,// スクロールの自動読込み解除
 
    start: function(current, next){
      $('#loading').css('display', 'block');
      $('#next a').css('display', 'none');
    },
 
    load: function(current, next){
        $('#loading').css('display', 'none');
        $('#next a').css('display', 'block');
    }
});
 
$('#next a').click(function(){ // 次ページへのリンクボタン
    $.autopager('load'); // 次ページを読み込む
    return false;
});
</script>

>>>>>>> 063ddf809357a0b0c954cdb9ebc9656d84775fce
</body>

</html>