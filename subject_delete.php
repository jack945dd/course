<?php 
  header("Content-Type: text/html; charset=utf-8");
  require_once("connMysql.php");
  session_start();
  
  //刪除科目資料
  $sql = "DELETE FROM subject WHERE subject_update=".$_GET["subject_update"]."";
  mysqli_query($conn, $sql);
  //刪除後，回到科目管理
 
  header("Location: subject_center.php");
?>
