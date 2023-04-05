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
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql_query = "SELECT * from sneazylogin where username = '$username' and password = '$password'";
    
    if(mysqli_query($conn,$sql_query)){
        echo "Successfully Logged In!";
    }else{
        echo "Invalid Details";
    }
//     $result = $conn->query($sql);
//     if ($result->num_rows > 0) {
//         header('Location: admindashboard.php');
//     } else {
//         echo '<script>alert("Wrong Details");</script>';
//     }
//     $conn->close();
    mysqli_close($conn);
}
?>