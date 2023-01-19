<?php
    $server = "localhost";
    $userName = "teerctkk_G_User";
    $password = ")AQ=%=!+IESg";
    $dataBase = "teerctkk_teerresults";


    $tableName = "khanapara_results";

    $conn = mysqli_connect($server,$userName,$password,$dataBase);
    
    $q = "SELECT * FROM `$tableName` ORDER BY `Date` DESC LIMIT 4";
    $result = mysqli_query($conn,$q);
    $num_of_rows=mysqli_num_rows($result);
    
    $row = array();
    for($i=0;$i<$num_of_rows;$i++){
        array_push($row, array(mysqli_fetch_array($result)));
    }
    mysqli_close($conn);
    
    function getdateTimeDiff($thatTime){
        $nowTime = strtotime(date("Y-m-d H:i:s"));
        $timeDiff = $nowTime - $thatTime;
    
        if($timeDiff<60){
           return $timeDiff<=1 ? $timeDiff.' second ago': $timeDiff.' seconds ago';
        }elseif ($timeDiff>=60 && $timeDiff<3600){
            return round($timeDiff/60)<= 1 ? round($timeDiff/60).' minute ago': round($timeDiff/60).' minutes ago';
        }elseif ($timeDiff>=3600 && $timeDiff<86400){
            return round($timeDiff/3600) <= 1 ? round($timeDiff/3600).' hour ago': round($timeDiff/3600).' hours ago';
        }else {
            return round($timeDiff/86400) <= 1 ? round($timeDiff/86400).' day ago': round($timeDiff/86400).' days ago';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khanapara Results</title>
    <link rel="stylesheet" href="Style/style.css">
</head>
<body>
    <main>
        <div class="mainDiv">

            <h2>Khanapara Teer Result Today</h2>
            <h3>Date: (<?php echo $row[0][0]['Date']; ?>)</h3>
            <div class="todayResult">
                <h5><?php if($row[0][0]['FR_P_Time']==null){
                        echo "Coming at 4:00 PM";
                    }else{
                        echo getdateTimeDiff(strtotime($row[0][0]['FR_P_Time']));
                    } ?></h5>
                <h2>F/R:- <?php echo $row[0][0]['F_R']; ?></h2>
            </div>
            <div class="todayResult">
                <h5><?php 
                    if($row[0][0]['SR_P_Time']==null){
                        echo "Coming at 4:35 PM";
                    }else{
                        echo getdateTimeDiff(strtotime($row[0][0]['SR_P_Time']));
                    }
                    ?></h5>                
                <h2>S/R:- <?php echo $row[0][0]['S_R']; ?></h2>
            </div>
        </div>
        <div class="PreRe">
            <h2>Khanapara Previous Results:-</h2>
            <div class="mainPreRe">
                <img class="Image" src="Image/logo.png" alt="Image Not Found" style="float: left;">
                <div class="Vertical_Box" style="float: left;">
                    <h3><?php echo $row[1][0]['Date']; ?></h3>
                    <h5>Khanapara</h5>
                </div>
                <table class="Table">
                    <tr class="Header_row">
                        <td>F/R</td>
                        <td>S/R</td>
                    </tr>

                    <tr>
                        <th><?php echo $row[1][0]['F_R']; ?></th>                  
                        <th><?php echo $row[1][0]['S_R']; ?></th>
                    </tr>
                </table>
            </div>
            <div class="mainPreRe">
                <img class="Image" src="Image/logo.png" alt="Image Not Found" style="float: left;">
                <div class="Vertical_Box" style="float: left;">
                    <h3><?php echo $row[2][0]['Date']; ?></h3>
                    <h5>Khanapara</h5>
                </div>
                <table class="Table">
                    <tr class="Header_row">
                        <td>F/R</td>
                        <td>S/R</td>
                    </tr>

                    <tr>
                        <th><?php echo $row[2][0]['F_R']; ?></th>                  
                        <th><?php echo $row[2][0]['S_R']; ?></th>
                    </tr>
                </table>
            </div>
            <div class="mainPreRe">
                <img class="Image" src="Image/logo.png" alt="Image Not Found" style="float: left;">
                <div class="Vertical_Box" style="float: left;">
                    <h3><?php echo $row[3][0]['Date']; ?></h3>
                    <h5>Khanapara</h5>
                </div>
                <table class="Table">
                    <tr class="Header_row">
                        <td>F/R</td>
                        <td>S/R</td>
                    </tr>

                    <tr>
                        <th><?php echo $row[3][0]['F_R']; ?></th>                  
                        <th><?php echo $row[3][0]['S_R']; ?></th>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>