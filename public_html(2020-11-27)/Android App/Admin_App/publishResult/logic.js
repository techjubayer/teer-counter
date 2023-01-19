let date = new Date();
let m,d;
date.getMonth()<9? m="0"+(date.getMonth()+1): m=date.getMonth()+1;
date.getDate()>9? d=date.getDate(): d="0"+date.getDate();
document.getElementById("Date").value = date.getFullYear()+"-"+m+"-"+d;

$(document).ready(function(){
    $("#submitF_R").click(function(){
        let slctrInx = document.getElementById("placeSelect").selectedIndex;
        
        if (slctrInx==0) {
            var slctdPlce = "Juwai";
        }else if (slctrInx==1) {
            var slctdPlce = "Khanapara";
        }else{
            var slctdPlce = "Shillong";

        }
        
        let sendData = {
            Place : slctdPlce,
            Date : document.getElementById("Date").value,
            F_R : document.getElementById("F_R").value
        }

        if(parseInt(sendData.F_R) < 100 && sendData.F_R !== "" || sendData.F_R === "xx" || sendData.F_R === "Off"){
            
            $.post("http://teercounterofficial.com/TeerMobileOfficialApp/Admin_App/publishResult/insertResult.php",sendData, function(data,status){
                // console.log(data);
                // console.log(status);
                if(status == "success"){
                    $("#status").html(data);
                    document.getElementById("F_R").value = "";
                }else{
                    $("#status").html(data);					
                }
            });
        }else{
            $("#status").html("Something is Wrong in F_R!");
        }
    });

    $("#submitS_R").click(function(){
        let slctrInx = document.getElementById("placeSelect").selectedIndex;
        
        if (slctrInx==0) {
            var slctdPlce = "Juwai";
        }else if (slctrInx==1) {
            var slctdPlce = "Khanapara";
        }else{
            var slctdPlce = "Shillong";
        }
        
        let sendData = {
            Place : slctdPlce,
            Date : document.getElementById("Date").value,
            S_R : document.getElementById("S_R").value
        }

        if(parseInt(sendData.S_R) < 100 && sendData.S_R !== "" || sendData.S_R === "xx" || sendData.S_R === "Off"){
            $.post("http://teercounterofficial.com/TeerMobileOfficialApp/Admin_App/publishResult/insertResult.php",sendData, function(data,status){
                if(status == "success"){
                    $("#status").html(data);
                    document.getElementById("S_R").value = "";
                }else{
                    $("#status").html(data); 							
                }
            });
        }else{
            $("#status").html("Something is Wrong in S_R!");
        }
    });
});