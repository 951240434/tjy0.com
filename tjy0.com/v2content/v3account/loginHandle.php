<meta charset="utf-8">
<?php
	session_start();
    require_once '../../sql/SQLConnect.php';
	$account = $_POST['account'];
	$password = $_POST['password'];
	$sql1 = "select verification from tjy0user where account = '$account'";//代码
	$result1 = mysqli_query($con,$sql1);//数据库样式的数据
	$row1 = mysqli_fetch_row($result1);
	if($row1[0]!=0){
		$sql = "select * from tjy0user where account='$account' and password='$password'";//代码
		$result = mysqli_query($con,$sql);//数据库样式的数据
		if(mysqli_num_rows($result)){
			$_SESSION['account']=$_POST['account'];
			$_SESSION['password']=$_POST['password'];
			header('location: ../../index.php?url=include/skip.php&info=登录成功&title=正在跳转...&refreshTime=3');
		}else{
			header('location: ../../index.php?url=include/skip.php&info=账号或密码错误&title=正在跳转...&refreshTime=3&from=index.php?url=v2content/v3account/login.php&title=登  录');
		}
	}else{
		header('location: ../../index.php?url=include/skip.php&info=账号或密码错误&title=正在跳转...&refreshTime=3&from=index.php?url=v2content/v3account/login.php&title=登  录');
	}
?>