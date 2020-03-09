<?php
$Title="直播观看";
require_once("teamplate/head.php");
if(isset($_GET['id']))
{
	$live_str=$_GET['id'];
}
else 
{
	$msg="参数错误，请重试";
	require_once("teamplate/msg.php");
	die();
}
//获取一下直播间的名字
require_once("lib/db_info.php");
//访问Mysql数据库
$conn=$GLOBALS['mysqli'];
//输出表格数据
$sql="SELECT * FROM `liveroom` where `str`='{$live_str}'";
$res = mysqli_query( $conn, $sql );
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
echo "<h3>{$row['name']}</h3>";
?>
<script type="text/javascript" src="bootstrap/clappr.js"></script>
<div id="player"></div>
  <script>
    var player = new Clappr.Player(
	{source: "<?php echo "http://{$_SERVER['HTTP_HOST']}/hls/$live_str";?>/index.m3u8", 
	parentId: "#player"
	});
</script>
<?php
require_once("teamplate/bottom.php");
?>
