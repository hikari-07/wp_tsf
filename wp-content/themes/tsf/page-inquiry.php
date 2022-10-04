<?php get_header(); ?>
<main id="inquiry">
<div class="page">
      <h2 class="page-title wrapper inner">お問い合わせ</h2>
      <p class="page-title-bottom wrapper inner">土・日・祝日・年末年始にいただきましたホームページからのお申し込みは、翌営業日以降に順次対応いたします。<br>
        お急ぎの場合には、お電話にてお問い合わせください。</p>
      <form class="form wrapper inner">
        <div class="form-inner">
          <p>※印の箇所は必須項目です。</p>
          <p>
            <label>お問い合わせ種別 ※</label>
            <input type="text" name="店舗名or会社名" size="60" required>
          </p>
          <p><label>会社名</label>
            <input type="text" name="申込者氏名" size="60">
          </p>
          <p><label>会社名ふりがな ※</label>
            <input type="text" name="申込者氏名ふりがな" size="60" required>
          </p>
          <p><label>氏名 ※</label>
            <input type="text" name="申込者氏名ふりがな" size="60" required>
          </p>
          <p><label>氏名ふりがな ※</label>
            <input type="text" name="申込者氏名ふりがな" size="60" required>
          </p>
          <p><label>メールアドレス ※</label>
            <input type="email" name="メールアドレス" size="60" required>
          </p>
          <p><label>電話番号</label>
            <input type="tel" name="電話番号" size="60">
          </p>
          <p class="inquiry-textarea">
            <label>お問い合わせ内容 ※</label>
            <textarea name="お問い合わせ内容" cols="55" rows="10" required></textarea>
          </p>
          <p class="terms">
            <input type="checkbox" class="checkbox">
            <a href="#">当社のプライバシーポリシー</a><label>に同意して送信する</label>
          </p>
          <div class="button-check">
            <p>
              当社の個人情報取扱について同意される方は、ボタンをチェックいただき、<br class="default">以下の「内容の確認ボタン」クリックください。
            </p>
          </div>
          <button type="submit">送信内容の確認</button>
        </div>
      </form>
  </main>
<?php get_footer(); ?>