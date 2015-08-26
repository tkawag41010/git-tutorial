<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<!-- 2014/11/19 written by T.K. -->
<title>PHOTO</title>
</head>
<body>
<?php
// カレントフォルダ内のすべての.jpgファイルを1ページに表示する

// 動作の手順

// PC上（たとえばデスクトップ）に8文字くらい英数字のみのフォルダをつくる
// このファイルを収納する
// 表示したい写真をJTrimなどでリサイズしすべてこのフォルダに収納する
// 　（横640くらいにリサイズする）
// フォルダごとサーバ(\\scpelearn02\photo)にコピーする
// http://scpelearn01.sysmex.co.jp/photo/<フォルダ名＞/ にて表示できればOK
// 末尾に"/"をつけ忘れないこと！
foreach(scandir(".") as $file) {
  if (strpos($file,".jpg") or strpos($file,".JPG") ) {   
      print "<p><img src=\"" . "$file" . "\"></p>\n" ;
  }
}
?>
<table border="0" width="640" cellspacing="0" cellpadding="5" bordercolor="#333333">
 <tr><td bgcolor="#666666" height = "60" align="center"><font color="#FFFFFF" size = "20" align="center">お　わ　り</font></td></tr>
</table> 
</body>
</html>
