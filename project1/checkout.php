<?php
session_start();
include('functions/database_functions.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';


?>


<!DOCTYPE html>
<html lang="en">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<body>
<?php

$result=mysqli_query($con,"select * from bookinventory where id=".$id);
while ($row=mysqli_fetch_array($result)) 
{
?>

	<h1>Your selected book details are below</h1>
	<table class="table table-striped">
      <tr>
        <th>Book Name</th>
        <th><?php echo htmlentities($row['book_name']) ?></th>
      </tr>
      <tr>
        <th>Version</th>
        <th><?php echo htmlentities($row['version']) ?></th>
      </tr>
      <tr>
        <th>Price</th>
        <th><?php echo htmlentities($row['price']) ?></th>
        </tr>
      <tr>
   </table>

   Please enter below details....
   <form action="order.php" class="was-validated">
   	<input type="hidden" id="bookId" name="bookId" value="<?php echo htmlentities($row['id']); ?>"/>
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter firstname" name="fname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter lastname" name="lname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button onclick="order.php?id=<?php echo $id; ?>" class="btn btn-primary">Submit</button>
  </form>

<?php } ?>
    </body>
</html>