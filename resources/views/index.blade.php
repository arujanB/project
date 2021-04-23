<!DOCTYPE html>
<html>
<head>
	<title>Second page</title>
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
			<table class="table table-hover">
				<tr>
					<td id="scr"><a href="http://localhost:8888/project/public/youtube#" style="color: grey">Problem</a></td>
				</tr>
				<tr>
					<td id="scr1"><a href="http://localhost:8888/project/public/uploadfile" style="color: grey; text-decoration: none;">Main page</a></td>
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
			<div style="margin-left: 60px; margin-bottom: 30px; margin-top: 20px;">
			<?php
				echo Form::open(array('url'=>'/uploadfile', 'files' => 'true'));
				echo 'Select the file to upload.';
				echo Form::file('image');
				echo Form::submit('Upload File');
				echo Form::close();
			?> 
			</div>
			<div style="margin-left: 60px; margin-top: 10px;">
				<h1 style="text-align: center; margin-bottom: 10px;">White your problem</h1>
				<div style="display: flex;">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgIP1KkP4ZrmdF26YRCuklc_q96MH-36vU64SMKhD0WfGzsL8ZtfqQ104Uck3bjqEseGE&usqp=CAU" style="border-radius: 100%; width: 50px; height: 50px;">
					<h5 style="margin:10px; margin-bottom: 30px;">Hellen Jim</h5>
				</div>
				<div style="background-color: lightgrey; margin-left: -60px;">
					<p style="padding-left: 60px;">Hello! Who can help we solve this problem?) When i migrated, it turns out like this: <br>Illuminate\Database\QueryException  : SQLSTATE[HY000]: General error: 1215 Cannot add foreign key constraint (SQL: alter table `item_details` add constraint `item_details_item_id_foreign` foreign key (`item_id`) references `items` (`id`))</p>
				</div>
				
				<div class="row">
					<div class="col-lg-6">
						<form method="POST" action="route('status.post')">
							@csrf
							<div class="form-group">
								<textarea name='status' class="form-control" placeholder="What`s your problem?)" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Post</button>
						</form>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6">
					</div>
				</div>

				<div style="display: flex; margin-top: 30px;">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_G7lJ8A7PXgzCipKG20tOrVH0YTKdGRKciQ&usqp=CAU" style="border-radius: 100%; width: 50px; height: 50px;">
					<h5 style="margin:10px; margin-bottom: 30px;">Gorgin Bolman</h5>
				</div>
				<div style="background-color: lightgrey; margin-left: -60px;">
					<p style="padding-left: 60px;">Hello! When i migrated, it turns out like this: <br>Illuminate\Database\QueryException  : SQLSTATE[42S01]: Base table or view already exists: 1050 Table 'item_details' already exists (SQL: create table `item_details` (`id` bigint unsigned not null auto_increment primary key, `item_id` bigint unsigned not null, `filename` varchar(191) not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci')</p>
				</div>
			</div>
		</div>

		
		
		</div>
	<script type="text/javascript">
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


