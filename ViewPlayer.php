<?php
    include('config.php');
?>
<?php
    include('delete.php');
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
        <style>
                table {
                font:"Jost", sans-serif;
                border-collapse: collapse;
                width: 70%;
                position: absolute;
                left: 45vh;
                top: 140px;
    
                
                }
                td, th {
                text-align: left;
                padding:15px;
                color: black;
                border-bottom: 1px solid rgba(121, 120, 168, 0.164);
                font: 18px "Jost", sans-serif;
                background-color: rgba(121, 120, 168, 0.164);
                backdrop-filter: blue(5px);
                backdrop-filter: blue(5px);
                
                }
                button{
                    width: 28vh;
                    height: 40px;
                    background-color: rgba(121, 120, 168, 0.164);
                    outline: none;
                    border: none ;
                    font-size: 18px;
                    font-weight: 500;
                    color: rgb(0, 0, 0);
                    border-radius: 20px;
                    cursor: pointer;
                    position: absolute;
                    left: 45vh;
                    top: 90px;
                }
                tr,td a{
                    text-decoration: none;
                    outline: none;
                    border: none ;
                    font-size: 18px;
                    font-weight: 500;
                    color: black;
                    border-radius: 20px;
                    cursor: pointer;   
                    
                }
            </style>
            <a href="Player.php"><button>ADD </button></a>

            <table >
                <tr>
                    <th>Player Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Telephone</th>
                    <th colspan="2">Commands</th>

                    <?php
                    $select = "SELECT * FROM `players`";
                    $runselect = mysqli_query($connect,$select);
                    while($row = mysqli_fetch_array($runselect)){
                        $PLAYER = $row['Pl_id'];
                        $F_NAME = $row['F_Name'];
                        $L_NAME = $row['L_Name'];
                        $AGE = $row['Age'];
                        $TELEPHONE = $row['Telephone'];
                    ?>
                    <tr>
                        <td><?php echo $PLAYER;?></td>
                        <td><?php echo $F_NAME;?></td>
                        <td><?php echo $L_NAME;?></td>
                        <td><?php echo $AGE;?></td>
                        <td><?php echo $TELEPHONE;?></td>
                        <td><a href="Player.php? id=<?php echo $PLAYER;?>">Update</a></td>
                        <td><a href="ViewPlayer.php? deleteid=<?php echo $PLAYER;?>">Delete</a></td>
                    </tr>
                    <?php
                    }
                    ?>
            </table >
    </div>
</body>
</html>