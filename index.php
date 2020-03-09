<?php
$Title="直播首页";
require_once("teamplate/head.php");
?>
<blockquote>
  <p> 系统所有直播课程</p>
</blockquote>
<form class="form-inline">
  <div class="form-group">
    <label for="">搜索</label>
    <input type="text" class="form-control" name="key_word" placeholder="关键字">
  </div>
  <button type="submit" class="btn btn-default">搜索</button>
</form>
<?php
//展示所有的直播页面
require_once("lib/db_info.php");
//访问Mysql数据库
$conn=$GLOBALS['mysqli'];
//输出表格数据
$sql="SELECT * FROM `liveroom`";
$res = mysqli_query( $conn, $sql );
echo '<table width="80%" class="table table-striped">';
echo '<thead><tr class="toprow">';
echo '<th width="30">直播房间</th>';
echo '<th width="30">主播用户</th>';
echo '<th width="30">访问权限</th>';
echo '</tr></thead>';
while($row = mysqli_fetch_assoc($res))
{
	//var_dump($row);
	echo "<tr>
	<td><a href='live_view.php?id={$row['str']}'>{$row['name']}</a></td>
	<td>{$row['user']} </td>";
	if($row['pass']=='')
		echo "<td>开放进入</td></tr>";
	else
		echo "<td>凭密码进入</td></tr>";
}
echo '</table>';
mysqli_close($conn);
require_once("teamplate/bottom.php");
?>
