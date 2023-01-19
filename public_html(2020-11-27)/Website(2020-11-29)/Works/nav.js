let checkbox = document.getElementById("navCheckbox");
        function showSideBar(){
            if(checkbox.checked == true){
                document.getElementById("leftAside").style.visibility = "visible";
                document.getElementById("leftAside").style.opacity = 1;
                document.getElementById("leftAside").style.transform = "rotateX(0deg)";
                document.getElementById("leftAside").style.right = 0;
            }else{
                document.getElementById("leftAside").style.visibility = "hidden";
                document.getElementById("leftAside").style.opacity = 0;
                document.getElementById("leftAside").style.transform = "rotateX(270deg)";
                document.getElementById("leftAside").style.right = "100%";
            }
        }
        function callHome(){
            window.location.href = "index.php";
        }
        function callSPR(){
            window.location.href = "shillongpreviousresults.php";
        }
        function callKPR(){
            window.location.href = "khanaparapreviousresults.php";
        }
        function callJPR(){
            window.location.href = "juwaipreviousresults.php";
        }
        function callDream(){
            window.location.href = "dreamnumbers.html";
        }
        function callApp(){
            window.open("https://play.google.com/store/apps/details?id=com.sufideveloper.teer");
        }
        function callAboutUs(){
            window.location.href = "aboutus.html";
        }
        function callPrivacy(){
            window.location.href = "privacy.html";
        }