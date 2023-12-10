<?php
$con = mysqli_connect('localhost','root','','restaurant');

//name
if (empty($_POST["name"]))
{
  echo "<script>alert('Name is Required');</script>"; 
  return;
 
}
else
{
$name = input_data($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name))
    {
      echo "<script>alert('Name is doen not allowed numbers');</script>"; 
      return;
    
    }
else if($_POST["name"] == " ") 
    {
      echo "<script>alert('white sapaces are dose not allow');</script>"; 
      return;
    } 
else
    {
		$name = $_POST["name"];
    } 
}

//email
if (empty($_POST["email"]))
{
  echo "<script>alert('Email is Required');</script>"; 
  return;
}
else
{
    $email = input_data($_POST["email"]);
    if (!preg_match("/^[a-zA-Z0-9@.]*$/",$email))
{
  echo "<script>alert('Email is dose not allowed Special characters');</script>"; 
  return;
}
else if($_POST["email"] == " ") 
{
  echo "<script>alert('white sapaces are dose not allow');</script>"; 
  return;
} 
else
{
	$email = $_POST["email"];
}    
}

//message
if (empty($_POST["message"]))
  {
    echo "<script>alert('message is Required');</script>"; 
    return;
  }
else
{
  $message = input_data($_POST["message"]);
  if (!preg_match("/^[a-zA-Z0-9!@#$%^&* ]*$/",$message))
      {
        echo "<script>alert('message allow all letters, numbers and special characters');</script>"; 
        return;
      }
      else
      {
        $message = $_POST["message"];
      }
}

$datetime = $_POST["datetime"];
$select = $_POST["select1"];

$sql = "INSERT INTO cusbooking(tableID, cusName, cusEmail, cusDate, noOfPepole, specialRequest) 
VALUES ('0', '$name', '$email', '$datetime', '$select', '$message')";
 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "<script>alert('Table booking Sucsess');</script>";
}
else
{
	echo "<script>alert('Table bokking UnSucsess');</script>";
}

function input_data($data)
	{
	  $data = trim($data);
	  $data = stripcslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}


?>