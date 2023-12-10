<?php
 
 $con = mysqli_connect('localhost', 'root', '', 'restaurant');


 if ($_SERVER["REQUEST_METHOD"]=="POST")
 {

    $Cosmopolitan = $_POST['Cosmopolitan'];
    $Margarita = $_POST['Margarita'];
    $Mimosa = $_POST['Mimosa'];
    $Mojito = $_POST['Mojito'];
    $MoscowMule = $_POST['MoscowMule'];
    $OldFashioned = $_POST['OldFashioned'];
    $PimmsCup = $_POST['PimmsCup'];
    $Spritz = $_POST['Spritz'];
   
    $CosmopolitanValue;
    $MargaritaValue;
    $MimosaValue;
    $MojitoValue;
    $MoscowMuleValue;
    $OldFashionedValue;
    $PimmsCupValue;
    $SpritzValue;
    $total;

    if($Cosmopolitan == 0 && $Margarita ==0 && $Mimosa == 0 && $Mojito == 0 && $MoscowMule == 0 && $OldFashioned == 0 && $PimmsCup == 0 && $Spritz == 0)
    {
        echo "<script>alert('Please select at least one Iteam');</script>";
        return;
    }

    if($Cosmopolitan>=0)
    {
        $CosmopolitanValue = $Cosmopolitan*450;    
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }
  

    if($Margarita>=0)
    {
        $MargaritaValue = $Margarita*450;
          
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }


    if( $Mimosa>=0)
    {
        $MimosaValue = $Mimosa*450;
          
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }


    if($Mojito>=0)
    {
        $MojitoValue = $Mojito*450;
         
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }


    if($MoscowMule>=0)
    {
        $MoscowMuleValue =  $MoscowMule*450;
          
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }


    if($OldFashioned>=0)
    {
        $OldFashionedValue = $OldFashioned*450;
          
    }
    else
    {
        echo "<script>alert('Item can not Minus Value');</script>";
        return; 
    }

 
    if($PimmsCup>=0)
    {
        $PimmsCupValue = $PimmsCup*450;
          
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }

 
    if($Spritz>=0)
    {
        $SpritzValue = $Spritz*450;
       
    }
    else
    {
        echo "<script>alert('Item can not be Minus Value');</script>";
        return; 
    }
 
    $total = ( $CosmopolitanValue+$MargaritaValue+$MimosaValue+$MojitoValue+$MoscowMuleValue+$OldFashionedValue+$PimmsCupValue+$SpritzValue);

    $sql = "INSERT INTO drinkOrder(orderID, Cosmopolitan, Margarita, Mimosa, Mojito, MoscowMule, OldFashioned, PimmsCup, Spritz, totalPrice) VALUES 
    ('0', '$Cosmopolitan', '$Margarita', '$Mimosa', '$Mojito', '$MoscowMule', '$OldFashioned', '$PimmsCup', '$Spritz', '$total')";

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