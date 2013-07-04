<?php session_start();
require_once('../../connector.ini.php');
require_once('../../Controller/Validation/validate_string.php');
require_once('../../Controller/Libs/Get_Photo_Info.php');
$user_id=$_REQUEST["user_id"];
$album_id=$_REQUEST["album_id"];
$album_name=$_REQUEST["album_name"];

$arr=$arr=Get_Fans_Concerns_Friends();
$query_album=Get_Photos_By_Album_ID($album_id);
$photo_2d_array=array();
while($out=mysql_fetch_array($query_album))
{
	$temp=array("photo_name"=>$out["photo_name"],"photo_description"=>$out["photo_description"],
	            "photo_path"=>$out["photo_path"],"album_id"=>$out["album_id"],"created_at"=>$out["created_at"],
				"photo_id"=>$out["photo_id"]);
    array_push($photo_2d_array,$temp);
}
$smarty->assign("concerns_count",$arr[0]);
$smarty->assign("fans_count",$arr[1]);
$smarty->assign("friends_count",$arr[2]);
$smarty->assign("photo_2d_array",$photo_2d_array);
$smarty->assign("album_name",$album_name);
$smarty->display("third_person_album/third_person_opened_album.html");
?>