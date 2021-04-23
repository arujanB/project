<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		#oboy{
			/*background-image: url('https://www.elegantthemes.com/blog/wp-content/uploads/2020/01/000-WP-Rocket.png');*/
			background-repeat: no-repeat;
			background-size: cover;
			height: 830px;
			width:100%;
			position: absolute;
			/*border: none;*/
			background: linear-gradient(195deg, white, #343f56);
			}
		.buttons{
			padding: 5px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			margin-bottom: 15px;
			color: black;
			background: linear-gradient(195deg, #343f56, white);
			box-shadow: inset 5px 5px 5px grey;
            			/*inset -5px -5px 5px #292929;*/
			outline: none;
		}
	</style>
</head>
<body>
	
	<div>
		<div id="oboy">
			<img src="https://cdn3.iconfinder.com/data/icons/startup-and-new-business-10/60/startup__business__online__laptop__rocket-512.png" style="margin-bottom: -550px; margin-top: 100px;">
			<div style="width: 400px; height: 500px; background-color: white; border-radius: 20px; margin-left: 530px; margin-top: 60px; box-shadow: inset 5px 5px 5px grey, inset 5px 5px 5px grey;;">
				<div style="text-align: center;">
					<form method="post" action="test.php">
					<input type="hidden" name="state" id="indi">
					<h1 style="text-align: center; margin-bottom: 13px;">Sign up</h1>
					<div>FirstName:<input type="text" name="fist_name" class="buttons" placeholder="FirstName"></div>
					<p>LastName:<input type="text" name="last_name" class="buttons" ></p>
					<p>Gmail:  <input type="text" name="gmail" class="buttons"></p>
					<p>Password:<input type="Password" name="psw" class="buttons"></p>
					<p>Gender:  <input type="text" name="gender" class="buttons"></p>
					<p>Date of birth:<input type="Date" name="date_of_birth" class="buttons"></p>
					<!-- <button id="in" class="btn btn-outline-primary" onclick="add()"><a href="">Submit</a></button> -->
					<input type="Submit" name="submit" value="add" onclick="add()" class="btn btn-outline-primary">
					<a href="http://localhost:8888/project/public/project/en">Go back</a>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		function add(){
			document.getElementById("indi").value = "add";
		}
	</script>
</body>
</html>