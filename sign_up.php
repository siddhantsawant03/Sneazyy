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
    $fullname = $_POST['name'];
    $emailaddress = $_POST['email'];
    $mobilenumber = $_POST['mno'];
    // $country = $_POST['country'];
    // $gender = $_POST['gender'];
    $password = $_POST['pass'];
    // $confirmpassword = $_POST['conpass'];
    
    $sql_query = "INSERT INTO signup (name,email,phone,password) VALUES ('$fullname','$emailaddress','$mobilenumber','$password')";
    
    if(mysqli_query($conn,$sql_query)){
        echo "New SignUp  Details inserted successfully!";
    }else{
        echo "Error: " .$sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
