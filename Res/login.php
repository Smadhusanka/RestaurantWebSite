<?php

$con = mysqli_connect('localhost', 'root', '', 'restaurant');



if ($_SERVER["REQUEST_METHOD"]=="POST")
{

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql="select * from cusregister where cusUsername='".$username."'AND cusPassword='".$password."'";
    
    $result=mysqli_query($con,$sql);
    
    $row=mysqli_fetch_array($result);
    
    /*if($row)
    {
        if (password_verify($username, $row['cusUsername']))
        {
            if (password_verify($password, $row['cusPassword']))
            {
                header("Location:login2.html");
            }
        }
        else
        {
            echo "<script>alert('User Name or Password Wrong!');</script>"; 
        }
    }
    else
    {
        echo "<script>alert('connection error!');</script>"; 
    }*/

    if ($row)
     {

        if ($row['cusPassword']==$password)
        {
           if($row['cusUsername']==$username)
           {

             header("Location:login2.html");
           }
        }  
    }
    else
    {
    
        echo "<script>alert('User Name or Password Wrong!');</script>"; 
    }

}


?>