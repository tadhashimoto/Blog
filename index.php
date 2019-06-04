<html lang="ja">
  <head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>mossamosaBlog</title>
  </head>
  <body bgcolor=#c9ffc7>

	<?php
	  $LOG_FILE_NAME = "log.txt";
	  
	  // 区切りのための文字列
	  $split = "|-|";
	  // 名前を格納する変数
	  $name = "";
	  // メッセージを格納する変数
	  $message = "";
	  // 時間を格納
	  $date = "";

	  if (isset($_POST["name"])) {
		  $name = $_POST["name"];

		  if (strpos($name, $split) != false) {
			  // 名前に区切り文字が含まれている場合の処理
			  echo "使用できない文字列が含まれています。".$split;
			  return;
		  }

		  if ($name == "") {
			  $name = "noname";
		  }
	  }

	  if (isset($_POST["message"])) {
		  $message = $_POST["message"];

		  if (strpos($message, $split) != false) {
			  // メッセージに区切り文字が含まれている場合の処理
			  echo "使用できない文字列が含まれています。".$split;
			  return;
		  }

		  date_default_timezone_set("Asia/Tokyo");
		  $date = date("Y/m/d H:i:s");

		  // メッセージがある場合のみファイルに書き込む
		  $fp = fopen($LOG_FILE_NAME, "a") or exit($LOG_FILE_NAME."が開けません");
		  fwrite($fp, $name.$split.$message.$split.$date."\n");
		  echo $data;
		  header("Location:".$_SERVER["PHP_SELF"], true, 303);
	  }

	 ?>

	<div align = "center">
	  <h1 class="TopContent">もっさもさブログ</h1>

	  <table class="HeaderTable">
		<tr>
		<th class="HeaderTh"><a href="Contents/study_html.html">HTML</a></th>
		<th class="HeaderTh"><a href="Contents/study_css.html">CSS</a></th>
		<th class="HeaderTh">javascript</th>
		</tr>
	  </table>

	  <p>累計のカウンタ <img src="http://accnt.mossamosablog.main.jp/cnt/accnt.php?cnt_id=2095101&ac_id=LAA0954311&mode=total"></p>
	  <p>今日のカウンタ <img src="http://accnt.mossamosablog.main.jp/cnt/accnt.php?cnt_id=2095101&ac_id=LAA0954311&mode=today"></p>
	  <p>昨日のカウンタ <img src="http://accnt.mossamosablog.main.jp/cnt/accnt.php?cnt_id=2095101&ac_id=LAA0954311&mode=yesterday"></p>

	  <hr width="500">
		<a href="Test.html">テストページ</a>
	  <hr width="500">

	  <br>

	  <form action="index.php" method="post">
		<div>名前<input id="name" type="text" size="20" maxlength="10"></div>
		<div>コメント<input id="message" type="text" size="100" maxlength="50"></div>
		<button type="submit" id="sendMessage" size ="29">送信</button>
		</form>
		
		<p id="comment"></p>

	</div>
	<br>
  </body>
</html>
