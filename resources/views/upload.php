<!DOCTYPE html>
<html>
<head>
	<title>Upload file and Signed up</title>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
	</style>
</head>
<body>
	<div style="background-color: #383e56; height: 2000px; display: flex; justify-content: space-between;">		
		<div style="width: 300px; background-color: white; border-radius: 8px;">
			
			<img src="https://cropas.by/wp-content/uploads/2015/05/admin.jpg" style="width: 300px; border-radius: 10px;">
			<table class="table table-hover" >
				<tr>
					<td id="scr" style="border-radius: 100px;"><a href="http://localhost:8888/project/public/youtube#" style="color: grey; text-decoration: none;">Problem</a></td>
				</tr>
				<tr>
					<td id="scr1">Activite</td>
				</tr>
				<tr>
					<td id="scr2">Progress</td>
				</tr>
				<tr>
					<td id="scr3">Attention</td>
				</tr>
				<tr>
					<td id="scr4"><a href="http://localhost:8888/project/public/project/en" style="color: grey; text-decoration: none;">Sign out</a></td>
				</tr>
				<tr>
					<td id="scr1"></td>
				</tr>
			</table>
		</div>
		<div style="background-color: white; margin-right: 130px; width: 850px;">
			<h1 style="text-align: center;">Hello!</h1>
			<?php
				echo Form::open(array('url'=>'/uploadfile', 'files' => 'true'));
				echo 'Select the file to upload.';
				echo Form::file('image');
				echo Form::submit('Upload File');
				echo Form::close();
			?>
			<canvas id="myChart" width="400" height="200"></canvas>
			<canvas id="myChart2" width="100" height="50"></canvas>
			<canvas id="myChart3" width="400" height="200"></canvas>
		</div>
		
	</div>
	<script type="text/javascript">
		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
			type: 'bar', 
			data: {
				labels: [ "2016", "2017", "2018", "2019", "2020"], 
				datasets: [
				{ label: 'Your progress', 
				data: [50, 80, 90, 12, 100],
				backgroundColor : [ 'rgba(255, 129, 102, 1)',
				'rgba(234, 162, 235, 1)', 
				'rgba(255, 206, 36, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)'],
			}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});

		//pie chart myChart2
		var ctx2 = document.getElementById("myChart2");
		var myChart2 = new Chart(ctx2, {
			type: 'pie',
			data: {
				labels:["Work hard", "enough", "Didn`t work"],
				datasets: [{
					label: 'Your attendend to your account',
					data: [10, 20, 30],
					backgroundColor :[
					'rgba(255, 129, 102, 1)', 
					'rgba(234, 162, 235, 1)',
					'rgba(255, 206, 36, 1)',],
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});

		//line chart myChart3
		var ctx3 = document.getElementById("myChart3");
		var myChart3 = new Chart(ctx3, {
			"type":"line",
			"data":{
				"labels":["9am", "10am", "11am", "12pm", "1pm", "2pm", "3pm", "4pm", "5pm", "6pm", "7pm", "8pm"],
				"datasets":[{"label":"Your activite", "data": [65, 59, 80, 81, 56, 55, 40, 33, 25, 12, 45, 95], 
				"fill": false, "borderColor": "rgb(75, 192, 192)", "lineTension": 0.1}]
			},
			"options": {}
		});

		$("#scr1").click(function(){
			$('html, body').animate({
				scrollTop: $('#myChart3').offset().top
			}, 1000);
		});

		$("#scr2").click(function(){
			$('html, body').animate({
				scrollTop: $('#myChart1').offset().top
			}, 1000);
		});

		$("#scr3").click(function(){
			$('html, body').animate({
				scrollTop: $('#myChart2').offset().top
			}, 500);
		});
	</script>
</body>
</html>