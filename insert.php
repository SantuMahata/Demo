<h1 align="center">

<?php
session_start();
if(isset($_SESSION["user"]))
{

 echo "THANK YOU FOR VISIT, " . $_SESSION["user"];

}
else
{
	echo"YOU ARE NOT LOGDIN";
}

?>
</h1>
<h2>

<a href="logout.php"style="float:right" >Logout</a> 
</h2>