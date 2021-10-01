<?php 
  header("Content-Type: text/html; charset=utf-8");
  require_once("connMysql.php");
  session_start();
  
  //執行更新動作
  $sql = "UPDATE subject SET 
  subject_id='".$_POST["new_subject_id"]."',
  subject_name='".$_POST["new_subject_name"]."',	
  subject_credit='".$_POST["new_subject_credit"]."'
  WHERE subject_id='".$_POST["id"]."'";
  mysqli_query($conn, $sql);
  //修改完成後重導回課程管理
  header("Location: subject_center.php");
?>