<?php
 
 $con = mysqli_connect('localhost', 'root', '', 'restaurant');


 if ($_SERVER["REQUEST_METHOD"]=="POST")
 {

    $kebabr = $_POST['kebabr'];
    $Lasagna = $_POST['Lasagna'];
    $Paella = $_POST['Paella'];
    $Pizza = $_POST['Pizza'];
    $Ramen = $_POST['Ramen'];
    $Rendang = $_POST['Rendang'];
    $Sushi = $_POST['Sushi'];
    $TomYamGoongr = $_POST['TomYamGoongr'];
   
    $kebabrValue;
    $LasagnaValue;
    $PaellaValue;
    $PizzaValue;
    $RamenValue;
    $RendangValue;
    $SushiValue;
    $TomYamGoongrValue;
    $total;

    if($kebabr == 0 && $Lasagna ==0 && $Paella == 0 && $Pizza == 0 && $Ramen == 0 && $Rendang == 0 && $Sushi == 0 && $TomYamGoongr == 0)
    {
        echo "<script>alert('Please select at least one Iteam');</script>";
        return;
    }

    if($kebabr>=0)
    {
        $kebabrValue = $kebabr*850;    
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }
  

    if($Lasagna>=0)
    {
        $LasagnaValue = $Lasagna*850;
          
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }


    if( $Paella>=0)
    {
        $PaellaValue = $Paella*850;
          
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }


    if($Pizza>=0)
    {
        $PizzaValue = $Pizza*850;
         
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }


    if($Ramen>=0)
    {
        $RamenValue =  $Ramen*950;
          
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }


    if($Rendang>=0)
    {
        $RendangValue = $Rendang*950;
          
    }
    else
    {
        echo "<script>alert('Item can not Minus Value');</script>";
        return; 
    }

 
    if($Sushi>=0)
    {
        $SushiValue = $Sushi*950;
          
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }

 
    if($TomYamGoongr>=0)
    {
        $TomYamGoongrValue = $TomYamGoongr*950;
       
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }
 
    $total = ($kebabrValue+$LasagnaValue+$PaellaValue+$PizzaValue+$RamenValue+$RendangValue+$SushiValue+$TomYamGoongrValue);

    $sql = "INSERT INTO foodOrder(orderID, kebabr, Lasagna, Paella, Pizza, Ramen, Rendang, Sushi, TomYamGoongr, totalPrice) VALUES 
    ('0', '$kebabr', '$Lasagna', '$Paella', '$Pizza', '$Ramen', '$Rendang', '$Sushi', '$TomYamGoongr', '$total')";

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