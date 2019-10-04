<?php
	require_once 'SQLConnect.php';
	$account = $_SESSION['account'];
	$sql = "select name from tjy0user where account='$account'";//代码
	$result = mysqli_query($con,$sql);//数据库样式的数据
	$row = mysqli_fetch_array($result);
	if($row[0]!=null){print_r ($row[0]);}else{echo '匿名用户';}
	

?>