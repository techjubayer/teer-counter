<!-- Version Code: 2 -->

<?php
// header("Access-Control-Allow-Origin");
$server = "localhost";
$user = "teerctkk_G_User";
$password = ")AQ=%=!+IESg";
$database = "teerctkk_teercommonnumber";
$conn = mysqli_connect($server, $user, $password, $database);
if(mysqli_connect_error()){
    echo "Fail to connect database!";
}
else{
    $query = "SELECT * FROM juwai_common INNER JOIN khanapara_common ON juwai_common.Date = khanapara_common.Date INNER JOIN shillong_common ON juwai_common.Date = shillong_common.Date";
    $data = mysqli_query($conn,$query);
    $num_rows = mysqli_num_rows($data);
    $rows = array();
    for($i=0;$i<$num_rows;$i++){
        array_push($rows,mysqli_fetch_row($data));
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
    
</head>
<body>
    <div class="commonNumberContainer">
        <h2 id="Date1">Juwai C_N <br> Date: <?php echo $rows[0][0];?></h2>
        <div>
            <table class="commonNumberTable">
                <tr>
                    <th>Numbers</th>
                    <th>House</th>
                    <th>Ending</th>
                </tr>
                <tr>
                    <td id="juwaiCommonNumber"><?php echo nl2br($rows[0][1]);?></td>
                    <td id="juwaiCommonHouse"><?php echo $rows[0][2];?></td>
                    <td id="juwaiCommonEnding"><?php echo $rows[0][3];?></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button onclick="makeJCN()">Change</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="commonNumberContainer">
        <h2 id="Date2">Khanapara C_N <br> Date: <?php echo $rows[0][4];?></h2>
        <div>
            <table class="commonNumberTable">
                <tr>
                    <th>Numbers</th>
                    <th>House</th>
                    <th>Ending</th>
                </tr>
                <tr>
                    <td id="khanaparaCommonNumber"><?php echo nl2br($rows[0][5]);?></td>
                    <td id="khanaparaCommonHouse"><?php echo $rows[0][6];?></td>
                    <td id="khanaparaCommonEnding"><?php echo $rows[0][7];?></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button onclick="makeKCN()">Change</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="commonNumberContainer">
        <h2 id="Date3">Shillong C_N <br> Date: <?php echo $rows[0][8];?></h2>
        <div>
            <table class="commonNumberTable">
                <tr>
                    <th>Numbers</th>
                    <th>House</th>
                    <th>Ending</th>
                </tr>
                <tr>
                    <td id="shillongCommonNumber"><?php echo nl2br($rows[0][9]);?></td>
                    <td id="shillongCommonHouse"><?php echo $rows[0][10];?></td>
                    <td id="shillongCommonEnding"><?php echo $rows[0][11];?></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button onclick="makeSCN()">Change</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <h4 id="Status">Status</h4>
    <!--<label id="Status" for=""></label>-->
    <button id="rsltPublish" onclick="commonNumberPulish()">Publish Result</button>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="logic.js"></script>
    
</body>
</html>