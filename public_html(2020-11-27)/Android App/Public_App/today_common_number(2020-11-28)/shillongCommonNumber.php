<?php
$server = "localhost";
$user = "teerctkk_G_User";
$password = ")AQ=%=!+IESg";
$database = "teerctkk_teercommonnumber";
$conn = mysqli_connect($server, $user, $password, $database);
if (mysqli_connect_error()) {
    echo "Fail to connect database!";
} else {
    $query = "SELECT * FROM shillong_common";
    $data = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($data);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shillong Common Number</title>
    <link rel="stylesheet" href="Style/newStyle.css">
</head>

<body>
    <main>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- AppCNDisplay -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-5590713411868058"
             data-ad-slot="7866956543"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <div class="mainDiv">
            <h2>Shillong Teer Common Number</h2>
            <h3>(Date: <?php echo $row[0]; ?>)</h3>
            <div class="todayResult todayCN">
                <h4>Today's Common Numbers</h4>
                <h3><?php echo nl2br($row[1]); ?></h3>
            </div>
            <div class="todayResult">
                <table class="cNTable">
                    <tr>
                        <th>House</th>
                        <th>Ending</th>
                    </tr>
                    <tr>
                        <td><?php echo substr($row[2], 0, 1); ?></td>
                        <td><?php echo substr($row[3], 0, 1); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo substr($row[2], 3, 1); ?></td>
                        <td><?php echo substr($row[3], 3, 1); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>