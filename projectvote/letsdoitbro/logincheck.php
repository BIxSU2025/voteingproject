<?php

try{

include("dbconnect.php");
$u=$_POST['username'];
$p=$_POST['password'];
$query="SELECT * FROM `newaccountregistration` WHERE `username`='$u' and `password`='$p'";
$result=mysqli_query($con,$query);
if($row=mysqli_fetch_array($result))
{
    header("location:menu.php");

}

else{
     echo"Failed";
}

}
catch(Exception $ex)
{
    echo($ex->getMessage());
}


?>