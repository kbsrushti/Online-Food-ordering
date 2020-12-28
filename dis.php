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

$First_Name = $_POST['firstname'];
$Last_Name = $_POST['lastname'];
$Email = $_POST['email'];
$Mobile = $_POST['mobile'];
$Feedback = $_POST['feedback'];


$sql = "INSERT INTO login(First_Name, Last_Name, Email, Mobile, Feedback) VALUES ('$First_Name', '$Last_Name', '$Email','$Mobile','$Feedback')";

?>
<center>

<?php
   if(mysqli_query($con, $sql))
   {
       echo 'Thank you for your response';
    
   }

    else
    {
        echo 'Sorry! Try Again';
    }
    header("refresh:5; url=Contact.html");
  ?>
  </center>