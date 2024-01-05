<?php
    include('config.php');
?>
    <?php
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $delete = "DELETE FROM players WHERE Pl_id = '$id'";
        $rundelete = mysqli_query($connect,$delete);
        if($rundelete){
            echo("<script>alert('deleted successfully')</script>");
            header("location:ViewPlayer.php");
        }
        else{
            die("<script>alert('deleted failed')</script>" . mysqli_error($connect));
        }
        }

?>
<?php
    if(isset($_GET['deleteid2'])){
        $id = $_GET['deleteid2'];

        $delete = "DELETE FROM payments WHERE Py_id = '$id'";
        $rundelete = mysqli_query($connect,$delete);
        if($rundelete){
            echo("<script>alert('deleted successfully')</script>");
            header("location:View_Payment.php");
        }
        else{
            die("<script>alert('deleted failed')</script>" . mysqli_error($connect));
        }
        }

?>