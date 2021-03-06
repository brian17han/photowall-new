<?php /* Smarty version Smarty-3.0.8, created on 2013-07-02 15:35:23
         compiled from "D:/xampp/htdocs/Local_Photowall/View\album/opened_album.html" */ ?>
<?php /*%%SmartyHeaderCode:700151d2f33b2226e0-44728938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab02882784f8b95181748b19ebecd13e5587c0a' => 
    array (
      0 => 'D:/xampp/htdocs/Local_Photowall/View\\album/opened_album.html',
      1 => 1372779244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '700151d2f33b2226e0-44728938',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="../../View/resources/js/validation.js"></script>
	<script src="../../View/resources/js/jquery.js"></script>
	<script type="text/javascript" src="../../Controller/resources/JQuery_Plugins/ajax_form/jquery.form.js"></script>
    <link rel="stylesheet" type="text/css" href="../../View/resources/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../View/resources/css/bootstrap-responsive.css">
    <script type="text/javascript" src="../../View/resources/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../View/resources/js/bootstrap-tab.js"></script>
	<script>
		$(document).ready(function(){
			$(":text").each(function(){
				$(this).val("");
			});
			$(":password").val("");
		});
		function open_album(photo_id,photo_path){
	    	 var photo_for_comment_display_obj=document.getElementById("photo_for_comment_display");
             photo_for_comment_display_obj.src=photo_path;
            //because the photo_name is unique, so we just get the photo_name to acquire the photo_id
             var photo_name_first_slash_index=photo_path.lastIndexOf("/");
             var photo_name=photo_path.substring(photo_name_first_slash_index+1);
             var photo_name_for_comment_obj=document.getElementById("photo_name_for_comment");
             photo_name_for_comment_obj.value=photo_name;
             //start to load all comments for this photo
             $.ajax({
                type: "POST",
                url: "../comment/load_all_comment.php",
                data: { photo_name:photo_name }
             }).done(function( msg ) {
                 $("#comment-box").html(msg);
             }); 
	    }
	    var comment_html="";
function comment_success(responseText, statusText)
{
    comment_html+=responseText;
     $("#comment-box").append(responseText);
}
function send_comment()
{
    var photo_name=document.getElementById("photo_name_for_comment").value;
    $("#photo_comment_form").ajaxForm({
        data:{photo_name:photo_name},
       // target: '#comment-box',
        success:comment_success
    }).submit();
}
	</script>
    <script><!--show hide buttons-->
    $(document).ready(function(show_hide) {
        $('.user_info').mouseenter(function() {$('.list_action',this).removeClass("hideV").addClass("showV")});
        $('.user_info').mouseleave(function() {$('.list_action',this).removeClass("showV").addClass("hideV")});
    });
    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Photowall-我的展示墙</title>
<link rel="stylesheet" type="text/css" href="../../View/resources/css/follow.css">
</head>
<body>
<div class="wrapper">
    <div class="header">
        <!--nav bar starts-->
        <div id="nav_bar">
            <div class="banner">
                <div id="page_name"><p>我的展示墙</p><br /><p>SHOW WALL</p></div>
                <img class="logo" src="../../View/resources/img/logo_login.png" width="270px" height="108px" alt="photowall" longdesc="http://www.photowall.cc">
            </div>
            <ul id="nav">
                <li><a href="../home/home.php" style="width:20px;"><i class="icon-home"></i></a></li>
                <li class="current"><a href="#">我的墙</a>
                    <ul>
                        <li><a href="../album/show_album.php">展示墙</a>
                        </li>
                        <li><a href="#">贴友墙</a></li>
                    </ul>
                </li>
                <li><a href="../relation/profile_people.php?see_what=null">贴友薄</a>
                    <ul>
                        <li><a href="../relation/profile_people.php?see_what=friends">我的贴友</a></li>
                        <li><a href="../relation/profile_people.php?see_what=concerns">我的关注</a></li>
                        <li><a href="../relation/profile_people.php?see_what=fans">我的粉丝</a></li>
                    </ul>
                </li>
                <li><a href="#">个人资料</a>
                    <ul>
                        <li><a href="../profile/profile_form.php">详细资料</a></li>
                        <li><a href="#">个人头像</a></li>
                    </ul>
                </li>
                <li><a href="#">设置中心</a>
                    <ul>
                        <li><a href="#">账号</a></li>
                        <li><a href="#">安全</a></li>
                        <li><a href="#">隐私</a></li>
                        <li><a href="#">绑定</a></li>
                    </ul>
                </li>
                <li style="width:250px; height:34px;">
                    <form method="get" action="/search" id="search">
                        <input name="q" type="text" size="30" placeholder="搜索-贴友/粉丝/关注" />
                        <button type="submit" class="btn btn-nav" value="submit"><i class="icon-search"></i></button>
                    </form>
                </li>
                <li class="current">
                    <a href="http://www.photowall.cc" style="width:15px; margin-left:30px;"><i class="icon-camera icon-white"></i></a>
                </li>
            </ul>
        </div>
        <!--nav bar ends-->
    </div>
    <div class="main_content">
    <div class="list">
    	<div class="album-path"><h3>我的相册 <i class="icon-arrow-right"></i><?php echo $_smarty_tpl->getVariable('album_name')->value;?>
</h3></div>
        <button type="button" class="btn"><i class="icon-upload"></i> <span class="text-error">上传照片</span></button>
        <button type="button" class="btn"><i class="icon-plus"></i> <span class="text-error">新建相册</span></button>
        <br/>
        <hr class="hr"/>
    	<ul>
            <li class="user_info">
                <div class="img-large">
                    <a href="#myModal" class="no-link" data-toggle="modal">
                        <img onclick="see_single_photo(this);" src="../../View/resources/img/photos/car.jpg" class="img-polaroid img-large"/>
                    </a>
                </div>
                <p onclick="window.location='http://google.com' ">照片名</p>
                <div class="list_action hideV">
                    <div class="list_action_button" onclick=" ">
                        <p>重命名</p>
                    </div>
                    <div class="list_action_button" onclick="" >
                        <p>删除</p>
                    </div>
                </div>
            </li>
            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['name'] = 'photo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('photo_2d_array')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total']);
?>
            <li class="user_info">
               <div class="img-display-large img-polaroid" onclick='open_album("<?php echo $_smarty_tpl->getVariable('photo_2d_array')->value[$_smarty_tpl->getVariable('smarty')->value['section']['photo']['index']]['photo_id'];?>
","<?php echo $_smarty_tpl->getVariable('photo_2d_array')->value[$_smarty_tpl->getVariable('smarty')->value['section']['photo']['index']]['photo_path'];?>
")'>
                    <a href="#myModal" class="no-link img-large" data-toggle="modal" style="background-image: url(<?php echo $_smarty_tpl->getVariable('photo_2d_array')->value[$_smarty_tpl->getVariable('smarty')->value['section']['photo']['index']]['photo_path'];?>
);">
                       <!--  <img  src="<?php echo $_smarty_tpl->getVariable('photo_2d_array')->value[$_smarty_tpl->getVariable('smarty')->value['section']['photo']['index']]['photo_path'];?>
" class="img-polaroid img-large"/> -->
                    </a>
                </div>
                <p onclick="window.location='http://google.com' ">照片名</p>
                <div class="list_action hideV">
                    <div class="list_action_button" onclick="">
                        <p>重命名</p>
                    </div>
                    <div class="list_action_button" onclick="" >
                        <p>删除</p>
                    </div>
                </div>
              </li>
             <?php endfor; endif; ?>
       </ul>
    </div>
	</div><!--main_content ends-->
    <div class="footer">
    	<div class="copyright">
        	<p>Copyright© 2012-2022 Photowall Inc, All Rights Reserved.</p>
            <p>照片墙 版权所有</p>
            <a href="http://www.tangerteq.com"><p>Powered by Tanger TEQ LLC.</p></a>
        </div>
    </div><!--footer ends-->
</div>
<div id="myModal" class="modal hide fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="cancel_upload();">×</button>
        <h4 id="myModalLabel">冰天雪地 (3/15)</h4>
    </div>
    <div class="modal-body photo-popup">
        <div class="row-fluid">
            <div class="span12 img-box">
                <img id="photo_for_comment_display" class="img-polaroid img-orig" width="600" src="../../View/resources/img/photos/snow-covered-trees.jpg" />
                <p></p>
                <p class="no-space">郊外美丽的雪景，一片银白</p>
                <hr />
            </div>
        </div>
        <div class="row-fluid">
            <div class="span8">
                <form class="form-inline" id="photo_comment_form" action="../comment/add_photo_comment.php" method="post">
                    <input type="text" style="width:290px;" placeholder="评论此照片" id="comment" name="comment">
                    <input type="hidden" id="photo_name_for_comment" name="photo_name_for_comment" value="" />
                    <label><sub class="muted">还可输入<span id="replyInputLimiter"></span>字</sub></label>
                    <button type="button" class="btn btn-small" onclick="send_comment()">发表</button>
                </form>
                <div class="row-fluid" id="comment-box">
                    <div class="row-fluid"><!--single comment starts-->
                        <div class="span1">
                            <img class="img-small" src="../../View/resources/img/follower/profile_img_test1.png" alt="id-3223-profile-img" >
                        </div>
                        <div class="span10">
                            <p><a class="user-name" href="#">阿Y</a> 回复<a class="user-name" href="#">ANGLED1</a>: 哈哈，是啊，景色确实很好啊！</p>
                            <p class="muted"><sub>2013-3-29 22:20</sub></p>
                            <hr class="no-space"/>
                        </div>
                        <div class="span1">
                            <a href="#"><p>回复</p></a>
                        </div>
                    </div><!--single comment ends-->
                    <div class="row-fluid"><!--single comment starts-->
                        <div class="span1">
                            <img class="img-small" src="../../View/resources/img/follower/profile_img_test1.png" alt="id-3223-profile-img" >
                        </div>
                        <div class="span10">
                            <p><a class="user-name" href="#">ANGLED1</a>: 下雪了啊 很漂亮啊。这是在哪里？是在你那边吗？过一阵我过去还能看得到么？</p>
                            <p class="muted"><sub>2013-3-22 14:20</sub></p>
                            <hr class="no-space"/>
                        </div>
                        <div class="span1">
                            <a href="#"><p>回复</p></a>
                        </div>
                    </div><!--single comment ends-->
                    <div class="row-fluid"><!--single comment starts-->
                        <div class="span1">
                            <img class="img-small" src="../../View/resources/img/follower/profile_img_test1.png" alt="id-3223-profile-img" >
                        </div>
                        <div class="span10">
                            <p><a class="user-name" href="#">刘嘉阳</a>: 这是哪里啊？这个季节还有雪。</p>
                            <p class="muted"><sub>2013-3-21 05:10</sub></p>
                            <hr class="no-space"/>
                        </div>
                        <div class="span1">
                            <a href="#"><p>回复</p></a>
                        </div>
                    </div><!--single comment ends-->
                </div>
            </div>
            <div class="span4" id="img-preview">
                <div class="row-fluid"><a class="offset11 no-space" id="load-pre-imgs" href="#"><i class="icon-chevron-up"></i></a></div>
                <div class="row-fluid photo-preview-row">
                    <div class="span4" id="preview-img1"><img src="../../View/resources/img/photos/thumbnails/beauty_thumbnails.jpg" /></div>
                    <div class="span4" id="preview-img2"><img src="../../View/resources/img/photos/thumbnails/bird_thumbnails.jpg" /></div>
                    <div class="span4" id="preview-img3"><img src="../../View/resources/img/photos/thumbnails/car_thumbnails.jpg" /></div>
                </div>
                <div class="row-fluid photo-preview-row">
                    <div class="span4" id="preview-img4"><img src="../../View/resources/img/photos/thumbnails/child_thumbnails.jpg" /></div>
                    <div class="span4" id="preview-img5"><img src="../../View/resources/img/photos/thumbnails/disney_thumbnails.jpg" /></div>
                    <div class="span4" id="preview-img6"><img src="../../View/resources/img/photos/thumbnails/flower_thumbnails.jpg" /></div>
                </div>
                <div class="row-fluid photo-preview-row">
                    <div class="span4" id="preview-img7"><img src="../../View/resources/img/photos/thumbnails/horse_thumbnails.jpg" /></div>
                    <div class="span4" id="preview-img8"><img src="../../View/resources/img/photos/thumbnails/lake_thumbnails.jpg" /></div>
                    <div class="span4" id="preview-img9"><img src="../../View/resources/img/photos/thumbnails/plane_thumbnails.jpg" /></div>
                </div>
                <div class="row-fluid"><a class="offset11 no-space" id="load-next-imgs" href="#"><i class="icon-chevron-down"></i></a></div>
            </div>
        </div>
    </div>
</div>

</body>
</html>