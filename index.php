
<?php
    include('config.php');
    session_start();
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
            <div class="Middle-up">
                <h1>WELCOME <?php echo  $_SESSION['u_Name']; ?></h1>
                <div class="staff">
                    <div class="name">
                        <h1>President :</h1>
                        <p>JEFF Muhinyuza</p>
                    </div>
                    <div class="name">
                        <h1>Manager :</h1>
                        <p>DRECK Gato</p>
                    </div>
                    <div class="name">
                        <h1>Secretary :</h1>
                        <p>JEANNE Kayitare</p>
                    </div>
                    
                    <div class="name">
                        <h1>Captain :</h1>
                        <p>RICO Pie</p>
                    </div>                    
                    
                    
                </div>
            </div>
        </div>
        <div class="Left-Right">
            <div class="place">
                <h3>Place Announcement:</h3><br>
                <h2>Fitness test for players</h2><br>
                <p>On 30th November 2023</p><br>
            </div>
            <div class="link-Right">
                <h3>LINKS</h3><br>
                <p>FERWAFA: <a href="#">http://www.ferwaf.rw</a></p><br>
                <P>FIFA: <a href="#">http://www.fifa.com</a></P><br>
                <P>MINISANTE: <a href="#">http://www.moh.gov.rw</a></P><br>
                
            </div>
        </div>
    </div>
</body>
</html>