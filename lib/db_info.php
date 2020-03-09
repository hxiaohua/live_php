<?php
ini_set( "display_errors", "On" );
//全局变量数据库
global $mysqli;
#连接数据库
$db_host="localhost";
$db_pass="";//修改为实际的数据库密码
$db_user="root";
$db_name="zhibo";//数据库名字，根据自己需要进行修改

$conn = mysqli_connect( $db_host,$db_user, $db_pass );
#判断是否连接成功
if ( !$conn ) {
	echo "数据库连接失败，请检查！";
	die();
}
mysqli_query($conn,"SET NAMES utf8");
//选择数据库
mysqli_select_db( $conn, $db_name);
$GLOBALS['mysqli']=$conn;
?>
