<?php
session_start();
include('functions/database_functions.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
?>



<!DOCTYPE html>
<html>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
<?php	
$result=mysqli_query($con,"select quantity from bookinventory where id='$id'");
    if (!$result){
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
while ($row=mysqli_fetch_array($result)) 
{
 $q = $row['quantity'];
 $q = $q-1;
} 

if($q<0){
echo "<h1>Sorry! This book is out of stock</h1>";
}
else {
    mysqli_query($con,"update bookinventory set quantity= '$q'");
	echo "<h1>Thank you for purchasing the book</h1>";
}
?>
</body>
</html>