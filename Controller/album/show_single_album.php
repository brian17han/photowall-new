<?php session_start();
require_once('../../connector.ini.php');
require_once('../../Controller/Validation/validate_string.php');
$album_id=filter_string($_GET["album_id"]);
$album_name=filter_string(urldecode($_GET["album_name"]));
$sql="select photo_id, photo_name, photo_description, photo_path, album_id, created_at from photos where album_id=".$album_id;
$query_album=mysql_query($sql);
$photo_2d_array=array();
while($out=mysql_fetch_array($query_album))
{
	$temp=array("photo_name"=>$out["photo_name"],"photo_description"=>$out["photo_description"],
	            "photo_path"=>$out["photo_path"],"album_id"=>$out["album_id"],"created_at"=>$out["created_at"],
				"photo_id"=>$out["photo_id"]);
    array_push($photo_2d_array,$temp);
}
$smarty->assign("photo_2d_array",$photo_2d_array);
$smarty->assign("album_name",$album_name);
$smarty->display("album/opened_album.html");
?>