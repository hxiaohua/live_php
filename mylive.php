<?php
$Title="我的直播间";
require_once("teamplate/head.php");
if(!isset($_SESSION['user']))
{
	$msg="请先登录";
	require_once("teamplate/msg.php");
	die();
}
//获取一下直播间的名字
require_once("lib/db_info.php");
//访问Mysql数据库
$conn=$GLOBALS['mysqli'];
//输出表格数据
$user=$_SESSION['user'];
$sql="SELECT * FROM `liveroom` WHERE `user`='{$user}'";
$res = mysqli_query( $conn, $sql );
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
echo "<h3>{$row['name']}</h3>";
?>
<script type="text/javascript" src="bootstrap/clappr.js"></script>
<div id="player"></div>
  <script>
    var player = new Clappr.Player(
	{
		source: "http://<?php echo $_SERVER['HTTP_HOST'];?>/hls/hks/index.m3u8",
		parentId: "#player"
	});
</script>
<?php
require_once("teamplate/bottom.php");
?>