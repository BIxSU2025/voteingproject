<?php

include("dbconnect.php");

try{
  $uname=$_POST['username'];
  $pass=$_POST['password'];
  $re=$_POST['retype_password'];
  $status="pending";


  $query="INSERT INTO `newaccountregistration`( `username`, `password`, `retype_password`, `status`) VALUES ('$uname','$pass','$re','$status')";

  $result=mysqli_query($con,$query);

  if($result==true)
  {
    echo"Data Inserted Successfully";
  }
  else
  {
    echo"Sorry data couldnot be inserted";
  }


}

catch(Exception $ex)
{
  die($ex->getMessage());
}



?>