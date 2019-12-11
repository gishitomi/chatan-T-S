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
            <ul>
                <li>Menu01</li>
                <li>Menu02</li>
                <li>Menu03</li>
                <li>Menu04</li>
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
                    <img src=" <?= get_template_directory_uri(); ?>/assets/img/visual_1_pc.png" alt="" class="pc">
                    <img src=" <?= get_template_directory_uri(); ?>/assets/img/visual_1_sp.png" alt="" class="sp">
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
        <footer class="footer">
            <p class="copy">Copyright © Shinohara.ALL RGHTS RESERVED.</p>
        </footer>
    </div>

    <?php wp_footer(); ?>

    <script src=" <?= get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
    <script src=" <?= get_template_directory_uri(); ?>/assets/js/hover.js"></script>
    <script src=" <?= get_template_directory_uri(); ?>/assets/js/humberger.js"></script>
</body>

</html>