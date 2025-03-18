<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>

	<title>d.m login account | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
</style>
<body>
     

<div>
	<?php
	
	?>
	<div class="d1">
		<label id="logo"><img src="Dadu Money Envestiment"></label>
		<ul id="ul1">
			<li><a href="home.html" >home</a></li>
			<li><a href="NEWZ.html" id="center">newz</a></li>
		</ul>
		<ul id="ul2">
			<li><a href="login.html">login</a></li>
			<li><a href="registrastion.php">signup</a></li>
		</ul>
	</div>
	<form action="login.php" method="post">
		<div class="container">
			
		   <div class="row">
	<hr class="mb-3">
		<br>
		<h2> LOGIN
		</h2>
		            <label for="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>

					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
					<input class="btn btn-primary" type="submit" id="register" name="create" value="login">
				</div>
			</div>
	</form>
	<div class="footer">
		<div class="ftr1">
			<h3>about us.</h3>
			<ul>
				<li>wilsonjumbejunior@hotmail.com</li>
				<li></li>
				<li></li>
			</ul>
		</div>
		<div class="ftr2">
			<h3>contact US.</h3>
			<ul>
				<li>+255791</li>
				<li>Wilsonjumbejunior@hotmail.COM</li>
				<li></li>
			</ul>
		</div>
		<div class="ftr3">
			<h3>feed back.</h3>
			<form>
				<input type="email" name="email" placeholder="email"><br>
				<input type="contact" name="contact" placeholder="255"><br>
				<textarea name="text" placeholder="text"></textarea><br>
				<button name="submite">submite</button>
			</form>
		</div>
	</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>

</body>
</html>