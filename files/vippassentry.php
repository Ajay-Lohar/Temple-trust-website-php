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
    $People      =$_POST['people'];
    $Date        =$_POST['date'];
    $Mobilenumber=$_POST['number'];
    $Amount      =$_POST['amount'];
    $File        =$_POST['file'];
  
    
}


   $sql_query="INSERT INTO vipentrys (Full_name,Email,People,Date,Mobile_no,Amount,Screenshot)
    VALUES ('$FullName','$Email','$People','$Date','$Mobilenumber','$Amount','$File')";

    if (mysqli_query($conn, $sql_query))
    {
        echo "";
    }
    else
    {
        echo" Error :  Data is Not Inserted" . $sql . "" .mysqli_error($conn);
    }
    mysqli_close($conn);




   


?>
<?php 

session_start();


$_SESSION["name"]=$_POST['name'];
$_SESSION["email"]=$_POST['email'];
$_SESSION["people"]=$_POST['people'];
$_SESSION["date"]=$_POST['date'];
$_SESSION["number"]=$_POST['number'];
$_SESSION["amount"]=$_POST['amount'];
$_SESSION["file"]=$_POST['file'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      header{
            height: 50px;
            width: auto;
            text-align: center;
            padding: 10px 0px 0px 0px;
      }
      
      @font-face {
        font-family: marathifont;
        src: url('AMS Aaditya Regular.ttf');
       } 
       #header  {
        font-family: marathifont;
       }
       .receipt{
        item-align:center;
       }
    </style>
</head>
<body>
    <header> 
       <h1 id="header">  jaya MI rama </h1> <!--header text-->
    </header>
    <br>
     <center><h4 id="header">samaTa_ ramadasa svaamaI sTaipata maa@taI ma/idr. w/baXja</h4></center><br><hr>
    <center><div class="receipt">
        
         <div class="checkmark"></div> 
         <h1 class="title">Vip Pass </h1>
         
         <div class="subtitle" >Your Name :</div> 
         <h3><div class="info" ><?php echo $_SESSION['name'];?></h3><br>

        <div class="subtitle">Your Email Id :</div> 
        <h3><div class="info"><?php echo $_SESSION['email'];?></div></h3><br>

        <div class="subtitle">Peaple :</div> 
        <h3><div class="info"><?php echo $_SESSION['people'];?></div></h3><br>

        <div class="subtitle">Date :</div> 
        <h3><div class="info"><?php echo $_SESSION['date'];?></div></h3><br>

        <div class="subtitle">Your  Mobile No :</div> 
        <h3><div class="info"><?php echo $_SESSION['number'];?></div></h3><br>

        <div class="subtitle">Amount :</div> 
        <h3><div class="info"><?php echo $_SESSION['amount'];?></div></h3><br>

        <!-- <div class="subtitle">Screenshot :</div> 
        <div class="info"><?php echo $_SESSION['file'];?></div> -->
        
        <p>Your receipt Printed now  </p>
        <br>
        <p>Thank you </p>
        <a href="home.html" class="button"></a>



    
</div>
 
</center>
</body>
<script>
    window.onload =function(){
        window.print();
    };
  </script>
</html>


<?php
session_destroy();
?>