
	<div class="col-sm-4 "></div>
	<div class="col-sm-4 ">
		<div style="padding: 50px 100px 10px;">
			<h1 align="center">注册账号</h1>
			<br/>
			<br/>
			<form action="v2content/v3account/registerHandle.php" class="bs-example bs-example-form" role="form" method="post">
				<div class="input-group">
					<span class="input-group-addon">账&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp号</span>
					<input type="text" name="account" class="form-control" placeholder="请输入账号，中文除外">
				</div>
				<font color="red" align="center"><p></p></font>
				<div class="input-group">
					<span class="input-group-addon">密&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp码</span>
					<input id="password" onkeydown="checknum()"  onkeyup="checknum()"  type="text" name="password" class="form-control" placeholder="密码由最少八位的字符组成">
				</div>
				<font color="red" align="center"><p id="password-in"></p></font>
				<div class="input-group">
					<span class="input-group-addon">确认密码</span>
					<input id = "password-confirm" type="text" name="password-confirm" class="form-control" placeholder="确认密码">
				</div>
				<font color="red" align="center"><p id="password-confirmin"></p></font>
				<div class="input-group">
					<span class="input-group-addon">姓&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp名</span>
					<input type="text" name="name" class="form-control" placeholder="请如实填写">
				</div>
				<font color="red" align="center"><p></p></font>
				<!--<div align="center">性别
					<div class="radio-inline">
						<label>
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>男
						</label>
					</div>
					<div class="radio-inline">
						<label>
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">女
						</label>
					</div>
				</div>-->
				<br>
				<font color="red" align="center"><p></p></font>
				<div align = "center">
					<input type="submit" class="btn btn-primary" name="submit" align="注册">
				</div>
			</form>
		</div>
	</div>
		<!--<script>
			function checknum(){
				var nMin = 8;
				var textDom =  document.getElementById("password");
				var len =textDom.value.length;    
				if(len<nMin && len!=0){
					document.getElementById("password-in").innerHTML="你至少还要输入"+(nMin-len)+"个字符";
					return;
				}else{
					document.getElementById("password-in").innerHTML="";
					return;
				}

			}
			checknum();
			function confirm(){
				var password = document.getElementById("password");
				var password-value = password.value;
				var password-confirm = document.getElementById("password-confirm");
				var password-confirm-value = password-confirm.value;
				alert("password-value");
				if(password-confirm-value==password-value){
					document.getElementById("password-confirmin").innerHTML="两次密码必须一致";
					return;
				}
			}
			confirm();
		</script>-->
	<div class="col-sm-4 "></div>

