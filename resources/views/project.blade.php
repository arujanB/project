<!DOCTYPE html>
<html>
<head>
	<title>My Project</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		#h2{
			display: flex;
			justify-content: flex-start;
			list-style-type: none;
			border: 2px solid #2b2e4a;
		}
		#hb1, #hb2, #hb3, #hb4, #hb5{
			font-size: 18px;
			padding: 9px;
		}
		#buttons{
			display: flex;
			justify-content: flex-end;
			margin-top: -62px;
			margin-right: 15px;
		}
		#oboy{
			/*background-image: url('https://www.elegantthemes.com/blog/wp-content/uploads/2020/01/000-WP-Rocket.png');*/
			height: 400px;
			width:100%;
			margin-top: -16px;
			}
		#welcome{
			/*font-size: 40px;*/
			/*margin-left: 150px;
			margin-top: -700px;*/
		}
		#texts{
			margin-top: -300px;
			margin-left: 850px;
			margin-bottom: 130px;
		}
		#p{
			height: 500px;
			width: 500px;
			color: white;
			margin-left: 100px;
			margin-top: -590px;
		}
		#f1{
			width: 270px; 
			height: 200px; 
			margin-left: 1000px; 
			/*margin-top: -750px; */
			border-radius: 20px;
		}
		#f2{
			width: 270px; 
			height: 200px; 
			margin-left: 800px; 
			margin-top: -20px; 
			border-radius: 20px;
		}
		#f3{
			width: 270px; 
			height: 280px; 
			margin-left: 1100px; 
			margin-top: -30px; 
			border-radius: 20px;
		}
		.bg-modal{
			width: 100%;
			height: 100%;
			background-color: rgb(0, 0, 0, 0.7);
			position: absolute;
			top: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			display: none;
		}
		.modal-content{
			width: 500px;
			height: 300px;
			background-color: white;
			border-radius: 4px;
			align-items: center;
			/*padding: 10px;*/
			position: relative;
		}
		input{
			display: block;
			margin: 5px auto;
		}
		.close{
			position: absolute;
			top: 0;
			right: 14px;
			font-size: 42px;
			transform: rotate(45deg);
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div>
		<div>
			<ul id="h2">
				<li><img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Rkt_%28container_engine%29_logo.png" style="height: 20px; width: 60px; margin-top: 11px;"></li>
				<li id="hb1">{{__('lang.Home')}}</li>
				<li id="hb2">{{__('lang.About us')}}</li>
				<li id="hb3">{{__('lang.Direct')}}</li>
				<li id="hb4">{{__('lang.Information')}}</li>
				<!-- <li id="hb5">Sign up/Log in</li> -->
				
			</ul>
			<div id="buttons">
				<p style="margin-top: 7px; margin-right: 5px;"><a href="http://localhost:8888/project/public/project/ru" style="color: black; text-decoration: none;">{{__('lang.Rus')}}</a> </p>
				<p style="margin-top: 7px; margin-right: 5px;"><a href="http://localhost:8888/project/public/project/en" style="color: black; text-decoration: none;">{{__('lang.Eng')}}</a> </p>
				<p style="margin-top: 7px; margin-right: 5px;"><a href="http://localhost:8888/project/public/project/kz" style="color: black; text-decoration: none;">{{__('lang.Kz')}}</a> </p>
				<button class="btn btn-outline-primary" style="width: 70px; height: 30px; font-size: 15px; padding: 3px; margin-top: 5px;"><a href="http://localhost:8888/project/public/signup">{{__('lang.Sign up')}}</a> </button>
				<button class="btn btn-outline-primary" id="but" style="width: 60px; height: 30px; font-size: 15px; padding: 3px; margin-top: 5px; margin-left: 6px;">{{__('lang.Log in')}}</button>
			</div>
		</div>
		<div id="oboy">
			<div>
				<img src="https://img.freepik.com/free-vector/diverse-crowd-of-people-of-different-ages-and-races_74855-5235.jpg?size=626&ext=jpg&ga=GA1.2.855662366.1616976000" style=" margin-left: 150px; margin-top: 145px;">
				<div id="texts">
					<h1>{{__('lang.Hello! I`m ROCKET')}}</h1>
					<h4>{{__('lang.I am ready to help you:)')}}</h4>
				</div>
			</div>
			<div style="background-color: #383e56; height: 1000px;"></div>
			<div style="margin-top: -700px;">
				<img src="https://image.freepik.com/free-vector/rocket-laptop_23-2147504016.jpg" id="f1">
				<img src="https://image.freepik.com/free-photo/business-start-up-laptop-rocket_220701-14.jpg" id="f2">
				<img src="https://image.freepik.com/free-vector/laptop-with-business-elements-flat-design_1212-130.jpg" id="f3">
			</div>
			<div id="p"> <p><hr style="width: 100px;"><h3>{{__('lang.A public platform building the definitive collection of coding questions & answers')}}</h3>
			{{__('lang.A community-based space to find and contribute answers to technical challenges, and one of the most popular websites in the world.')}}
			<h3>{{__('lang.ROCKET for Teams is used by thousands of organizations around the globe')}}</h3></p></div>
		</div>
	</div>
	<div style="height: 200px; background-color:; margin-top: 1130px;">
		<div>
			<div style="display: flex; justify-content: center;"><h1>{{__('lang.You have a problem? You can send an Email:)')}}</h1></div>
			<div style="display: flex; justify-content: center; margin-bottom: 200px;"><a href="http://localhost:8888/project/public/mail/send" style=""><br><h1>{{__('lang.Click here!')}}</h1></a></div>
		</div>
		<div style="background-color: #383e56; width: 800px; height: 3px; margin-left: 300px; margin-bottom: 50px;"></div>
		<div style="text-align: center;">
			<span><a href="https://www.instagram.com/hellosignhq/?hl=ru"><img src="https://avatanplus.com/files/resources/original/5c4d6b0f52c0f1688e6a33eb.png" style="width: 50px; height: 50px;"></a></span>
			<span><a href="https://www.facebook.com/hellosignapp/"><img src="https://img.icons8.com/ios/452/facebook-f.png" style="width: 50px; height: 50px;"></a></span>
			<span><a href="https://twitter.com/hellosign"><img src="https://api.icons8.com/download/8fe8cc41b3fded816872efc1555b83abef20b412/iOS7/PNG/512/Social_Networks/twitter-512.png" style="width: 50px; height: 50px;"></a></span>
		</div>
		<br>
			<div id="eee">
				<address style="text-align: center; font-size: 10px;"><i><b><bdo dir="rtl">123</bdo></b> Main.ST <br><bdo>Beilgham,</bdo> <br> <strong>WA 14456</strong> </i></address>
			</div>
		<div class="bg-modal">
			<div class="modal-content">
				<div class="close">+</div>
				<img src="https://www.postman.com/assets/use-cases-by-type.svg" style="width: 150px; height: 150px;">
				<form style="margin-top: -20px;">
					<input type="text" name="" placeholder="Name">
					<input type="text" name="" placeholder="E-Mail">
					<input type="Password" name="" placeholder="Password">
					<a href="http://localhost:8888/project/public/uploadfile" class="btn btn-primary" style="border-radius: 20px;" id="login">Submit</a>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		document.getElementById('but').addEventListener('click', 
			function() {
				document.querySelector('.bg-modal').style.display = 'flex';
			});

		document.querySelector('.close').addEventListener('click',
			function(){
				document.querySelector('.bg-modal').style.display = 'none';
			});

		$("#hb4").click(function(){
			$('html, body').animate({
				scrollTop: $('#p').offset().top
			}, 1000);
		});

		$("#hb3").click(function(){
			$('html, body').animate({
				scrollTop: $('#eee').offset().top
			}, 1000);
		});
	</script>
</body>
</html>

<!-- <div>
			<img id="oboy" src="https://kiyavia.com/files/helps/Project-Rocket-Launch.jpg" >
			<div id="welcome"><h1>Hello! I`m ROCKET:)</h1></div>
		</div>
		<div> -->
			<!-- <div style="color: white;" id="texts">Share with your problems</div> -->
			<!-- <div style="height: 300px;">We can help, to solve your problems</div>
		</div>
		<div style=" margin-top: 340px;display: flex; justify-content: center;">
			<div style="background-color: red; height: 300px;"><img src="https://image.freepik.com/free-vector/business-concept-successful-project-startup-rocket-launch-laptop-background-flat-illustration_173706-102.jpg" style="width: 200px; height: 200px;"></div>
			<div style="background-color: blue; height: 300px;">Hello</div>
			<div style="background-color: green; height: 300px;">Hello</div>
		</div>
		<div style="border: 3px solid #2b2e4a; border-radius: 35px; height: 400px; margin-left: 30px; margin-right: 30px;">Go</div>
		<div style="height: 200px;"></div> -->