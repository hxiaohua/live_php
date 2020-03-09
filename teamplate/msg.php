<?php
require_once("teamplate/head.php");
?>
<div class="alert alert-warning" role="alert">
<h3>
<?php if(isset($msg)) echo $msg;?>
</h3>
</div>
<?php
require_once("bottom.php");
?>