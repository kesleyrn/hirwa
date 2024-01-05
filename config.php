<?php
    $connect = mysqli_connect("localhost","root","","payments");
    if($connect){
        // echo("connection successfully");
    }
    else{
        die("<script>alert'connection failed'</script>" . mysqli_connect_error());
    }

?>