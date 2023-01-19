// Version Code: 2



let date = new Date();
let m,d;
date.getMonth()<9? m="0"+(date.getMonth()+1): m=date.getMonth()+1;
date.getDate()>9? d=date.getDate(): d="0"+date.getDate();
toDate = date.getFullYear()+"-"+m+"-"+d;


let jCN = document.getElementById("juwaiCommonNumber");
let jCH = document.getElementById("juwaiCommonHouse");
let jCE = document.getElementById("juwaiCommonEnding");
let kCN = document.getElementById("khanaparaCommonNumber");
let kCH = document.getElementById("khanaparaCommonHouse");
let kCE = document.getElementById("khanaparaCommonEnding");
let sCN = document.getElementById("shillongCommonNumber");
let sCH = document.getElementById("shillongCommonHouse");
let sCE = document.getElementById("shillongCommonEnding");

function makeJCN(){
    document.getElementById("Date1").innerText = "Juwai C_N \n Date: "+toDate;
    let innerNumber = "";
    for (let i =0; i<8; i++){
        let number = Math.floor(Math.random() * 100);
        if(number<10){
            number = "0"+number;
        }
        if(i == 4){
            // number = number + "<br>";
            innerNumber = innerNumber+number+"<br>";
        }else{
            if(i<7){
                innerNumber = innerNumber+number+", ";
            }else{
                innerNumber = innerNumber+number;
            }
        }            
    }
    jCN.innerHTML = innerNumber;
    delete innerNumber;
    jCH.innerHTML = Math.floor(Math.random()*10)+", "+Math.floor(Math.random()*10);
    jCE.innerHTML = Math.floor(Math.random()*10)+", "+Math.floor(Math.random()*10);
}
function makeKCN(){
    document.getElementById("Date2").innerText = "Khanapara C_N \n Date: "+toDate;
    let innerNumber = "";
    for (let i =0; i<8; i++){
        let number = Math.floor(Math.random() * 100);
        if(number<10){
            number = "0"+number;
        }
        if(i == 4){
            // number = number + "<br>";
            innerNumber = innerNumber+number+"<br>";
        }else{
            if(i<7){
                innerNumber = innerNumber+number+", ";
            }else{
                innerNumber = innerNumber+number;
            }
        }
    }
    kCN.innerHTML = innerNumber;
    delete innerNumber;
    kCH.innerHTML = Math.floor(Math.random()*10)+", "+Math.floor(Math.random()*10);
    kCE.innerHTML = Math.floor(Math.random()*10)+", "+Math.floor(Math.random()*10);
}
function makeSCN(){
    document.getElementById("Date3").innerText = "Shillong C_N \n Date: "+toDate;
    let innerNumber = "";
    for (let i =0; i<8; i++){
        let number = Math.floor(Math.random() * 100);
        if(number<10){
            number = "0"+number;
        }
        if(i == 4){
            innerNumber = innerNumber+number+"<br>";
        }else{
            if(i<7){
                innerNumber = innerNumber+number+", ";
            }else{
                innerNumber = innerNumber+number;
            }
        }
}
sCN.innerHTML = innerNumber;
delete innerNumber;
sCH.innerHTML = Math.floor(Math.random()*10)+", "+Math.floor(Math.random()*10);
sCE.innerHTML = Math.floor(Math.random()*10)+", "+Math.floor(Math.random()*10);
}

function commonNumberPulish(){
    let sendData = {
            Date : toDate,
            jCN : jCN.innerText,
            jCH: jCH.innerText,
            jCE: jCE.innerText,
            kCN : kCN.innerText,
            kCH: kCH.innerText,
            kCE: kCE.innerText,
            sCN : sCN.innerText,
            sCH: sCH.innerText,
            sCE: sCE.innerText
        }
    $.post("http://teercounterofficial.com/TeerMobileOfficialApp/Admin_App/publiccommonnumber/insertNumberAPI.php",sendData, function(data,status){
                if(status == "success"){
                    $("#Status").html(data);
                }else{
                    $("#Status").html(data);					
                }
            });
}