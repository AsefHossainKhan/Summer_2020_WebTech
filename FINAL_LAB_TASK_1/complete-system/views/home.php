<?php
	require_once('../php/sessionController.php');	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome home <?=$_SESSION['username']?></h1>

	<a href="create.php"> Create New User</a> |
	<a href="user_list.php"> User List</a> |
	<a href="../php/logoutController.php"> logout</a>
	<br>
	<a href="create_product.php"> Create New Product</a> |
	<a href="product_list.php"> Product List</a> |

</body>
</html>
