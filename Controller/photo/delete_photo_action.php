<?php session_start();
$file=$_POST["photo_path"];
$path = "../Project_Images/temp_uploaded_photos/".$file;
$path=iconv("UTF-8", "gb2312", $path);
echo $path;
@unlink($path);
?>