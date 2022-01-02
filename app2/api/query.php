<?php
//處理查詢資料的請求
include_once "base.php";

$q=$_GET['q'];
// %$q%表示$q是模糊查詢，$q左右皆可用有其他字串
// $q=台北，%$q=XXX台北，$q%=台北XXX，%$q%=XXX台北XXX
$rows=$Stu->q("SELECT * from `students` where `name` like '%$q%'");
echo json_encode($rows);
?>