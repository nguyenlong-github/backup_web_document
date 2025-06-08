<?php

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- TODO:Bootstrap読み込み -->
  <!-- link -->
  <link href="" rel="stylesheet">

  <title>php1 - kadai06_1</title>
</head>

<body>
  <!-- ▼▼ヘッダー▼▼--------------------------------- -->
  <header class="bg-info">
    <div class="text-light ms-5 pt-5 pb-3">
      <h1 class="h6">サーバーサイドスクリプト演習１</h1>
      <h2 class="pt-3">クッキー</h2>
    </div><!--/.text-light ms-5 pt-5 pb-3-->
  </header>
  <!-- ▲▲ヘッダー▲▲--------------------------------- -->

  <!-- ▼▼メイン▼▼----------------------------------- -->
  <main>
    <div class="container-field">
      <h2 class="p-5 d-grid gap-2 d-md-flex">取り扱いクッキー</h2>
      <div class="row" style="border-top: 2px solid hotpink;">

        <!-- TODO:kadai06_resourceファイルの情報を読み込み -->
        <div class="col-sm-3 p-3">
          <div class="card h-100 shadow-sm" style="max-width:25rem;">
            <a class="link-secondary" style="text-decoration:none;" href="">

              <img class="img-fluid img-thumbnail h-50" style="width:100%;" src="">

              <div class="card-body">
                <p class="card-text"></p>
                <p class="card-text" style="color:hotpink;">¥</p>
              </div>
            </a>
          </div>
        </div>


      </div>

      <div class="row">
        <h2 class="p-5 d-grid gap-2 d-md-flex" style="border-bottom: 2px solid hotpink;">閲覧したクッキー</h2>
        <div class="col m-3" style="display: flex; overflow:auto;">

          <!-- TODO:閲覧したクッキー情報を表示する -->

          <div class="card m-3" style="max-width:10rem; min-width:10rem;">
            <a class="link-secondary" style="text-decoration:none;" href="">

              <img class="img-fluid img-thumbnail h-50" style="width:100%;" src="">

              <div class="card-body">
                <p class="card-text"></p>
                <p class="card-text" style="color:hotpink;">¥</p>
              </div>
            </a>
          </div>

        </div>

      </div>

    </div>
  </main>
  <!-- ▲▲メイン▲▲----------------------------------- -->

</body>

</html>