<?php
	session_start();
    if(!isset($_GET['url'])||$_GET['url']=='index.php'||$_GET['url']=='v2content\v3userImformation/userImformation.php'){
        $_GET['url']='home/home.php';
    }
    if(!isset($_GET['title'])){
    	$_GET['title']='Domecross';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo($_GET['title'])?></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta 
		http-equiv="refresh" 
		content="<?php if(isset($_GET["refreshTime"])){echo $_GET["refreshTime"];} ?>,
		URL=<?php if(isset($_GET["from"])){echo $_GET["from"];}else{echo 'index.php';} ?>"/>
		<?php //if(isset($_GET["from"])){echo $_GET["from"];}?>
	<meta name="baidu-site-verification" content="HPxRUosthX" />
	<!-- 自定义 -->
	<link rel="stylesheet" href="styles/nav.css">
	<link rel="stylesheet" href="styles/navMain.css">
	<link rel="stylesheet" href="styles/bodyMain.css">
	<link rel="stylesheet" href="styles/base.css">
	<!-- bootstrap -->
    <link href="styles/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #393e44;">
	<?php include 'include/nav.php';?>
	<?php include $_GET["url"];?>
</body>
</html>