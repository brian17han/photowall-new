<?php /* Smarty version Smarty-3.0.8, created on 2013-07-02 15:33:44
         compiled from "D:/xampp/htdocs/Local_Photowall/View\home/search_result.html" */ ?>
<?php /*%%SmartyHeaderCode:912051d2f2d8e49259-71677483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ad7f285d30d0a0dbb751c9b6eac4ffa0940f667' => 
    array (
      0 => 'D:/xampp/htdocs/Local_Photowall/View\\home/search_result.html',
      1 => 1372779217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '912051d2f2d8e49259-71677483',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
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
	
	</script>
    <script><!--show hide buttons-->
    $(document).ready(function(show_hide) {
        $('.user_info').mouseenter(function() {$('.list_action',this).removeClass("hideV").addClass("showV")});
        $('.user_info').mouseleave(function() {$('.list_action',this).removeClass("showV").addClass("hideV")});
    });
    function resizeImg(img) {
        var h = img.height;
        var w = img.width;
        alert(h+"   "+w);
        if (h > w) {
            img.style.width = "140px";
        }
        else {
            img.style.height = "140px";
        }
        alert(h+"   "+w);
    }
    </script>
    <style type="text/css">
        figure {
            padding: 0;
            height: 140px;
            width:140px;
            overflow: hidden;
            float: left;
            margin: 0 1em 1em 0;
        }
    </style>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Photowall-搜索结果</title>
<link rel="stylesheet" type="text/css" href="../../View/resources/css/follow.css">
<script type="text/javascript" src="../../View/resources/js/search.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <!--nav bar starts-->
        <div id="nav_bar">
            <div class="banner">
                <div id="page_name"><p>搜索结果</p><br /><p>SEARCH RESULT</p></div>
                <img class="logo" src="../../View/resources/img/logo_login.png" width="270px" height="108px" alt="photowall" longdesc="http://www.photowall.cc">
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
                	<form action="search_result.php" method="post">
                    <div id="search-area">
                        <input name="keyword" type="text" size="30" class="search" id="keyword" placeholder="搜索-贴友/粉丝/关注" />
                        <div id="divResult">
                        </div>
                        <button type="submit" class="btn btn-nav right" value="submit"><i class="icon-search"></i></button>
                    </div>
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
    	<br/>
    	<ul>
            <!-- <li class="search_result_single row-fluid">
            <hr class="hr"/>
            <br/>
            <div class="line_holder"></div>
            <div class="span3 no-space">
                <div class="img-display img-polaroid" onclick=''>
                    <a href="" class="no-link img-large" style="background-image: url(../../View/resources/img/photos/car.jpg);"></a>
                </div>
                <p class="img-large"><i class="icon-map-marker"></i><a class="location" href="#">青岛，中国</a></p>
                <p></p>
            </div>
            <div class="span2 no-space">
                <h4 ><span style="font-size:16px; color: black;">阿Y</span><span class="vip">&nbsp;VIP</span></h4>
                <p></p>
                <h6><i class="icon-star"></i>&nbsp;关注&nbsp;&nbsp;188</h6>
                <h6><i class="icon-heart"></i>&nbsp;粉丝&nbsp;&nbsp;541</h6>
                <h6><i class="icon-user"></i>&nbsp;贴友&nbsp;&nbsp;88</h6>
                <button type="button" class="btn btn-small"><span class="text-error"><strong>&nbsp;&nbsp;+加关注&nbsp;</strong></span></button>
            </div>
            <div class="span4 offset1 text-left">
                <h5>兴趣标签：</h5>
                <p></p>
                <h6>篮球&nbsp;&nbsp;足球&nbsp;&nbsp;网球&nbsp;&nbsp;电影</h6><br/>
                <h5>个人简介：</h5>
                <p></p>
                <h6>巴塞罗那万岁！！</h6>
            </div>
        </li> -->
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['name'] = 'index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('Final_ResultSet')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total']);
?>
          <li class="search_result_single row-fluid">
                <hr class="hr"/>
                <br/>
                <div class="line_holder"></div>
                <div class="span3 no-space">
                    <div class="img-display-large img-polaroid" onclick=''>
                        <a href="" class="no-link img-large" style="background-image: url(<?php echo $_smarty_tpl->getVariable('Final_ResultSet')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['photo_path'];?>
);"></a>
                    </div>
                    <p class="img-large"><i class="icon-map-marker"></i><a class="location" href="#"><?php echo $_smarty_tpl->getVariable('Final_ResultSet')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['location'];?>
</a></p>
                    <p></p>
                </div>
                <div class="span2 no-space">
                    <h4 ><span style="font-size:16px; color: black;"><?php echo $_smarty_tpl->getVariable('Final_ResultSet')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['nick_name'];?>
</span><span class="vip">&nbsp;VIP</span></h4>
                    <p></p>
                    <h6><i class="icon-star"></i>&nbsp;关注&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('Final_ResultSet')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['concerns_count'];?>
</h6>
                    <h6><i class="icon-heart"></i>&nbsp;粉丝&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('Final_ResultSet')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['fans_count'];?>
</h6>
                    <h6><i class="icon-user"></i>&nbsp;贴友&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('Final_ResultSet')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['friends_count'];?>
</h6>
                    <button type="button" class="btn btn-small"><span class="text-error"><strong>&nbsp;&nbsp;+加关注&nbsp;</strong></span></button>
                </div>
                <div class="span4 offset1 text-left">
                    <h5>兴趣标签：</h5>
                    <p></p>
                    <h6>篮球&nbsp;&nbsp;足球&nbsp;&nbsp;网球&nbsp;&nbsp;电影</h6><br/>
                    <h5>个人简介：</h5>
                    <p></p>
                    <h6><?php echo $_smarty_tpl->getVariable('Final_ResultSet')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['introduction'];?>
</h6>
                </div>
            </li>
        <?php endfor; endif; ?>
            <!-- <li class="search_result_single row-fluid">
                <hr class="hr"/>
                <br/>
                <div class="line_holder"></div>
                <div class="span3 no-space">
                    <div class="img-display-large img-polaroid" onclick=''>
                        <a href="" class="no-link img-large" style="background-image: url(../../View/resources/img/photos/car.jpg);"></a>
                    </div>
                    <p class="img-large"><i class="icon-map-marker"></i><a class="location" href="#">青岛，中国</a></p>
                    <p></p>
                </div>
                <div class="span2 no-space">
                    <h4 ><span style="font-size:16px; color: black;">阿Y</span><span class="vip">&nbsp;VIP</span></h4>
                    <p></p>
                    <h6><i class="icon-star"></i>&nbsp;关注&nbsp;&nbsp;188</h6>
                    <h6><i class="icon-heart"></i>&nbsp;粉丝&nbsp;&nbsp;541</h6>
                    <h6><i class="icon-user"></i>&nbsp;贴友&nbsp;&nbsp;88</h6>
                    <button type="button" class="btn btn-small"><span class="text-error"><strong>&nbsp;&nbsp;+加关注&nbsp;</strong></span></button>
                </div>
                <div class="span4 offset1 text-left">
                    <h5>兴趣标签：</h5>
                    <p></p>
                    <h6>篮球&nbsp;&nbsp;足球&nbsp;&nbsp;网球&nbsp;&nbsp;电影</h6><br/>
                    <h5>个人简介：</h5>
                    <p></p>
                    <h6>巴塞罗那万岁！！</h6>
                </div>
            </li> -->
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