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

//Subject
if (empty($_POST["subject"]))
{
  echo "<script>alert('subject is Required');</script>"; 
  return;
 
}
else
{
$subject = input_data($_POST["subject"]);
if (!preg_match("/^[a-zA-Z ]*$/",$subject))
    {
      echo "<script>alert('Subject is doen not allowed numbers');</script>"; 
      return;
    
    }
else if($_POST["subject"] == " ") 
    {
      echo "<script>alert('white sapaces are dose not allow');</script>"; 
      return;
    } 
else
    {
        $subject = $_POST["subject"];
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
  if (!preg_match("/^[a-zA-Z0-9!@#$%^&*]*$/",$message))
      {
        echo "<script>alert('message allow all letters, numbers and special characters');</script>"; 
        return;
      }
  else if($_POST["message"] == " ") 
      {
        echo "<script>alert('white sapaces are dose not allow');</script>"; 
        return;
      }
      else
      {
        $message = $_POST["message"];
      }
}

$sql = "INSERT INTO cusquery(id, cusName, cusEmail, cusSubject, cusMessage) VALUES ('0', '$name', '$email', '$subject', '$message')";
 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "<script>alert('Message send Sucsess');</script>";
}
else
{
	echo "<script>alert('Message send UnSucsess');</script>";
}

function input_data($data)
	{
	  $data = trim($data);
	  $data = stripcslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}


?>