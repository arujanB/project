<!DOCTYPE html>
<html>
<head>
	<title>AJAX</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script>
	function getMessage(){
		$.ajax({
			type:'POST',
			url:'getmsg',
			data:'_token = <?php echo csrf_token() ?>',

			success:function(data){
				$("#msg").html(data.msg);
			}
		});
	}
</script>
</head>
<body>
	<div id="msg">This message will be replaced using AJAX . Click the button to replace the message.</div>
	<?php 
		echo Form::button('Replace Message', ['onClick'=>'getMessage()']);
	?>
</body>

</html>