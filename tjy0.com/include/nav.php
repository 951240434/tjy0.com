<?php if(!isset($_SESSION['account'])){$_SESSION['account']='游客，请登录';}?>
	<div class="Nav">
		  <ul class="m0">
			<li class="col-sm-4"><a href="index.php" class="nav-Dromcross">Domecross</a></li>
			<li class="col-sm-1"><a class="Nav-commonElement <?php if(isset($_GET['title'])&&$_GET['title']=='用户注册'){echo 'nav-Exercise';}?>" href="index.php?url=v2content/v3account/register.php&title=用户注册">Register</a></li>
			<li class="col-sm-1"><a class="Nav-commonElement <?php if(isset($_GET['title'])&&$_GET['title']=='zhanweifu3'){echo'nav-Exercise';}?>" href="#">#</a></li>
			<li class="col-sm-1"><a class="Nav-commonElement <?php if(isset($_GET['title'])&&$_GET['title']=='zhanweifu3'){echo'nav-Exercise';}?>" href="#">#</a></li>
			<li class="col-sm-1"><a class="Nav-commonElement <?php if(isset($_GET['title'])&&$_GET['title']=='zhanweifu3'){echo'nav-Exercise';}?>" href="#">#</a></li>
			<li class="col-sm-offset-2">
				<a class="nav-Dromcross" 
					href="
						<?php
							if(isset($_SESSION['account'])){
								//header('location: ../../index.php?url=include/skip.php&info=账号或密码错误&title=正在跳转...&refreshTime=3&from=index.php?url=v2content/v3account/login.php&title=登  录');
								$_GET['url']='v2content\v3userImformation/userImformation.php';
								$_GET['title']='个人信息';
								//echo $_GET['from'];
							}
							else {
								$_GET['url']='v2content/v3account/login.php';
								$_GET['title']='登  录';
							}
						?>
					">
						<?php if(isset($_SESSION['account'])){echo('欢迎你，"'.$_SESSION['account'].'"');}else{echo '请登录';}?>
				</a>
			</li>
		  </ul>
	</div>