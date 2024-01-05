<?php
    include('config.php');
?>
<?php
ini_set("display_errors","off");
 ?>
<?php
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $select = "SELECT* FROM payments WHERE Py_id ='".$id."'";
        $runselect =mysqli_query($connect,$select);

        while($row =mysqli_fetch_array($runselect))
        {
            $PAYMENT = $row['Py_id'];
            $DATE = $row['Date'];
            $AMOUNT = $row['Amount'];
            $ADMIN = $row['Admin_id'];
            $PLAYER = $row['Pl_id'];


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
        <form action="Payments.php" method="POST">
           <div class="Reft-side">
            <h1>INSINZI FC</h1>
            <p>A Football Club of Junior-Players Located in Kigali City</p>
            <img src="image/undraw_Forms_re_pkrt.png" alt="image">
           </div>
           <div class="Right-side">
            <h1>Welcom To INSINZI FC</h1>
            <P>You can Add a Player Here</P><br><br>
            <input class="input" type="number" placeholder="Payment Id" name="Py_id" value="<?php echo $PAYMENT;?>"><br><br>
            <input class="input" type="date" placeholder="Date" name="Date" value="<?php echo $DATE;?>"><br><br>
            <input class="input" type="number" placeholder="Amount" name="Amount" value="<?php echo $AMOUNT;?>"><br><br>
            <select  class="input" name="Admin_id" id="" value="<?php echo $ADMIN;?>"> 
                <?php
                $select_code = mysqli_query($connect, "SELECT * FROM `admin`");
                foreach($select_code as $data){
                    ?>
                        <option  name="Admin_id" value="<?=$data['Admin_id']?>"><?=$data['u_Name']?></option>
                    <?php
                }

                ?>
            </select><br><br>
            <select  class="input" name="Pl_id" id="" value="<?php echo $PLAYER;?>"> 
                <?php
                $select_code = mysqli_query($connect, "SELECT * FROM `players`");
                foreach($select_code as $data){
                    ?>
                        <option  name="Pl_id" value="<?=$data['Pl_id']?>"><?=$data['F_Name']?> <?=$data['L_Name']?></option>
                    <?php
                }

                ?>
            </select><br><br>
            <input class="btn" type="submit" name="payment" value="ADD"><br><br>
            <input class="btn" type="submit" name="updates" value="UPDATE"><br><br>
            <p>View Player Here<a href="View_Payment.php"> View</a></p>
           </div>
        </form>
    </div>
    <?php
    if(isset($_POST['payment'])){
        $PAYMENT = $_POST['Py_id'];
        $DATE = $_POST['Date'];
        $AMOUNT = $_POST['Amount'];
        $ADMIN = $_POST['Admin_id'];
        $PLAYER = $_POST['Pl_id'];

        $insert = "INSERT INTO payments(`Py_id`, `Date`, `Amount`, `Admin_id`, `Pl_id`) VALUES ('$PAYMENT','$DATE','$AMOUNT','$ADMIN','$PLAYER')";
        $runinsert = mysqli_query($connect,$insert);
        if($runinsert){
            echo("<script>alert'Payment Have Been Added'</script>");
            header("location:View_Payment.php");
        }
        else{
            die("<script>alert'inserted failed'</script>" . mysqli_error($connect));
        }
    }
    ?>
         <?php
        if(isset($_POST['updates'])){
            $PAYMENT = $_POST['Py_id'];
            $DATE = $_POST['Date'];
            $AMOUNT = $_POST['Amount'];
            $ADMIN = $_POST['Admin_id'];
            $PLAYER = $_POST['Pl_id'];
    
        
            $update = "UPDATE `payments` SET `Date`='$DATE',`Amount`='$AMOUNT',`Admin_id`='$ADMIN',`Pl_id`='$PLAYER' WHERE `Py_id`='$PAYMENT'";
            $runupdate = mysqli_query($connect,$update);
            if($runupdate){
                echo"<script>alert('updated successfully')</script>"; 
                header("location:View_Payment.php");
               
            }
            else{
                die("update error" . mysqli_error($connect));
            }
        }
    
    ?>
</body>
</html>