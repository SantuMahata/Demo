<?php 
session_start();
 if(isset($_SESSION["user"]))
{
	echo "<h1 align='center'> you are already Logdin  </h1>";
	exit();
}
?>
<html>
 <head>
</head>
<body>

<form  method="post">
<table align="center">
<tr>
 <td>User Name</td><td><input type="text" name="name" required="required"/></td>
</tr>
<tr>
  <td>Password</td><td><input type="password" name="pass"></td>
</tr>
<tr><td colspan="2" align="center"><input type="submit"name="submit" value="Submit"/></tr>
</table>




</form>

</body>



</html>
<?PHP 

if(isset($_POST['submit']))
{
$_SESSION["user"]=$_POST['name'];

header('location:insert.php');
}

?>