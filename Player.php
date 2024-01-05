<?php
    include('config.php');
?>
<?php
    ini_set("display_errors","off");
 ?>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $select = "SELECT* FROM players WHERE Pl_id ='".$id."'";
        $runselect =mysqli_query($connect,$select);

        while($row =mysqli_fetch_array($runselect)){
            $PLAYER = $row['Pl_id'];
            $F_NAME = $row['F_Name'];
            $L_NAME = $row['L_Name'];
            $AGE = $row['Age'];
            $TELEPHONE = $row['Telephone'];


        }
}
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
        <form action="player.php" method="POST">
           <div class="Reft-side">
            <h1>INSINZI FC</h1>
            <p>A Football Club of Junior-Players Located in Kigali City</p>
            <img src="image/undraw_Forms_re_pkrt.png" alt="image">
           </div>
           <div class="Right-side">
            <h1>Welcom To INSINZI FC</h1>
            <P>You can Add a Player Here</P><br><br>
            <input class="input" type="number" placeholder="Player Id" name="Pl_id" value="<?php echo $PLAYER;?>"><br><br>
            <input class="input" type="text" placeholder="First Name" name="F_Name"  value="<?php echo $F_NAME;?>"><br><br>
            <input class="input" type="text" placeholder="Last Name" name="L_Name"  value="<?php echo $L_NAME;?>"><br><br>
            <input class="input" type="number" placeholder="Age" name="Age"  value="<?php echo $AGE;?>"><br><br>
            <input class="input" type="number" placeholder="Telephone" name="Telephone"  value="<?php echo $TELEPHONE;?>"><br><br>
            <input class="btn" type="submit" name="player" value="ADD"><br><br>
            <input class="btn" type="submit" name="update" value="UPDATE"><br><br>
            <p>View Player Here<a href="View_Player.php"> View</a></p>
           </div>
        </form>
    </div>
    <?php
    if(isset($_POST['player'])){
        $PLAYER = $_POST['Pl_id'];
        $F_NAME = $_POST['F_Name'];
        $L_NAME = $_POST['L_Name'];
        $AGE = $_POST['Age'];
        $TELEPHONE = $_POST['Telephone'];

        $insert = "INSERT INTO `players`(`Pl_id`, `F_Name`, `L_Name`, `Age`, `Telephone`) VALUES ('$PLAYER','$F_NAME','$L_NAME','$AGE','$TELEPHONE')";
        $runinsert = mysqli_query($connect,$insert);
        if($runinsert){
            echo("<script>alert'Player Have Been Added'</script>");
            header("location:ViewPlayer.php");
        }
        else{
            die("<script>alert'inserted failed'</script>" . mysqli_error($connect));
        }
    }
    ?>
     <?php
        if(isset($_POST['update'])){
         $PLAYER = $_POST['Pl_id'];
        $F_NAME = $_POST['F_Name'];
        $L_NAME = $_POST['L_Name'];
        $AGE = $_POST['Age'];
        $TELEPHONE = $_POST['Telephone'];
    
        
            $update = "UPDATE `players` SET`F_Name`='$F_NAME',`L_Name`='$L_NAME',`Age`='$AGE',`Telephone`='$TELEPHONE' WHERE Pl_id = '$PLAYER'";
            $runupdate = mysqli_query($connect,$update);
            if($runupdate){
                echo"<script>alert('updated successfully')</script>"; 
                header('location:ViewPlayer.php');
               
            }
            else{
                die("update error" . mysqli_error($connect));
            }
        }
    
    ?>
</body>
</html>