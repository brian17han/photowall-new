<?php /* Smarty version Smarty-3.0.8, created on 2013-07-02 15:03:07
         compiled from "D:/xampp/htdocs/Local_Photowall/View\third_person_album/third_person_show_album.html" */ ?>
<?php /*%%SmartyHeaderCode:2680851d2ebabe85083-91744536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ca1ff3cf7753665ad2b53a81bc0f1748a8e745f' => 
    array (
      0 => 'D:/xampp/htdocs/Local_Photowall/View\\third_person_album/third_person_show_album.html',
      1 => 1372776970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2680851d2ebabe85083-91744536',
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
	</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Photowall-XX的照片墙（相册）</title>
<link rel="stylesheet" type="text/css" href="../../View/resources/css/follow.css">
</head>
<body>
<div class="wrapper">
    <div class="header">
        <!--nav bar starts-->
        <div id="nav_bar">
            <div class="banner" style="padding-top: 5px;;">
                <div id="banner_user_info row-fluid">
                    <div class="span5 bg-gray no-space" style="width:250px;padding-top: 6px !important;"><!--personal info-->
                        <div class="span2">
                            <div class="img-display-mid img-polaroid" onclick=''>
                                <a href="" class="no-link img-large" style="background-image: url(../../View/resources/img/photos/car.jpg);"></a>
                            </div>
                            <p></p>
                        </div>
                        <div class="span2" style="margin-top:5px;">
                            <h4 class="no-space"><span style="font-size:16px; color: black;">阿Y</span><span class="vip">&nbsp;VIP</span></h4>
                            <h6 class="no-space"><i class="icon-star"></i>&nbsp;关注&nbsp;&nbsp;188</h6>
                            <h6 class="no-space"><i class="icon-heart"></i>&nbsp;粉丝&nbsp;&nbsp;541</h6>
                            <h6 class="no-space"><i class="icon-user"></i>&nbsp;贴友&nbsp;&nbsp;88</h6>
                            <button type="button" class="btn btn-mini" style="margin-top: 5px;"><span class="text-error"><strong>&nbsp;&nbsp;+加关注&nbsp;</strong></span></button>
                        </div>
                    </div><!--personal info end -->
                </div>
                <img class="logo" src="../../View/resources/img/logo_login.png" style="padding-top: 20px;" width="270" height="108px" alt="photowall" longdesc="http://www.photowall.cc">
            </div>
            <ul id="nav">
                <li><a href="../home/home.php" style="width:20px;"><i class="icon-home"></i></a></li>
                <li><a href="#">我的墙</a>
                    <ul>
                        <li><a href="../album/show_album.php">展示墙</a>
                        </li>
                        <li><a href="#">贴友墙</a></li>
                    </ul>
                </li>
                <li><a href="../relation/profile_people.php?see_what=null">贴友薄</a>
                    <ul>
                        <li><a href="profile_people.php?see_what=friends">我的贴友</a></li>
                        <li><a href="profile_people.php?see_what=concerns">我的关注</a></li>
                        <li><a href="profile_people.php?see_what=fans">我的粉丝</a></li>
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
    <?php  $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('friends_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['index']->key => $_smarty_tpl->tpl_vars['index']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['index']->key;
?>
    <?php if ($_smarty_tpl->getVariable('friends_array')->value[$_smarty_tpl->tpl_vars['k']->value]['first_letter']!=$_smarty_tpl->getVariable('letter_storage')->value[$_smarty_tpl->tpl_vars['k']->value]){?> 
    <div class="list">
    	<div class="album-path"><h3>我的相册</h3></div>
    	<?php if ($_smarty_tpl->tpl_vars['k']->value!=0){?>
          <hr class="hr"/>
        <?php }?>
    	  <ul> 
    	  	 <li class="user_info">
                	<div class="profile_img_big" onclick="window.location='http://google.com' ">
                		<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
                          <!--</div><?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['item2']->value;?>
-->
                          <?php if ($_smarty_tpl->tpl_vars['key2']->value=='head_photo'){?>
                              <img src="<?php echo $_smarty_tpl->tpl_vars['item2']->value;?>
" height="117" width="151" />
                          <?php }?> 
                        <?php }} ?>
                    </div>
                    <p onclick="window.location='相册路径' "><?php echo $_smarty_tpl->getVariable('friends_array')->value[$_smarty_tpl->tpl_vars['k']->value]['nick_name'];?>
</p>
              </li>
       
    <?php }else{ ?>
             <li class="user_info">
                	<div class="profile_img_big" onclick="window.location='http://google.com' ">
                		<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
                          <!--</div><?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['item2']->value;?>
-->
                          <?php if ($_smarty_tpl->tpl_vars['key2']->value=='head_photo'){?>
                              <img src="<?php echo $_smarty_tpl->tpl_vars['item2']->value;?>
" height="117" width="151" />
                          <?php }?> 
                        <?php }} ?>
                    </div>
                    <p onclick="window.location='相册路径' "><?php echo $_smarty_tpl->getVariable('friends_array')->value[$_smarty_tpl->tpl_vars['k']->value]['nick_name'];?>
</p>
              </li>
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('friends_array')->value[$_smarty_tpl->tpl_vars['k']->value+1]['first_letter']!=$_smarty_tpl->getVariable('letter_storage')->value[$_smarty_tpl->tpl_vars['k']->value+1]){?> 
        </ul>
    </div>
    <?php }?>
    <?php }} ?>
	</div><!--main_content ends-->
    <div class="footer">
    	<div class="copyright">
        	<p>Copyright© 2012-2022 Photowall Inc, All Rights Reserved.</p>
            <p>照片墙 版权所有</p>
            <a href="http://www.tangerteq.com"><p>Powered by Tanger TEQ LLC.</p></a>
        </div>
    </div><!--footer ends-->
</div>
</body>
</html>