<?php //this function is to return each person's concern, fans and friends
function Get_Fans_Concerns_Friends($user_id)
{
	$sql_concern="select concern.goal_id, user.head_photo, user.user_id, user.nick_name, user.login_name from concern, user where 
              concern.follower_id='".$user_id."' and concern.goal_id=user.user_id";
	$sql_fans="select concern.follower_id, user.head_photo, user.user_id, user.nick_name, user.login_name from concern, user where
              concern.goal_id='".$user_id."' and concern.follower_id=user.user_id";
	$sql_friend1="select friends.reviewer_id, user.head_photo, user.user_id, user.nick_name, user.login_name from friends,user where
              friends.applicant_id='".$user_id."' and friends.reviewer_id=user.user_id";
    $sql_friend2="select friends.applicant_id, user.head_photo, user.user_id, user.nick_name, user.login_name from user,friends where
              friends.reviewer_id='".$user_id."' and friends.applicant_id=user.user_id";
	$concern_count=mysql_num_rows(mysql_query($sql_concern));
	$fans_count=mysql_num_rows(mysql_query($sql_fans));
	$friends_count=mysql_num_rows(mysql_query($sql_friend1))+mysql_num_rows(mysql_query($sql_friend2));
	$result=$concern_count.",".$fans_count.",".$friends_count;
	return explode(",", $result);
}
?>