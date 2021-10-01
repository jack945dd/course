<?php 
  header("Content-Type: text/html; charset=utf-8");
  require_once("connMysql.php");
  //確認課程名稱是否已被輸入
  $sql = "SELECT subject_name FROM subject WHERE subject_name='".$_POST["new_subject_name"]."'";
  $record = mysqli_query($conn, $sql);
  if(mysqli_num_rows($record)>0) {
    header("Location: subject_insert_form.php?registered=true&new_subject_name=".$_POST["new_subject_name"]);
  } else {
    //若此課程尚未輸入，則執行新增的動作
    $sql = "INSERT INTO subject (subject_id,subject_name, subject_credit) VALUES (
    '".$_POST["new_subject_id"]."',
	'".$_POST["new_subject_name"]."',
    '".$_POST["new_subject_credit"]."')";
    mysqli_query($conn, $sql);
  }
?>
<script language="javascript">
  alert("新科目加入成功。");
  window.location.href = "subject_center.php";
</script>
