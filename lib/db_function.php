<?php
function check_login($username,$password){
		$mysqli=$GLOBALS['mysqli'];
		$password=md5($password);
		$sql="select * from user where `username`='{$username}' and `password`='{$password}';";
		//echo $sql;
		$obj = mysqli_query( $mysqli, $sql );
		$num = mysqli_affected_rows($mysqli);
		if ( $num >= 1 ) {
			$row = mysqli_fetch_assoc( $obj );
			return $row[ "username" ];
		}
		return false;
}
function Add_user($username,$password){
		$mysqli=$GLOBALS['mysqli'];
		$password=md5($password);
		$now_time=time();
		$now_time=date("Y-m-d",$now_time);
		$sql="INSERT INTO `user`(`username`, `password`, `time`) VALUES ('{$username}','{$password}','{$now_time}');";
		$obj = mysqli_query( $mysqli, $sql );
		if ($obj ) {
			return $username;
		}
		return false;
}

//查看特定用户的直播间
function find_liveroom($username){
		$mysqli=$GLOBALS['mysqli'];
		$sql="select * from liveroom where `user`='{$username}';";
		//echo $sql;
		$obj = mysqli_query( $mysqli, $sql );
		$num = mysqli_affected_rows($mysqli);
		if ( $num >= 1 ) {
			$row = mysqli_fetch_assoc( $obj );
			unset($Live);
			global $Live;
			$Live = new stdClass();	
			$Live->name=$row[ "name" ];
			$Live->str=$row[ "str" ];
			$Live->pass=$row[ "pass" ];
			//更新直播状态为在线
			return true;
		}
		return false;
}

function INSERT_liveroom($name,$user, $pass,$str){
		$mysqli=$GLOBALS['mysqli'];
		$now_time=time();
		$now_time=date("Y-m-d",$now_time);
		$sql="INSERT INTO `liveroom`(`name`, `state`, `time`, `user`, `pass`, `str`) VALUES ('{$name}','1','{$now_time}','{$user}','{$pass}','{$str}');";
		//echo $sql;die();
		$obj = mysqli_query($mysqli, $sql );
		if ($obj) {
			return true;
		}
		return false;
}
?>