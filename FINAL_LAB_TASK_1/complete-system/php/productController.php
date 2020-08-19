<?php
	require_once('../service/userService.php');

	//create new user
	if(isset($_POST['create'])){
		$name = $_POST['name'];
		$description = $_POST['description'];
        $quantity = $_POST['quantity'];
        $date = $_POST['date'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $filedir = '../res/'.$name.'.jpg';

		if(empty($name) || empty($password) || empty($email)){
			header('location: ../views/create.php?error=null');
		}else{
			$user = [
				'username'	=>$username,
				'password'	=>$password,
				'email'		=>$email
			];
			$status = create($user);
			if($status){
				header('location: ../views/user_list.php?msg=success');
			}else{
				header('location: ../views/create.php?error=dberror');
			}
		}	
	}

?>