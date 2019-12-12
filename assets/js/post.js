var infScroll = new InfiniteScroll('.postWrap', { //大枠のセレクタ
    append: '.post', //読み込むボックスたちのセレクタ
    path: '.pagination .next', //次ページへ飛ぶための「次へ」ボタンのセレクタ
    hideNav: '.pagination', //ページネーションのセレクタ
    button: '.moreButton', //「もっと見る」ボタンのセレクタ
    scrollThreshold: false, //自動で次のページを読み込まないようにする
    status: '.scroller-status', // ステータスのセレクタ
    history: 'false', //読み込み後のURLを変更しない
});
infScroll.on('append', function(response, path, items) {
    //読み込み後に何かしたい場合はここに書く
});