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

if(isset($_POST['username']) && isset($_POST['password'])){

$username =$_POST['username'];
$password =$_POST['password'];

        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password); 

$sql = "select * from login where username='$username' and password='$password'";
$result = mysqli_query($conn , $sql);
$count=mysqli_num_rows($result);

if($count == 1){
    echo "login successfull";
    header("location: admin_panel.php");
}
else{
    echo "login faild";
}

}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <form method="post" action="signin.php">
        <div class="mb-3">
            <label for="username" class="form-label">Email address</label>
            <input type="username" class="form-control" id="username" aria-describedby="username" name="username">
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">login</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>