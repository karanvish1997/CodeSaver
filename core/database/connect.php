<?php
$connect_error="Sorry internal problem...";
$conn="bowaa";
$link=mysql_connect('localhost','root','') or die($conn);
mysql_select_db('project') or die($connect_error);
//mysql_connect('mysql10.000webhost.com','a2433929_karan','karanrocks17') or die($conn);
?>

