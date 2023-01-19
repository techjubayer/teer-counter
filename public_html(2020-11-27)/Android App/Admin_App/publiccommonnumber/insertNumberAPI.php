<?php
$server = "localhost";
$user = "teerctkk_admin";
$password = "d79TXI*+~Bt-";
$database = "teerctkk_teercommonnumber";


$table = "juwai_common";
$Date = $_POST["Date"];
$Numbers = $_POST["jCN"];
$House = $_POST["jCH"];
$Ending = $_POST["jCE"];

$conn = mysqli_connect($server, $user, $password, $database);
if(mysqli_connect_error()){
    echo "Connection fail due to: ";
}else{
    $query = "UPDATE `$table` SET `Date`='$Date',`Numbers`='$Numbers',`House`='$House',`Ending`='$Ending' WHERE 1";
    $status = mysqli_query($conn,$query) or die(mysqli_error($conn));
    if($status == 1){
        $table = "khanapara_common";
        $Numbers = $_POST["kCN"];
        $House = $_POST["kCH"];
        $Ending = $_POST["kCE"];
        $query = "UPDATE `$table` SET `Date`='$Date',`Numbers`='$Numbers',`House`='$House',`Ending`='$Ending' WHERE 1";
        $status = mysqli_query($conn,$query) or die(mysqli_error($conn));
        if($status == 1){
            $table = "shillong_common";
            $Numbers = $_POST["sCN"];
            $House = $_POST["sCH"];
            $Ending = $_POST["sCE"];
            $query = "UPDATE `$table` SET `Date`='$Date',`Numbers`='$Numbers',`House`='$House',`Ending`='$Ending' WHERE 1";
            $status = mysqli_query($conn,$query) or die(mysqli_error($conn));
            if($status == 1){
                echo "All Common Number Publish Successfully!";
            }else{
                echo "Something went wrong to publish Common Number!";
            }
        }
    }
}

mysqli_close($conn);
?>
