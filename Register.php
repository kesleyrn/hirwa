<?php
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Forms.css">
    <title>Hirwa</title>
</head>
<body>
    <div class="container">
        <form action="Register.php" method="POST">
           <div class="Reft-side">
            <h1>INSINZI FC</h1>
            <p>A Football Club of Junior-Players Located in Kigali City</p>
            <img src="image/undraw_Forms_re_pkrt.png" alt="image">
           </div>
           <div class="Right-side">
            <h1>Welcom To INSINZI FC</h1>
            <P>You can Create your Account Now</P><br><br>
            <input class="input" type="text" placeholder="User Id" name="Admin_id"><br><br><br>
            <input class="input" type="text" placeholder="User Name" name="u_Name"><br><br><br>
            <input class="input" type="text" placeholder="Password" name="u_password"><br><br><br>
            <input class="btn" type="submit" name="Register" value="REGISTER"><br><br>
            <p>Alredy a Member<a href="login.php"> Login</a></p>
           </div>
        </form>
    </div>
    <?php
    if(isset($_POST['Register'])){
        $ADMIN = $_POST['Admin_id'];
        $NAME = $_POST['u_Name'];
        $PASSWORD = $_POST['u_password'];

        $insert = "INSERT INTO `admin`(`Admin_id`, `u_Name`, `u_password`) VALUES ('$ADMIN','$NAME','$PASSWORD')";
        $runinsert = mysqli_query($connect,$insert);
        if($runinsert){
            echo("<script>alert'You Have Been Register Now'</script>");
            echo "<script>window.location.replace('login.php')</script>";
        }
        else{
            die("<script>alert'inserted failed'</script>" . mysqli_error($connect));
        }
    }
    ?>
</body>
</html>