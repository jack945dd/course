<?php

session_start();//檢查session是否存在，若不存在則轉回登入首頁

if(!isset($_SESSION['usr_id'])) {
	header("Location: login.html");
	exit;
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>課程管理系統 - 首頁</title> 
</head>
<body>
<table width="250" border="1" align="center">
  <tr valign="top">
    <td align="center">
      <p></p>
 <div align="center">
   <p align="center">
    <a href="student_subject_center.php">查看科目</a><br>
    <a href="student_dataupdate.php">個人資料</a><br>
	<a href="logout.php">登出</a><br>
  </p>
</div>
 
    </td>
  </tr>
</table>
</body>
</html>