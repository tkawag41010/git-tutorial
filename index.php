<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<!-- 2014/11/19 written by T.K. -->
<title>PHOTO</title>
</head>
<body>
<?php
// �J�����g�t�H���_���̂��ׂĂ�.jpg�t�@�C����1�y�[�W�ɕ\������

// ����̎菇

// PC��i���Ƃ��΃f�X�N�g�b�v�j��8�������炢�p�����݂̂̃t�H���_������
// ���̃t�@�C�������[����
// �\���������ʐ^��JTrim�ȂǂŃ��T�C�Y�����ׂĂ��̃t�H���_�Ɏ��[����
// �@�i��640���炢�Ƀ��T�C�Y����j
// �t�H���_���ƃT�[�o(\\scpelearn02\photo)�ɃR�s�[����
// http://scpelearn01.sysmex.co.jp/photo/<�t�H���_����/ �ɂĕ\���ł����OK
// ������"/"�����Y��Ȃ����ƁI
foreach(scandir(".") as $file) {
  if (strpos($file,".jpg") or strpos($file,".JPG") ) {   
      print "<p><img src=\"" . "$file" . "\"></p>\n" ;
  }
}
?>
<table border="0" width="640" cellspacing="0" cellpadding="5" bordercolor="#333333">
 <tr><td bgcolor="#666666" height = "60" align="center"><font color="#FFFFFF" size = "20" align="center">���@��@��</font></td></tr>
</table> 
</body>
</html>
