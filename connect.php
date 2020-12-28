<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        
        <!-- bootstrap 4 css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
        <!-- fontawesome cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="css/style.css">
<style>

#td, #id 
{
    border: solid 1px black;
    padding-left: 2px;
    text-align: left;
    width: 200px;
}
</style>
<?php
$con = mysqli_connect('127.0.0.1', 'root', '', "myorder");

if(!$con)
{
    echo 'Not connected to server';
}

if (!mysqli_select_db($con, 'myorder'))
{
    echo 'Database not selectd';
}

$Customer_Name = $_POST['customername'];
$Email = $_POST['email'];
$Address = $_POST['address'];
$Food_Name = $_POST['foodname'];
$Amount = $_POST['amount'];
$Phone = $_POST['phone'];

$sql = "INSERT INTO fooditem (Customer_Name, Email, Address, Food_Name, Amount, Phone) VALUES ('$Customer_Name', '$Email', '$Address', '$Food_Name', '$Amount', '$Phone')";

?>

<div style="  background-image: linear-gradient(to bottom right, purple, blue); " class="mb-4">

<h3 class="text-center p-3" ><b style="color:white;text-shadow: 2px 2px 2px rgba(247, 143, 143, 0.5);">ORDER DETAILS</b> 	
			</h3> 
            </div>
<center>
   <table style="border-collapse: collapse; border: 1px solid black;">
           <tr>
            <td id="id" style="color: purple"><b>Customer Name</b></td>
            <td id="id" style="color: purple"><b>Email</b></td>
            <td id="id" style="color: purple"><b>Address</b></td>
            <td id="id" style="color: purple"><b>Food name</b></td>
            <td id="id" style="color: purple"><b>Amount</b></td>
            <td id="id" style="color: purple"><b>Mobile Number</b></td>

           </tr>
           </table>
</center>
    <center>
    <table style="border-collapse: collapse; border: 1px solid black;color:grey;">
    <tr> 
     <td id="td"><?php echo $Customer_Name;?></td>    
     <td id="td"><?php echo $Email;?></td>
     <td id="td"><?php echo $Address;?></td>
     <td id="td"><?php echo $Food_Name?></td>
     <td id="td"><?php echo $Amount?></td>
     <td id="td"><?php echo $Phone;?></td>

    </tr>
    </table>
    </center>
<center>
<?php
   if(mysqli_query($con, $sql))
   {
       echo '<br><br>Thank you for ordering. Your order will be delivered soon!';
    
   }

    else
    {
        echo 'Sorry! Try Again';
    }
    header("refresh:10; url=index.html");
  ?>
  </center>