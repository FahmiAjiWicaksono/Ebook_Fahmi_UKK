<?php
session_start();
include_once('db_connect.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
	header('');
}

if(isset($_SESSION['username']))
{
	$database->relogin($_SESSION['username']);
	header('');
}

if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(isset($_POST['remember']))
	{
		$remember = TRUE;
	}
	else
	{
		$remember = FALSE;
	}

	if($database->login($username,$password,$remember))
	{
		header('location:perpus/index.php');
	}
}
?>
<!doctype html>

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebook Fahmi Database</title>
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



  
  <body class="text-center">
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
  	<form class="container" method="post" action="">
  <h1 class="h3 mb-3 font-weight-normal">login</h1>

  <small>Username</small>
  <label for="username" class="sr-only">Username</label>
  <input type="text" id="username" class="form-control" name="username" required autofocus>

  <small>Password</small>
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" class="form-control" name="password" required>
  <div class="checkbox mb-3">
  	<label>
  		<input type="checkbox" value="remember-me" name="remember"> Remember me
  	</label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Masuk</button>
  <a href="register.php" class="btn btn-lg btn-success btn-block">Daftar</a>
  <p class="mt-5 mb-3 text-muted"></p>
</form>
</body>
</html>
