<?php
$server = "localhost";
$user = "teerctkk_admin";
$password = "d79TXI*+~Bt-";
$database = "teerctkk_teerresults";

	$place = $_POST['Place'];   
    $Date = $_POST['Date'];

    $conn = mysqli_connect($server, $user, $password, $database);
    if(mysqli_connect_error()){
        echo "Fail to connect database!";
    }else{
        $sql = "SELECT `Date` FROM `juwai_results` ORDER By `Date` DESC";
        $Data = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        $num_rows = mysqli_num_rows($Data);
        $row = array();
        for($i =0; $i<$num_rows; $i++){
            array_push($row,array(mysqli_fetch_array($Data))[0][0]);
        }
        if(in_array($Date,$row)){
            if($place == "Juwai"){
                if(isset($_POST['F_R'])){
                    jFR_Result_Update();
                }else if(isset($_POST['S_R'])){
                    jSR_Result_Update();
                }
            }else if($place == "Khanapara"){
                if(isset($_POST['F_R'])){
                    kFR_Result_Update();
                }else if(isset($_POST['S_R'])){
                    kSR_Result_Update();
                }
            }else if($place == "Shillong"){
                if(isset($_POST['F_R'])){
                    sFR_Result_Update();
                }else if(isset($_POST['S_R'])){
                    sSR_Result_Update();
                }   
            }
        }else{
            if($place == "Juwai"){
                if(isset($_POST['F_R'])){
                    jFR_All_Publish();
                }
            }else if($place == "Khanapara"){
                if(isset($_POST['F_R'])){
                    kFR_All_Publish();
                }
            }else if($place == "Shillong"){
                if(isset($_POST['F_R'])){
                    sFR_All_Publish();
                }
            }
        }
    }
    function jFR_Result_Update(){
        global $Date;
        global $conn;
        $table = "juwai_results";
        $F_R = $_POST['F_R'];
        $sql = "UPDATE `$table` SET `F_R` = '$F_R', `FR_P_Time` = current_timestamp() WHERE `$table`.`Date` = '$Date'";
        $status = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($status == 1){
            echo "Juwai F_R result Updated!";
        }
    }
    function jSR_Result_Update(){
        global $Date;
        global $conn;
        $table = "juwai_results";
        $S_R = $_POST['S_R'];
        $sql = "UPDATE `$table` SET `S_R` = '$S_R', `SR_P_Time` = current_timestamp() WHERE `$table`.`Date` = '$Date'";
        $status = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($status == 1){
            echo "Juwai S_R result Updated!";
        }
    }
    function kFR_Result_Update(){
        global $Date;
        global $conn;
        $table = "khanapara_results";
        $F_R = $_POST['F_R'];
        $sql = "UPDATE `$table` SET `F_R` = '$F_R', `FR_P_Time` = current_timestamp() WHERE `$table`.`Date` = '$Date'";
        $status = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($status == 1){
            echo "Khanapara F_R result Updated!";
        }
    }
    function kSR_Result_Update(){
        global $Date;
        global $conn;
        $table = "khanapara_results";
        $S_R = $_POST['S_R'];
        $sql = "UPDATE `$table` SET `S_R` = '$S_R', `SR_P_Time` = current_timestamp() WHERE `$table`.`Date` = '$Date'";
        $status = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($status == 1){
            echo "Khanapara S_R result Updated!";
        }
    }
    function sFR_Result_Update(){
        global $Date;
        global $conn;
        $table = "shillong_results";
        $F_R = $_POST['F_R'];
        $sql = "UPDATE `$table` SET `F_R` = '$F_R', `FR_P_Time` = current_timestamp() WHERE `$table`.`Date` = '$Date'";
        $status = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($status == 1){
            echo "Shillong F_R result Updated!";
        }
    }
    function sSR_Result_Update(){
        global $Date;
        global $conn;
        $table = "shillong_results";
        $S_R = $_POST['S_R'];
        $sql = "UPDATE `$table` SET `S_R` = '$S_R', `SR_P_Time` = current_timestamp() WHERE `$table`.`Date` = '$Date'";
        $status = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($status == 1){
            echo "Shillong S_R result Updated!";
        }
    }
    function jFR_All_Publish(){
        global $Date;
        global $conn;
        $table = "juwai_results";
        $F_R = $_POST['F_R'];
        $sql ="INSERT INTO `$table` (`Date`, `F_R`, `FR_P_Time`) VALUES ('$Date', '$F_R', current_timestamp())";
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($result == 1){
            $table = "khanapara_results";
            $sql ="INSERT INTO `$table` (`Date`, `F_R`) VALUES ('$Date', 'xx')";
            $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($result == 1){
                $table = "shillong_results";
                $sql ="INSERT INTO `$table` (`Date`, `F_R`) VALUES ('$Date', 'xx')";
                $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                if($result == 1){
                    echo "All results with Juwai Insert Successfully!";
                }
            }            
        }
    }
    function kFR_All_Publish(){
        global $Date;
        global $conn;
        $table = "khanapara_results";
        $F_R = $_POST['F_R'];
        $sql ="INSERT INTO `$table` (`Date`, `F_R`, `FR_P_Time`) VALUES ('$Date', '$F_R', current_timestamp())";
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($result == 1){
            $table = "juwai_results";
            $sql ="INSERT INTO `$table` (`Date`, `F_R`) VALUES ('$Date', 'xx')";
            $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($result == 1){
                $table = "shillong_results";
                $sql ="INSERT INTO `$table` (`Date`, `F_R`) VALUES ('$Date', 'xx')";
                $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                if($result == 1){
                    echo "All results with Khanapara Insert Successfully!";
                }
            }            
        }
    }
    function sFR_All_Publish(){
        global $Date;
        global $conn;
        $table = "shillong_results";
        $F_R = $_POST['F_R'];
        $sql ="INSERT INTO `$table` (`Date`, `F_R`, `FR_P_Time`) VALUES ('$Date', '$F_R', current_timestamp())";
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($result == 1){
            $table = "juwai_results";
            $sql ="INSERT INTO `$table` (`Date`, `F_R`) VALUES ('$Date', 'xx')";
            $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($result == 1){
                $table = "khanapara_results";
                $sql ="INSERT INTO `$table` (`Date`, `F_R`) VALUES ('$Date', 'xx')";
                $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                if($result == 1){
                    echo "All results with Shillong Insert Successfully!";
                }
            }            
        }
    }


mysqli_close($conn);

?>