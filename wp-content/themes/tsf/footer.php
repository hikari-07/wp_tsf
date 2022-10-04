<footer>
    <div class="footer-content wrapper">
      <div class="footer-left">
        <h1 class="footer-logo"><a href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logo.png"></a></h1>
        <div class="footer-address">
          <span class="footer-company">株式会社東迎システムファクトリー</span>
          <address>大阪府大阪市西区南堀江1-18-11-907</address>
          <span>TEL 06-6567-8774</span>
        </div>
        <div class="footer-icon">
          <a class="target_blank" href="https://twitter.com/togei_sf_2017"><i class="fa-brands fa-twitter"></i></a>
          <a class="target_blank" href="https://www.facebook.com/togeisf/"><i class="fa-brands fa-facebook"></i></a>
          <a class="target_blank" href="https://togei-sf.co.jp/feed/" target="_blank"><i
              class="fa-solid fa-square-rss"></i></a>
        </div>
      </div>
      <div class="footer-right">
        <nav class="footer-right-top">
          <ul>
            <li><a href="index.html">ホーム</a></li>
            <li><a href="company.html">会社概要</a></li>
            <li><a href="websystem.html">WEBシステム</a></li>
            <li><a href="homepage.html">ホームページ制作サービス</a></li>
            <li><a href="useful.html">お役立ち情報</a></li>
          </ul>
        </nav>
        <nav class="footer-right-bottom">
          <ul>
            <li><a href="questions.html">よくある質問</a></li>
            <li><a href="inquiry.html">お問い合わせ</a></li>
          </ul>
        </nav>
        <div class="footer-icon-responsive responsive">
          <a class="target_blank" href="https://twitter.com/togei_sf_2017"><i class="fa-brands fa-twitter"></i></a>
          <a class="target_blank" href="https://www.facebook.com/togeisf/"><i class="fa-brands fa-facebook"></i></a>
          <a class="target_blank" href="https://togei-sf.co.jp/feed/" target="_blank"><i
              class="fa-solid fa-square-rss"></i></a>
        </div>
      </div>
    </div>
    <p class="copyright"><small>Copyright &copy; 株式会社東迎システムファクトリー</small></p>
  </footer>
  <script>
    $(function () {
      $(document).on('click', '.global-nav', function () {
        $('#menu-btn-check').prop('checked', false);
      });
    })
  </script>
  <?php wp_footer(); ?>
  </body>