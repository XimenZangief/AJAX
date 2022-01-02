<?php
//處理更新資料的請求
include_once "base.php";

$stu=$Stu->find($_POST['id']);
$stu['name']=$_POST['name'];
$stu['classroom']=$_POST['classroom'];
$stu['birthday']=$_POST['birthday'];
$stu['seat_num']=$_POST['seat_num'];

$Stu->save($stu);
?>