<?php
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hirwa</title>
</head>
<body>
    <div class="container">
        <div class="home">
            <div class="link">
                <ul>
                    <li><img src="image/dashboard.png" alt=""><a href="index.php"><p>Home</p></a></li><br><br><br>
                    <li><img src="image/members.png" alt=""><a href="#"><p>News</p></a></li><br><br><br>
                    <li><img src="image/projects.png" alt=""><a href="#"><p>About</p></a></li><br><br><br>
                    <li><img src="image/reports.png" alt=""><a href="report.php"><p>Reports</p></a></li><br><br><br>
                    <li><img src="image/rewards.png" alt=""><a href="Data_Entry.php"><p>Data-Entry</p></a></li><br><br><br><br>
                    <li><img src="image/logout.png" alt=""><a href="login.php"><p>Logout</p></a></li>
                
                </ul>
            </div>
        </div>
        <div class="box1">
            <h1><?php $select = mysqli_query($connect, "SELECT * FROM `players`"); echo mysqli_num_rows($select);?></h1>
            <h1>PLAYERS</h1><br><br>
            <a href="ViewPlayer.php">View</a>
        </div>
        <div class="box2">
            <h1><?php $select = mysqli_query($connect, "SELECT * FROM `payments`"); echo mysqli_num_rows($select);?></h1>
            <h1>PAYMENTS</h1><br><br>
            <a href="View_Payment.php">View</a>
        </div>
    </div>
</body>
</html>