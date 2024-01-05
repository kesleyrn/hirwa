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
        <style>
                table {
                font:"Jost", sans-serif;
                border-collapse: collapse;
                width: 100%;
                position: absolute;
                left: 7vh;
                top: 66vh;
                border-radius: 10px;

    
                
                }
                td, th {
                text-align: left;
                padding:15px;
                color: black;
                border-bottom: 1px solid rgb(255,255,255,0.2);
                font: 18px "Jost", sans-serif;
                background-color: rgba(236, 236, 236, 0.945);
                backdrop-filter: blue(5px);
                
                }
                button{
                    width: 28vh;
                    height: 40px;
                    background-color: rgba(236, 236, 236, 0.945);
                    outline: none;
                    border: none ;
                    font-size: 18px;
                    font-weight: 500;
                    color: rgb(0, 0, 0);
                    border-radius: 20px;
                    cursor: pointer;
                    position: absolute;
                    left: 45vh;
                    top: 10px;
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
                .report{
                position: absolute;
                left: 45vh;
                top: -70px;
                }
            </style>
            <a href="index.php"><button>Back</button></a>

            <div class="report"><br><br><br>
    <br>
    <br>
    <br>
    <br>
    <form action="report.php" method="post">
        <div class="flex">
            <div class="flex1">
        <label>from:</label>
        <input class="input" type="date" name="fromdate" required/><br><br><br><br>
        </div>
        <div class="flex2">
        <label>to:</label>
        <input class="input" type="date" name="todate" required/><br>
        <br>
        <br>
        </div>
        </div>
        <input class="btn" type="submit" name="generate" value="Generate" id="gen">
    </form>
    <?php
if(isset($_POST['generate'])) {
    $fromdate=$_POST['fromdate'];
    $todate=$_POST['todate'];

    $sql="SELECT * FROM payments WHERE Date BETWEEN '$fromdate' AND '$todate'";
    $results=mysqli_query($connect,$sql);
      if(mysqli_num_rowS($results) > 0) {
        while ($row=mysqli_fetch_array($results)) {
            $PAYMENT = $row['Py_id'];
            $DATE = $row['Date'];
            $AMOUNT = $row['Amount'];
            $ADMIN = $row['Admin_id'];
            $PLAYER = $row['Pl_id'];
                        ?>
                        <table>
                            <tr>
                    <th>Payment Id</th>
                    <th>Date</th>
                    <th>Amaunt</th>
                    <th>Admin Id</th>
                    <th>Player Id</th>
                            </tr>
                        
                        <tr>
                        <td><?php echo $PAYMENT;?></td>
                        <td><?php echo $DATE;?></td>
                        <td><?php echo $AMOUNT;?></td>
                        <td><?php echo $ADMIN;?></td>
                        <td><?php echo $PLAYER;?></td>
                        </tr>
                        </table>
                        <?php
        }
    } else{
        echo"No Results Found";
    }
}
?>
    </div>
</body>
</html>