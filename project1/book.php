<?php
session_start();
include('functions/database_functions.php');
?>


<!DOCTYPE html>
<html lang="en">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <body class="cnt-home">
	
		<ul class="list-group">
			<?php
$sql = "SELECT * FROM bookinventory";
$result = $con->query($sql);
while ($row=mysqli_fetch_array($result)) 
{
?>

	
  <li class="list-group-item">
  	Book Name : <?php echo htmlentities($row['book_name']); ?><br>
    Quantity Available : <?php echo htmlentities($row['quantity']); ?><br>
  	<a href="checkout.php?id=<?php echo htmlentities($row['id']); ?>">Buy Now</a>
  </li>


<?php } ?>
</ul>


</body>
</html>