<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="receipt">
         <div class="checkmark">%%</div> 
         <h1 class="title">payment successful</h1>
         
         <div class="subtitle">Your Name :</div> 
         <div class="info"><?php echo $_SESSION['Full_name'];?></div>

        <div class="subtitle">Your Email Id :</div> 
        <div class="info"><?php echo $_SESSION['Email'];?></div>

        <div class="subtitle">Peaple :</div> 
        <div class="info"><?php echo $_SESSION['People'];?></div>

        <div class="subtitle">Date :</div> 
        <div class="info"><?php echo $_SESSION['Date'];?></div>

        <div class="subtitle">Your  Mobile No :</div> 
        <div class="info"><?php echo $_SESSION['Mobile_no'];?></div>

        <div class="subtitle">Amount :</div> 
        <div class="info"><?php echo $_SESSION['Amount'];?></div>

        <div class="subtitle">Screenshot :</div> 
        <div class="info"><?php echo $_SESSION['Screenshot'];?></div>


        <p>Your receipt Printed now </p>
        <br>
        <p>Thank you </p>
        <a href="home.html" class="button">Back to Home Page</a>



    
</div>


</body>
</html>

<?php
session_destroy();
?>