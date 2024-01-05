<?php
    include('config.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Forms.css">
    <title>LOGIN FORM</title>
</head>
<body>
    <div class="container">
        <form action="Login.php" method="POST">
           <div class="Reft-side">
            <h1>INSINZI FC</h1>
            <p>A Football Club of Junior-Players Located in Kigali City</p>
            <img src="image/undraw_Forms_re_pkrt.png" alt="image">
           </div>
           <div class="Right-side">
            <h1>Welcom To INSINZI FC</h1>
            <P>You can Login Now</P><br><br>
            <input class="input" type="text" placeholder="User Name" name="u_Name"><br><br><br>
            <input class="input" type="text" placeholder="Password" name="u_password"><br><br><br>
            <input class="btn" type="submit" name="login" value="LOGIN"><br><br>
            <p>Do'nt have an Account<a href="Register.php"> Register</a></p>
           </div>
        </form>
    </div>
    <?php
    if(isset($_POST['login'])){
        $NAME = $_POST['u_Name'];
        $PASSWORD = $_POST['u_password'];
        
        $select = "SELECT * FROM `admin` WHERE u_Name = '".$NAME."' AND u_password = '".$PASSWORD."' LIMIT 1";
        $runselect = mysqli_query($connect,$select);
        $row= mysqli_fetch_array($runselect);
        if(is_array($row)){

          $_SESSION['u_Name']= $row['u_Name'];
          $_SESSION['u_Password']= $row['u_Password'];

          header("location:index.php");


        }
        else{
            echo "<script>alert('Make Register to Login')</script>";
            echo "<script>window.location.replace('Register.php')</script>";
        }
    }
    
    ?>
</body>
</html>