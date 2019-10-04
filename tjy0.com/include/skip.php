<?php
    if(!isset($_GET['url']) || !isset($_GET['info'])){
        exit();
    }
?>
<div class="welcome-text" style="position:relative;top:40%;transform:translate(-50%,-50%)">
	<div class="welcome-text-1"><?php echo $_GET['info'] ?></div>
	<div class="welcome-text-2"><?php echo '页面将在3秒后跳转' ?></div>
	<?php unset($_GET["url"])?>
</div>