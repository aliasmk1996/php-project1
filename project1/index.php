<?php
session_start();
// Index page or home page for site
include('functions/database_functions.php');
?>
<!DOCTYPE html>
<html lang="en">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <body class="cnt-home">
	
		<h1>Welcome to Book Store</h1>
<header class="header-style-1">
</header>
<br/><br/><br/>
<div class="container-fluid" align="center">
  <button type="button" onclick="window.location.href='book.php'" class="btn btn-dark">Shop</button>
</div>
</body>
</html>