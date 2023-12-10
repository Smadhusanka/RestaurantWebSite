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

//city
if (empty($_POST["city"]))
{
  echo "<script>alert('City is Required');</script>"; 
  return;
}
else
{
  $city = input_data($_POST["city"]);
  if (!preg_match("/^[a-zA-Z,:.]*$/",$city))
      {
        echo "<script>alert('City is does not allowed numbers');</script>"; 
        return;
      }
       
  else if($_POST["city"] == " ") 
      {
        echo "<script>alert('white sapaces are dose not allow');</script>"; 
        return;
      } 
  else
  {
    $city = $_POST["city"];
  }     
}

//address
if (empty($_POST["address"]))
{
  echo "<script>alert('Address is Required');</script>"; 
  return;
}
else
{
  $address = input_data($_POST["address"]);
  if (!preg_match("/^[a-zA-Z0-9 ,:.]*$/",$address))
      {
        echo "<script>alert('address is does not allowed special characters');</script>"; 
         return;
      }
       
  else if($_POST["address"] == " ") 
      {
        echo "<script>alert('white sapaces are dose not allow');</script>"; 
         return;
      }
      else
      {
        $address = $_POST["address"];
      }     
}

//mobile
if (empty($_POST["mobile"]))
{
  echo "<script>alert('Mobile number is Required');</script>"; 
  return;
}
else
{
  $mobile = input_data($_POST["mobile"]);

  if (!preg_match("/^[0-9]*$/",$mobile))
  {
    echo "<script>alert('Mobile number is does not allowed Letters');</script>"; 
    return;
  }

  else if (strlen($mobile)!= 10)
  {
    echo "<script>alert('mobile number length can not be grater than 10 digits');</script>"; 
    return;
  }

  else if($_POST["mobile"] == " ") 
      {
        echo "<script>alert('white sapaces are dose not allow');</script>"; 
        return;
      }
      else
      {
        $mobile = $_POST["mobile"];
      }

}

//user name
if (empty($_POST["userName"]))
  {
    echo "<script>alert('User name is Required');</script>"; 
    return;
  }
else
{
  $userName = input_data($_POST["userName"]);
  if (!preg_match("/^[a-zA-Z0-9]*$/",$userName))
      {
        echo "<script>alert('User Name is does not allowed special characters');</script>"; 
        return;
      }

  else if($_POST["userName"] == " ") 
      {
        echo "<script>alert('white sapaces are dose not allow');</script>"; 
        return;
      }
      else
      {
        $userName = $_POST["userName"];
      }
}

//password
if (empty($_POST["pass"]))
  {
    echo "<script>alert('Password is Required');</script>"; 
    return;
  }
else
{
  $pass = input_data($_POST["pass"]);
  if (!preg_match("/^[a-zA-Z0-9!@#$%^&*]*$/",$pass))
      {
        echo "<script>alert('Password allow all letters, numbers and special characters');</script>"; 
        return;
      }
  else if($_POST["pass"] == " ") 
      {
        echo "<script>alert('white sapaces are dose not allow');</script>"; 
        return;
      }
      else
      {
        $pass = $_POST["pass"];
      }
}

//rePassword
if (empty($_POST["rePass"]))
  {
    echo "<script>alert('Re enter password is Required');</script>"; 
    return;
  }
else
{

  if (($_POST["pass"]) != ($_POST["rePass"]))
      {
        echo "<script>alert('password and reEnter password is does not match');</script>"; 
        return;
      }
  else if($_POST["rePass"] == " ") 
      {
        echo "<script>alert('white sapaces are dose not allow');</script>"; 
        return;
      }    
}

$sql = "INSERT INTO cusregister(cusID, cusName, cusEmail, cusCity, cusAddress, cusMobileNumber, cusUsername, cusPassword) 
VALUES ('0', '$name', '$email', '$city', '$address', '$mobile', '$userName', '$pass')";
 
$rs = mysqli_query($con, $sql);

if($rs)
{
  echo "<script>alert('Registration Sucsess');</script>";
}
else
{
  echo "<script>alert('Registration Unsucsess');</script>"; 
}

function input_data($data)
	{
	  $data = trim($data);
	  $data = stripcslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

?>