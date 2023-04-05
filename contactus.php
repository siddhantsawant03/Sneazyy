<?php
$servername="localhost";
$username="root";
$password="";
$database_name="sneazy";


$conn = mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
     die("Connection Failed!" .mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $feedback = $_POST['feedback'];
    
    $sql_query = "INSERT into  contactus (name,phone,feedback) VALUES ('$name','$phone','$feedback')";
    
    if(mysqli_query($conn,$sql_query)){
        echo "Feedback Received!";
    }else{
        echo "Invalid Details";
    }

    mysqli_close($conn);
}
?>