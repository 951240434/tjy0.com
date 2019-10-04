	<div class="welcome-text">
		<div class="welcome-text-control">
			<p class="welcome-text-1">欢迎访问</p>
			<p class="welcome-text-2">
				<?php 
					if(isset($_SESSION['account'])){echo '欢迎你，';include 'sql/SQLSearchName.php';}else{echo '请点击右上角登录';}?>
			</p>
		</div><!--统一控制内部的两行字-->
	</div>
	<div id='circle-block'>
		<img src="images/circle/index-portal-yellow-semi-0f75649305b8323148a06cdc4edc7f76.svg" id="circle1">
		<img src="images/circle/index-portal-green-semi-3b8dd40b983c2aa9e344f01f61114d87.svg" id="circle2">
		<img src="images/circle/index-portal-blue-semi-0180b3c94b6e5ac9104d8ab7f9c2f937.svg" id="circle3">
		<img src="images/circle/index-portal-blue-7ae3dab5c6f591256b6351f85f5d867c.svg" id="circle4">
		<img src="images/circle/index-portal-green-dc0a6ac12f7199644119b28708bd3730.svg" id="circle1">
		<img src="images/circle/index-portal-yellow-f9e8ce5212004588b84a6d947569afe4.svg" id="circle2">
		<img src="images/circle/index-portal-orange-c0d3d6641b744a92b63f2ba243f0e470.svg" id="circle3">
		<img src="images/circle/index-portal-orange-semi-acb82611cc3a9365076f21f8e63f19ed.svg" id="circle4">
		<img src="images/circle/index-portal-red-6d2cefcab56d4530cf892d531839346a.svg" id="circle1">
		<img src="images/circle/index-portal-red-semi-da1f1ae5bee20b0d72fd8852c2de4dad.svg" id="circle2">
		<img src="images/vexento.png" id="vexento">
	</div>
<div id="bottom">
	<p id="welcome-text-3">网站处于建设状态，大部分功能尚未完善</p>
	<p id="welcome-text-4">持续更新中...</p>
</div>
