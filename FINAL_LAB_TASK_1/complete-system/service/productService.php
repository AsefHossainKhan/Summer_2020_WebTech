<?php
	
	require_once('../db/db.php');
	
	// function getById($id){
	// 	$con = dbConnection();
	// 	$sql = "select * from users where id='{$id}'";
	// 	$result = mysqli_query($con, $sql);
	// 	$row = mysqli_fetch_assoc($result);
	// 	return $row;
	// }
	
	// function getAllUser(){
	// 	$con = dbConnection();
	// 	$sql = "select * from users";
	// 	$result = mysqli_query($con, $sql);
	// 	$users =[];
	// 	while($row = mysqli_fetch_assoc($result)){
	// 		array_push($users, $row);
	// 	};
	// 	return $users;
	// }

	// function validate ($user){
	// 	$con = dbConnection();
	// 	$sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";

	// 	$result = mysqli_query($con, $sql);
	// 	$row = mysqli_fetch_assoc($result);

	// 	if(count($row) > 0){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }

	function create($product){
        $con = dbConnection();
        
		$sql = "insert into products values('', '{$product['name']}', '{$product['description']}', '{$product['quantity']}', '{$product['date']}', '{$product['price']}, '{$product['status']}', '{$product['filedir']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	// function update($user){
	// 	$con = dbConnection();
	// 	$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

	// 	if(mysqli_query($con, $sql)){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }

	// function delete($id){
	// 	$con = dbConnection();
	// 	$sql = "DELETE FROM users WHERE id='$id'";

	// 	if(mysqli_query($con, $sql)){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }

?>