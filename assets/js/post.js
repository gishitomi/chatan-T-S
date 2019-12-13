$
function({


    var maxpage = <?php echo $wp_query->max_num_pages; ?>; // 最大ページ数取得
    $('#loading').css('display', 'none');　 // ローディング画像は一旦消す。
    $.autopager({
        content: '#article-list', // 読み込むコンテンツ
        link: '#next a', // 次ページへのリンク
        autoLoad: false, // スクロールの自動読込み解除

        start: function(current, next) {
            $('#loading').css('display', 'block');
            $('#next a').css('display', 'none');
        },

        load: function(current, next) {
            $('#loading').css('display', 'none');
            $('#next a').css('display', 'block');
        }
    });

    $('#next a').click(function() { // 次ページへのリンクボタン
        $.autopager('load'); // 次ページを読み込む
        return false;
    });

});