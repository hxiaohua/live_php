<?php
require_once( "teamplate/head.php" );
?>
<blockquote>
  <p> 课程中心提示</p>
</blockquote>
<p class="lead">
  <?php if(isset($msg)) echo $msg;?>
</p>
<?php
require_once( "bottom.php" );
?>
