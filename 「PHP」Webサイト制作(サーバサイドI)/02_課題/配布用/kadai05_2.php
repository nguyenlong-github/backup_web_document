<?php

require_once __DIR__ . "/def.php";
require_once __DIR__ . "/utils.php";

// TODO：課題の仕様を確認


?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php1 - kadai05_2</title>
  <!-- TODO:bootstrapCSS読み込み -->
  <link href="" rel="stylesheet">
</head>

<body>
  <div class="w-100">

    <!-- ▼▼ヘッダー▼▼--------------------------------- -->
    <header class="bg-info">
      <div class="text-light ms-3 pt-4 pb-3">
        <h1 class="h6">サーバーサイドスクリプト演習１</h1>
        <h2 class="pt-3">画像のアップロード結果</h2>
      </div><!--/.container-->
    </header>
    <!-- ▲▲ヘッダー▲▲--------------------------------- -->

    <!-- ▼▼メイン▼▼----------------------------------- -->
    <main>

      <div class="form-control">

        <h3 class="border-bottom border-3 border-info mb-4 mt-2 pb-2">アップロード結果</h3>

        <div id="frame" class="p-5 border-info rounded" style="border:1px dashed;">

          <!-- ファイル結果表示箇所 -->
          <div class="text-center">
            <!-- TODO:ファイル結果表示 -->
            <!-- TODO:画像は正しく画像ファイルがアップロードされた場合のみ -->
            <figure class="d-inline-block me-1 mt-1 mb-5">
              <img src="">
            </figure>
            <!-- TODO:エラーがあった場合はメッセージのみ -->
            <p class="text-danger"></p>

          </div>
        </div>

        <!-- TODO:戻るボタン押下で入力画面に戻る -->
        <div class="p-5 d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn btn-secondary btn-lg" href="">戻る</a>
        </div>

      </div>
    </main>

  </div><!--/.w100-->

</body>

</html>