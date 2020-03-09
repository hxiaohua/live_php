<?php
$Title="退出登录";
require_once("teamplate/head.php");
//启用session检测用户登录状态
session_destroy();
echo "<h4>成功退出登录！</h4>";
//获取访问的URL页面
?>
<div class="alert alert-success" role="alert" id="div1">
</div> 
    <script type="text/javascript">  
    //设定倒数秒数  
    var t = 5;  
    //显示倒数秒数  
    function showTime(){  
        t -= 1;  
        document.getElementById('div1').innerHTML= t+"秒后跳转首页";  
        if(t==0){  
            location.href='index.php';  
        }  
        //每秒执行一次,showTime()  
        setTimeout("showTime()",1000);  
    }  
    //执行showTime()  
    showTime();  
    </script>
<?php
require_once("teamplate/bottom.php");
?>