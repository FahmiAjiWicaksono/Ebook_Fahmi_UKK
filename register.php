<?php
include_once('db_connect.php');
$database = new database();
if(isset($_POST['register']))
{
	$username = $_POST['username'];
	$password = password_hash($_POST['password'],PASSWORD_DEFAULT);
	$nama = $_POST['nama'];
	if($database->register($username,$password,$nama))
	{
		header('location:index.php');
	}
}
?>
<!doctype html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uncle Fahmi Database</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='ipin.ico' rel='shortcut icon'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        .fas{
            font-size: 20px;
        }
        .fa-edit:hover{
            color: green;
        }
        .fa-trash:hover{
            color: red;
        }
    </style>
</head>

  	<body class="d-flex flex-column h-100">

	  <header style="background: #7A7777;">
			<div class="container">
				<h1><a>Fahmi E-Book</a></h1>
				<ul>
					<li><a href="index.html">Beranda Utama</a></li>
					<li><a href="menu.html">Daftar Buku</a></li>
					<li><a href="index.php">Login or Register</a></li>
					
				</ul>
			</div>
		</header>
		  
  		<!-- begin page content -->
 <main role="main" class="flex-shrink-0">
 	<div class="container">
 		<h1 class="mt-5">Register</h1>
 		<hr/>
 		<form method="post" action="">
 		<div class="form-group row">
 			<label for="username" class="col-sm-2 col-form-label">Username</label>
 			<div class="col-sm-10">
 				<input type="text" class="form-control" id="username" name="username" placeholder="Username">
 			</div>
 		</div>

 		<div class="form-group row">
 			<label for="nama" class="col-sm-2 col-form-label">Nama</label>
 			<div class="col-sm-10">
 				<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
 			</div>
 		</div>

 		<div class="form-group row">
 			<label for="password" class="col-sm-2 col-form-label">Kata Sandi</label>
 			<div class="col-sm-10">
 				<input type="password" class="form-control" name="password" id="password" placeholder="Password">
 			</div>
 		</div>
 		<div class="form-group row">
 			<div class="col-sm-10">
 				<a href="index.php" class="btn btn-success">Masuk</a>
 				<button type="submit" class="btn btn-primary" name="register">Daftar</button>
 			</div>
 		</div>
 	</form>
 </div>
</main>
</body>
</html>