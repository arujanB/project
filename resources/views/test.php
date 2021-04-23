<?php 
function connection(){
	$mysqli = new mysqli("localhost", "root", "", "sign");
	if($mysqli -> connect_errno){
	echo "fail" . $mysqli -> connect_error;
	exit();
}
return $mysqli;
}

function add_user($first_name, $last_name, $gmail, $psw, $gender $date_of_birth){
	$mysqli = connection();
	$statement = $mysqli -> prepare("insert into signup(first_name, last_name, gmail, psw, gender, date_of_birth) values(?, ?, ?, ?, ?, ?)");
	$mass=(int)$mass;
	$statement -> bind_param("sssssi", $first_name, $last_name, $gmail, $psw, $gender, $date_of_birth);
	$statement -> execute();
	$statement -> close();
	$mysqli -> close();
}

if (isset($_GET['state']) && $_GET['state'] == "add"){
	add_user($_GET['first_name'], $_GET['last_name'], $_GET['gmail'], $_GET['psw'], $_GET['gender'], $_GET['date_of_birth']);
}

// function select_users(){
// 	$mysqli = connection();
// 	$query = "select * from signup";
// 	$result = $mysqli -> query($query);

// 	if($result -> num_rows > 0){
// 		while($row = $result -> fetch_assoc()){
// 			echo "first_name". $row["first_name"] . "last_name". $row["last_name"]. "gmail" . $row["gmail"]. "psw". $row["psw"].$row["gender"] . "gender". $row["date_of_birth"]. "date_of_birth"."<br>";
// 		}
// 	}else{
// 		echo "0 results";
// 	}
// 	$mysqli->close();
// }

// if (isset($_GET['state']) && $_GET['state'] == "add"){
// 	select_users();
// }

?>