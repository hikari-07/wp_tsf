<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>株式会社東迎システムファクトリー</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Noto+Sans:ital@1&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://kit.fontawesome.com/79947d7511.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <script>
    $(function () {
      $('.bxslider').bxSlider({
        auto: true, // 自動でスライドショーをスタートさせる　（初期値: false）
        mode: 'fade', // アニメーションの種類「'horizontal'」「'vertical'」「'fade'」　（初期値: 'horizontal'）
        speed: 700, // アニメーションのスピード　（初期値: 500）
        pause: 3000, // 画像の切り替わる間隔　（初期値: 4000）
        pager: false, // 下部にある画像切り替えボタンの表示・非表示　（初期値: true）
        controls: false // 左右の矢印の表示・非表示　（初期値: true）
      });
    });
  </script>
   <?php wp_head(); ?>
</head>

<body id="home">
  <header>
    <div class="fixed">
      <h1><a href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-logo.png"></a></h1>
      <nav class="header-main-menu">
        <ul>
          <li><a href="index.html">ホーム</a></li>
          <li><a href="company.html">会社概要</a></li>
          <li><a href="websystem.html">WEBシステム</a></li>
          <li><a href="homepage.html">HP制作サービス</a></li>
          <li><a href="useful.html">お役立ち情報</a></li>
        </ul>
      </nav>
      <nav class="header-sub-menu">
        <ul>
          <a href="questions.html">
            <li class="sub-menu-shitsumon">よくある質問</li>
          </a>
          <a href="inquiry.html">
            <li class="sub-menu-otoiawase">お問い合わせ</li>
          </a>
        </ul>
        </ul>
      </nav>
      <!-- レスポンシブ用 ハンバーガーボタン -->
      <div class="hamburger-menu">
        <input type="checkbox" id="menu-btn-check">
        <label for="menu-btn-check" class="menu-btn"><span></span></label>
        <!--ここからメニュー-->
        <div class="menu-content">
          <ul>
            <li>
              <a href="index.html">ホーム</a>
            </li>
            <li>
              <a href="company.html">会社概要</a>
            </li>
            <li>
              <a href="websystem.html">WEBシステム</a>
            </li>
            <li>
              <a href="homepage.html">HP制作サービス</a>
            </li>
            <li>
              <a href="useful.html">お役立ち情報</a>
            </li>
            <li>
              <a href="questions.html">よくある質問</a>
            </li>
            <li>
              <a href="inquiry.html">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
      <!--ここまでメニュー-->
    </div>
  </header>