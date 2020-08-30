<?php
	require_once('../service/productService.php');

	//create new product
	if(isset($_POST['create'])){
		$name = $_POST['name'];
		$description = $_POST['description'];
        $quantity = $_POST['quantity'];
        $date = $_POST['date'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $filedir = '../res/'.$name.'.jpg';

		if(empty($name) || empty($description) || empty($quantity) || empty($date) || empty($price) || empty($status)){
			header('location: ../views/create_product.php?error=null');
		}else{
			$product = [
				'name' =>$name,
				'description' =>$description,
				'quantity' =>$quantity,
				'date' =>$date,
				'price' =>$price,
				'status' =>$status,
				'filedir' =>$filedir
			];
			$status = create($product);
			move_uploaded_file($_FILES['image']['tmp_name'], $filedir);

			if($status){
				header('location: ../views/product_list.php?msg=success');
			}else{
				header('location: ../views/create_product.php?error=dberror');
			}
		}	
	}

?>