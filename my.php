<?php
$Title="个人中心";
require_once("teamplate/head.php");
//检测用户是否登录
//var_dump($_SESSION);
if(!isset($_SESSION['user']))
	header("Location:login.php");
echo "<h4>欢迎您，{$_SESSION['user']}（<a href='logout.php'>退出</a>）</h4>"
?>
<p class="lead">
个人中心
</p>
<?php
require_once("teamplate/bottom.php");
?>