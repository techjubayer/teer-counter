<?php
$server = "localhost";
$userName = "teerctkk_G_User";
$password = ")AQ=%=!+IESg";
$dataBase = "teerctkk_teerresults";


$tableName = "juwai_results";

$conn = mysqli_connect($server, $userName, $password, $dataBase);

$q = "SELECT * FROM `$tableName` ORDER BY `Date` DESC LIMIT 4";
$result = mysqli_query($conn, $q);
$num_of_rows = mysqli_num_rows($result);

$row = array();
for ($i = 0; $i < $num_of_rows; $i++) {
    array_push($row, array(mysqli_fetch_array($result)));
}
mysqli_close($conn);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juwai Results</title>
    <link rel="stylesheet" href="Style/styleMain.css">
</head>

<body>
    <main>
        <div class="mainDiv">
            <div class="titleDiv">
                <h2>Juwai Teer Result Today</h2>
                <h4>Date: (<?php echo $row[0][0]['Date']; ?>)</h4>
            </div>
            <div class="resultDiv">
                <div class="resultsubDiv">
                    <table>
                        <tr>
                            <td class="fstClm">
                                <div>
                                    <h2>First Round</h2>
                                    <label for="">(3:40 PM)</label>
                                </div>
                            </td>
                            <td class="scndClm">
                                <h1><?php echo $row[0][0]['F_R']; ?></h1>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="resultsubDiv">
                    <table>
                        <tr>
                            <td class="fstClm">
                                <div>
                                    <h2>Second Round</h2>
                                    <label for="">(4:40 PM)</label>
                                </div>
                            </td>
                            <td class="scndClm">
                                <h1><?php echo $row[0][0]['S_R']; ?></h1>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="verticalPreRDiv">
            <h2>Juwai Previous Results:</h2>
            <div class="mainPreRe">
                <img class="Image" src="Image/j.jpg" alt="Image Not Found">
                <div class="Vertical_Box">
                    <h3><?php echo $row[1][0]['Date'] ?></h3>
                    <h5>Juwai</h5>
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
                <img class="Image" src="Image/j.jpg" alt="Image Not Found">
                <div class="Vertical_Box">
                    <h3><?php echo $row[2][0]['Date'] ?></h3>
                    <h5>Juwai</h5>
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
                <img class="Image" src="Image/j.jpg" alt="Image Not Found">
                <div class="Vertical_Box">
                    <h3><?php echo $row[3][0]['Date'] ?></h3>
                    <h5>Juwai</h5>
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