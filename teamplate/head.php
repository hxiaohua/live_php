<?php
ini_set( "display_errors", "On" );
session_start();
//启用session检测用户登录状态
$url = basename( $_SERVER[ 'REQUEST_URI' ] );
//获取访问的URL页面
if ( isset( $_SESSION[ 'user' ] ) ) {
  $user_url = "my.php";
  $user_tit = "个人中心";
} else {
  $user_url = "login.php";
  $user_tit = "登录/注册";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $Title;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<script src="bootstrap/jquery.min.js"></script> 
<script src="bootstrap/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="alert alert-info" role="alert"> Moodle课程直播中心 </div>
<ul class="nav nav-pills">
  <li role="presentation" class="<?php if($url=="index.php") echo "active";?>"><a href="index.php">直播间</a></li>
  <li role="presentation" class="<?php if($url=="asklive.php") echo "active";?>"><a href="asklive.php">申请直播</a></li>
  <li role="presentation" class="<?php if($url=="mylive.php") echo "active";?>"><a href="mylive.php">我的直播</a></li>
  <li role="presentation" class="<?php if($url=="{$user_url}") echo "active";?>"><a href="<?php echo $user_url;?>"><?php echo $user_tit;?></a></li>
</ul>
