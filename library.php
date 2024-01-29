<html>
<body>
<?php
require('connect2.php');
if(isset($_POST['sub']))
{
$bname=$_POST['book_Name'];
$aname=$_POST['author'];
$pub=$_POST['publisher'];
$qu=$_POST['quantity'];
$pri=$_POST['price'];
$sql="insert into  library(book_name,author,publisher,quantity,price)values('$bname','$aname','$pub','$qu','$pri')";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "New records successfully created";
}
mysqli_close($conn);
}
else
{
?>
<form align="center" method="POST" action="">
<fieldset>
	<h1><u>Registration</u></h1>
	
	<label for="book_name">book_Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="book_Name" id="bname"><br><br>

	<label for="author">author:</label>
	<input type="text" name="author" id="un"><br><br>
         
	<label for="publisher">publisher:</label>
	<input type="text" name="publisher" id="un"><br><br>

	<label for="quantity">quantity:</label>
	<input type="number" name="quantity" id="pn" maxlength=10><br><br>

	<label for="price">price:&nbsp;&nbsp;</label>
	<input type="number" name="price" id="price" ></textarea><br><br>
	

	<input type="submit" name="sub" id="sub" value="Submit">
	<input type="reset" name="rst" id="rst" value="Reset">
</fieldset>
<?php
}
?>
</form>
</body>
</html>