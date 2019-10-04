<meta charset="utf-8">
<?php
    require_once '../../sql/SQLConnect.php';

	$account = $_POST['account'];
	$password = $_POST['password'];
	$name = $_POST['name'];

	$sql = 'select account from tjy0user where account = "$_POST[account]"';
    if($result = mysqli_query($con,$sql)){    //执行SQL语句  
    $num = mysqli_num_rows($result); //统计执行结果影响的行数  
    }
    if($num)    //如果已经存在该用户  
    {
       header('skip.php?url=index.php&info=用户名已存在');
    }
    else
    {
        $res_insert = mysqli_query($con,"insert into tjy0user (account,password,name) values ('$account','$password','$name')");
        if($res_insert)
        {
            header('location: ../../index.php?url=include/skip.php&info=注册成功&title=正在跳转...&refreshTime=3');
        }
        else
        {
            echo "<script>alert('系统繁忙，请稍候！');</script>";  
        }
    }
?>