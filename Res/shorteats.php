<?php

$con = mysqli_connect('localhost', 'root', '', 'restaurant');

if ($_SERVER["REQUEST_METHOD"]=="POST")
{

    $Burger = $_POST['Burger'];
    $ChineseRolls = $_POST['ChineseRolls'];
    $Cutlets = $_POST['Cutlets'];
    $Pastries = $_POST['Pastries'];
    $Patties = $_POST['Patties'];
    $Sandwitches = $_POST['Sandwitches'];
    $StuffedBuns = $_POST['StuffedBuns'];
    $VegitableRoti = $_POST['VegitableRoti'];
    

    $BurgerValue;
    $ChineseRollsValue;
    $CutletsValue;
    $PastriesValue;
    $PattiesValue;
    $SandwitchesValue;
    $VegitableRotiValue;
    $TomYamGoongrValue;


    if($Burger == 0 && $ChineseRolls ==0 && $Cutlets == 0 && $Pastries == 0 && $Patties == 0 && $Sandwitches == 0 && $StuffedBuns
     == 0 && $VegitableRoti == 0)
    {
        echo "<script>alert('Please select at least one Iteam');</script>";
        return;
    }

    if($Burger>=0)
    {
        $BurgerValue = $Burger*350;    
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }
  

    if($ChineseRolls>=0)
    {
        $ChineseRollsValue = $ChineseRolls*200;
          
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }


    if( $Cutlets>=0)
    {
        $CutletsValue = $Cutlets*200;
          
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }


    if($Pastries>=0)
    {
        $PastriesValue = $Pastries*350;
         
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }


    if($Patties>=0)
    {
        $PattiesValue =  $Patties*200;
          
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }


    if($Sandwitches>=0)
    {
        $SandwitchesValue = $Sandwitches*350;
          
    }
    else
    {
        echo "<script>alert('Item can not Minus Value');</script>";
        return; 
    }

 
    if($StuffedBuns>=0)
    {
        $StuffedBunsValue = $StuffedBuns*200;
          
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }

 
    if($VegitableRoti>=0)
    {
        $VegitableRotiValue = $VegitableRoti*200;
       
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }

    $total = ($BurgerValue+$ChineseRollsValue+$CutletsValue+$PastriesValue+$PattiesValue+$SandwitchesValue+$StuffedBunsValue+$VegitableRotiValue);

    $sql = "INSERT INTO shortEatsOrder(orderID, Burger, ChineseRolls, Cutlets, Pastries, Patties, Sandwitches, StuffedBuns, VegitableRoti, totalPrice) VALUES 
    ('0', '$Burger', '$ChineseRolls', '$Cutlets', '$Pastries', '$Patties', '$Sandwitches', '$StuffedBuns', '$VegitableRoti', '$total')";

    $rs = mysqli_query($con,$sql);

    if($rs)
    {
        echo "<script>alert('Order Added. Total Price is Rs:'+$total);</script>";
    }
    else
    {
        echo "<script>alert('Error of Order. Total Price is :');</script>";
    }




}

?>