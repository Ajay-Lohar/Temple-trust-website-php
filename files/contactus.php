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
    $Full_Name    =$_POST['name'];
    $Mobile_no   =$_POST['number'];
    $Email       =$_POST['email'];
    $Massage1     =$_POST['massege'];
   
  
    $sql_query="INSERT INTO contact_us (Full_name,Mobile_no,Email,Massege)
    VALUES ('$Full_Name','$Mobile_no','$Email','$Massage1')";

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