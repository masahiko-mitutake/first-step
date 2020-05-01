<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>入力ページ</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
    <header>
      <div class="container">
        <a href="index.php">
          <h3 class="titleP">YBC展示会用アンケート<span class="toTop">⇒トップへ</span></h3>
        </a>
        <div class="timeRecord">
          <?php
          date_default_timezone_set('Asia/Tokyo');
          $timeRecord = date("Y/m/d H:i:s");
          echo $timeRecord ?>
        </div>
      </div>
    </header>
    <div class="wholeWrapper">
      <div class="main">
        <div class="inputs">
          <div class="container">
            <fieldset>
            <legend>担当者</legend>
              <label><input type="radio" name="personInCharge" value="pic1" checked="checked" required>吉田</label>
              <label><input type="radio" name="personInCharge" value="pic2">佐藤</label>
              <label><input type="radio" name="personInCharge" value="pic3">鈴木</label>
            </fieldset>
            <fieldset>
              <legend>回答</legend>
            <p>質問項目１　※複数回答可<br>
              <label><input type="checkbox" name="q1" value="その1" checked> その1</label>
              <label><input type="checkbox" name="q1" value="その2"> その2</label>
              <label><input type="checkbox" name="q1" value="その3"> その3</label>
            </p>
            <p>質問項目２　※複数回答可<br>
              <label><input type="checkbox" name="q2" value="その1" checked> その1</label>
              <label><input type="checkbox" name="q2" value="その2"> その2</label>
              <label><input type="checkbox" name="q2" value="その3"> その3</label>
            </p>
            <p>質問項目３　※複数回答可<br>
              <label><input type="checkbox" name="q3" value="その1" checked> その1</label>
              <label><input type="checkbox" name="q3" value="その2"> その2</label>
              <label><input type="checkbox" name="q3" value="その3"> その3</label>
            </p>
            <p>質問項目４　※択一式<br>
              <label><input type="radio" name="q4" value="good" checked="checked">良い</label>
              <label><input type="radio" name="q4" value="soso">普通</label>
              <label><input type="radio" name="q4" value="bad">悪い</label>
            </p>
            <p>コメント<br>
            <textarea name="comentsBox" rows="8" cols="80">
              端末の音声入力でどうぞ！
            </textarea>
            </p>
            </fieldset>
            <a href="confirmation.php">
            <input class="Btn submit" type="submit" name="data" value="決定">
            </a>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <footer>
      <a href="http://www.ybco.co.jp/">
        <img src="http://www.ybco.co.jp/common/img/logo/h1_ybc_logo.png" alt="YBC_logo">
      </a>
    </footer>
  </body>
</html>
