<?php $server_name="localhost";
$username="root";
$password="";
$database_name="vippass";

$conn= mysqli_connect ($server_name,$username,$password,$database_name);
//check the conection
if(!$conn)
{
    die("Connection failed:" . mysqli_connect_error());
} ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="" class="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">


</head>
<style>
header {
    height: 100px;
    padding-top: 25px;
    background-color: orange;
    text-align: center;
}

.date {
    background-color: orange;
    text-align: right;
    padding-right: 100px;
}

nav {
    text-align: right;
    text-decoration: none;
    background-color: orange;
    padding-right: 150px;
    color: white;
    height: 50px;
    align-items: center;
}

.flex {
    display: flex;
    margin: 30px;
    padding-right: 30px;

}

.card {
    margin: 50px;
}

.records {
    text-align: center;
    margin: 60px;
}

#a {
    text-align: right;
}

Button {
    align-content: right;
}
</style>

<body>
    <header>
        <h1>Maruti Mandir,Umbraj</h1>
        <h3> Reports</h3>
    </header>
    <div class="date">
        <h3><?php
    $cdate=date("d-m-y");//CURUNT DATE
    echo "Date:  $cdate";
    ?></h3>
    </div>

    <nav>
        <!--nav bar -->


        <a href="" style="text-decoration:none;color:white">Logout</a>




    </nav>



    <center>
        <div class="flex">
            <div class="card" style="width: 18rem;">
                <img src="vip.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Vip Pass</h5>
                    <p class="card-text">vip enrtys data </p>
                    <a href="vipdata.php" class="btn btn-primary">Reports</a>
                </div>
            </div>
            &nbsp;&nbsp;


            <div class="card" style="width: 18rem;">
                <img src="DONATION.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Donation</h5>
                    <p class="card-text">temple donation</p>
                    <a href="donatdata.php" class="btn btn-primary">Reports</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="contact.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Contact Us </h5>
                    <p class="card-text">Some masseges </p>
                    <a href="usdata.php" class="btn btn-primary">Reports</a>
                </div>
            </div>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>



</body>

</html>