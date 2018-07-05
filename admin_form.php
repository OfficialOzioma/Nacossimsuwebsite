<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta charset="utf-8">
		
		<title>Registeration form</title>
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="ad_form.css">
		
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<style>
		@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro');
		</style>
		
		
	</head> 
	<body>
		<div class="container">
			
			<div class="title">
				<h3>Admin Registeration form</h3>
			</div>	
			<div class="contain">
					<form  class="" enctype="multipart/form-data"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
							<div class="content">
								<div class="form-group">
									<label>USERNAME</label>
									<input class="form-control" type="text" name="urname" value="" id="txtuser" placeholder="Username" required="yes">
									<span id="c1" class="glyphicon glyphicon-user"></span>
								</div>
								<div class="form-group">
									<label>EMAIL</label>
									<input class="form-control" type="text" name="email" value="" id="txtemail" placeholder="Email address" required="yes">
									<span id="c2" class="glyphicon glyphicon-envelope"></span>
								</div>

								<div class="form-group">
									<label>PASSWORD</label>
									<input class="form-control" type="password" name="password" value="" id="txtpass" placeholder="Password" required="yes">
									<span id="c3" class="glyphicon glyphicon-lock"></span>
								</div>

								<div class="form-group">
									<label>CONFIRM PASSWORD</label>
									<input class="form-control" type="password" name="password_1" value="" id="txtcpass" placeholder="Confirm password" required="yes">
									<span id="c4" class="glyphicon glyphicon-lock"></span>
								</div>

								<div class="form-group">
									<input class="btn btn-primary" type="submit" name="register" value="click to submit" id="btnsub">
								</div>

							</div>
					</form>
					<script>
						$(document).ready(function(){
								var icon="";
								var txt1="#txtuser";
								var txt2="#txtemail";
								var txt3="#txtpass";
								var txt4="#txtcpass";

								$("input").focus(function(){
									var id = document.activeElement.id;
									if(id == "txtuser"){
										$("#c1").css("color","green");
										icon = "#c1";
									}
									if(id == "txtemail"){
										$("#c2").css("color","green");
										icon = "#c2";
									}
									if(id == "txtpass"){
										$("#c3").css("color","green");
										icon = "#c3";
									}
									if(id == "txtcpass"){
										$("#c4").css("color","green");
										icon = "#c4";
									}

								});

								$("input").blur(function(){
									$(icon).css("color","#b2b2b2");

									if($txt1.val() != ""){
										$("#c1").css("color","green");
										
									}
									if($txt2.val() != ""){
										$("#c2").css("color","green");
									}
									if($txt3.val() != ""){
										$("#c3").css("color","green");
									}
									if($txt4.val() != ""){
										$("#c4").css("color","green");
									}
								});

						});

					</script>
				</div>
		</div>
	</body>
</html>