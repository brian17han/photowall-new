<?php session_start();
require_once('../../connector.ini.php');
require_once('../../Controller/Libs/constants.php');
require_once('../../Controller/Libs/PinYin.php');
function Find_My_Concern()
{
	if(isset($_POST["keyword"])&&$_POST["keyword"]!="")
	{
		$keyword=$_POST["keyword"];
		$keyword=iconv("UTF-8", "gb2312", $keyword);
		$keyword=Pinyin($keyword);
	//	$keyword=iconv("gb2312", "UTF-8", $keyword);
		$sql_concern="select concern.goal_id, user.nick_name, user.head_photo, user.province,user.city,user.introduction,
		      user.user_id, user.nick_name, user.login_name from concern, user where 
              concern.follower_id='".$_SESSION['user_id']."' and concern.goal_id=user.user_id and 
               user.chinese_pinyin LIKE '".$keyword."%'";
        $query=mysql_query($sql_concern);
        $count=mysql_num_rows($query);
        $result=array("concern_count"=>$count,"ResultSet"=>$query);
	//	echo $sql_concern;
        return $result;
	}
	
}
function Find_My_Fans()
{
	if(isset($_POST["keyword"])&&$_POST["keyword"]!="")
	{
		$keyword=$_POST["keyword"];
		$keyword=iconv("UTF-8", "gb2312", $keyword);
		$keyword=Pinyin($keyword);
	//	$keyword=iconv("gb2312", "UTF-8", $keyword);
		$sql_fans="select concern.follower_id, user.head_photo, user.province,user.city, user.introduction,
		      user.user_id, user.nick_name, user.login_name from concern, user where
              concern.goal_id='".$_SESSION['user_id']."' and concern.follower_id=user.user_id and 
               user.chinese_pinyin LIKE '".$keyword."%'";
        $query=mysql_query($sql_fans);
        $count=mysql_num_rows($query);
        $result=array("fans_count"=>$count,"ResultSet"=>$query);
        return $result;
	}
}
function Find_My_Friends()
{
	if(isset($_POST["keyword"])&&$_POST["keyword"]!="")
	{
	//	mysql_query("set names utf8");
		$keyword=$_POST["keyword"];
		$keyword=iconv("UTF-8", "gb2312", $keyword);
		$keyword=Pinyin($keyword);
		
		$sql_friend1="select friends.reviewer_id, user.head_photo, user.province,user.city,user.introduction,
		      user.user_id, user.nick_name, user.login_name from friends,user where
              friends.applicant_id='".$_SESSION['user_id']."' and friends.reviewer_id=user.user_id and 
               user.chinese_pinyin LIKE '".$keyword."%'";
        $sql_friend2="select friends.applicant_id, user.head_photo, user.province,user.city,user.introduction,
              user.user_id, user.nick_name, user.login_name from user,friends where
              friends.reviewer_id='".$_SESSION['user_id']."' and friends.applicant_id=user.user_id and 
               user.chinese_pinyin LIKE '".$keyword."%'";
        $sql=$sql_friend1." UNION ".$sql_friend2;
        $query1=mysql_query($sql_friend1);
        $query2=mysql_query($sql_friend2);
        $count=mysql_num_rows($query1)+mysql_num_rows($query2);
        $result=array("friends_count"=>$count,"ResultSet1"=>$query1,"ResultSet2"=>$query2);
      //  echo "this is:".$sql_friend2.",".$sql_friend1;
        return $result;
	}
	
}
function find_people()
{
	if(isset($_POST["keyword"])&&$_POST["keyword"]!="")
	{
		$keyword=mysql_escape_string($_POST["keyword"]);
		$keyword=Pinyin($keyword);
	//	$keyword=iconv("gb2312", "UTF-8", $keyword);
		$sql_search_people="select user_id, head_photo, login_name, nick_name from user where nick_name LIKE '".$keyword."%' or
		                    chinese_pinyin LIKE '%".$keyword."%' or login_name LIKE '".$keyword."%'";
		$query=mysql_query($sql_search_people);
		$result=array("people_count"=>mysql_num_rows($query),"ResultSet"=>$query);
		return $result;
	}
}
?>