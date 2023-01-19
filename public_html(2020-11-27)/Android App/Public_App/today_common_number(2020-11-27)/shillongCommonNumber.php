<?php
$server = "localhost";
$user = "teerctkk_G_User";
$password = ")AQ=%=!+IESg";
$database = "teerctkk_teercommonnumber";
$conn = mysqli_connect($server, $user, $password, $database);
if(mysqli_connect_error()){
    echo "Fail to connect database!";
}
else{
    $query = "SELECT * FROM shillong_common";
    $data = mysqli_query($conn,$query);
    $row = mysqli_fetch_row($data);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shillong Common Number</title>
    <link rel="stylesheet" href="Style/style.css">
    
</head>
<body>
    <div class="commonNumberContainer">
        <h2 id="Date1">Shillong Common Number</h2>
        <h4>Date: (<?php echo $row[0]; ?>)</h4>
        <div>
            <table class="commonNumberTable">
                <tr>
                    <th>Numbers</th>
                    <th>House</th>
                    <th>Ending</th>
                </tr>
                <tr>
                    <td><?php echo nl2br($row[1]); ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>
                </tr>
            </table>
        </div>
    </div>    
</body>
</html>