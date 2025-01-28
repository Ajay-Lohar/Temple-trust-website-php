<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="vippass";

$conn= mysqli_connect ($server_name,$username,$password,$database_name);
//check the conection
if(!$conn)
{
    die("Connection failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $FullName    =$_POST['name'];
    $Email       =$_POST['email'];
    $People      =$_POST['number'];
    $Amount      =$_POST['amount'];
    $File        =$_POST['image'];
  
    $sql_query="INSERT INTO donation (Full_name,Email,Mobile_no,Amount,Screenshot)
    VALUES ('$FullName','$Email','$People','$Amount','$File')";

    if (mysqli_query($conn, $sql_query))
    {
        echo "New Details Entry inserted Successfully !";
    }
    else
    {
        echo" Error :  Data is Not Inserted" . $sql . "" .mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>