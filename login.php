<?php

$Title = "登录/注册";
require_once( "teamplate/head.php" );
//检测用户是否登录
if ( !isset( $_SESSION[ 'user' ] ) )
  require_once( "teamplate/login_form.html" );
if ( isset( $_POST[ 'login' ] ) ) {
  //执行用户注册功能
  $username = $_POST[ 'username' ];
  $password = $_POST[ 'password' ];
  $username = trim( $username );
  $password = trim( $password );
  //var_dump($_POST);
  require_once( "lib/db_info.php" );
  require_once( "lib/db_function.php" );
  $username = Add_user( $username, $password );
  if ( $username ) {
    $_SESSION[ 'user' ] = $username;
    header( "Location:index.php" );
  } else {
    $err_msg = "注册失败，请重试！";
  }
} else if ( isset( $_POST[ 'sign' ] ) ) {
  //执行用户登录
  $username = $_POST[ 'username' ];
  $password = $_POST[ 'password' ];
  $username = trim( $username );
  $password = trim( $password );
  //var_dump($_POST);
  require_once( "lib/db_info.php" );
  require_once( "lib/db_function.php" );
  $username = check_login( $username, $password );
  if ( $username ) {
    $_SESSION[ 'user' ] = $username;
    header( "Location:index.php" );
  } else {
    $err_msg = "登录失败，请重试！";
  }
}
if ( isset( $err_msg ) )
	echo "<div class='alert alert-warning' role='alert'>{$err_msg}</div>";
require_once( "teamplate/bottom.php" );
?>