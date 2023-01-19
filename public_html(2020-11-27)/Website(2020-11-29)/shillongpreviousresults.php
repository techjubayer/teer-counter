<?php
$con=mysqli_connect('localhost', 'teerctkk_G_User', ')AQ=%=!+IESg');
mysqli_select_db($con,'teerctkk_teerresults');
$q="select * from shillong_results ORDER BY `Date` DESC";
$result=mysqli_query($con,$q);

$num_of_rows=mysqli_num_rows($result);

mysqli_close($con);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shillong Teer Previous Results || Teer Counter Official</title>
    <meta name="description" content="Teer Counter (Official) - We provide Juwai, Khanapara & Shillong Teer Result on daily basis and also the teer common numbers for each games in various pages" />
    <link rel="shortcut icon" href="Image/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Style/main.css">
    <link rel="stylesheet" href="Style/previousResult.css">
    <link rel="stylesheet" href="Style/header.css">
    <link rel="stylesheet" href="Style/footer.css">
</head>

<body>
    <header>
        <img src="Image/logo.png" alt="Image">
        <h3>Teer Counter Official</h3>
        <i id="openNav" class="fa fa-bars" aria-hidden="true"></i>
        <input id="navCheckbox" type="checkbox" onclick="showSideBar()" />
    </header>
    <main>
        <aside id="leftAside" class="leftAside">
            <ul class="navUl">
                <li onclick="callHome()">
                    <svg width="18px" height="18px" viewBox="0 0 16 16" class="hsvg bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z" />
                        <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    </svg>
                    Home
                </li>
                <li>
                    <svg width="18px" height="18px" viewBox="0 0 16 16" class="hsvg bi bi-calendar-event-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
                    </svg>
                    Previous Results
                    <ul class="navSubUl">
                        <li onclick="callSPR()">
                            <svg width="18px" height="18px" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                            Shillong P.R
                        </li>
                        <li onclick="callKPR()">
                            <svg width="18px" height="18px" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                            Khanapara P.R</li>
                        <li onclick="callJPR()">
                            <svg width="18px" height="18px" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                            Juwai P.R
                        </li>
                    </ul>
                </li>
                <li onclick="callDream()">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="hsvg bi bi-moon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z" />
                    </svg>
                    Dream Numbers
                </li>
                <li onclick="callApp()">
                    <svg width="18px" height="18px" viewBox="0 0 16 16" class="hsvg bi bi-bag-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
                    </svg>
                    Mobile App
                </li>
                <li onclick="callAboutUs()">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="hsvg bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                    </svg>
                    About Us
                </li>
                <li onclick="callPrivacy()">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="hsvg bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z" />
                        <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                    </svg>
                    Privacy
                </li>
            </ul>
        </aside>

        <section>
            <div class="mainDiv teerDscrptn">
                <h3>Looking for Shillong Teer Previous results list?</h3>
                <br>
                <p class="pDscrptn">You have come to perfect place <b>Teer Counter Official</b>, scroll down to see all the shillong previous results. You can easily get the detailed insights about the Shillong’s old teer results for past days numbers. We have also presented this info on dedicated page where all the related details are also present. You can spend a samll part of your valueable time and obtain much more details of this game. Learn and further try to improve your game so that you can achieve more better result. We know that you want be successful in the game like a professional players and we are with you.</p>
            </div>
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- DisplayAdSquare1 -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-5590713411868058"
                 data-ad-slot="9122389971"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <div class="mainprDiv">
                <h2>Shillong Previous Results</h2>
                <table class="prTable">
                    <thead>
                        <tr>
                            <th>Place</th>
                            <th>Date</th>
                            <th>F/R</th>
                            <th>S/R</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
				        for($i=0;$i<$num_of_rows;$i++){
					    $row=mysqli_fetch_array($result);
			        ?>
                        <tr>
                            <td>Shillong</td>
                            <td><?php echo $row['Date']?></td>
                            <td><?php echo $row['F_R'];?></td>
                            <td><?php echo $row['S_R'];?></td>
                        </tr>
                    <?php
			
                        }
                    ?>
                    </tbody>
                </table>
            </div>
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- DisplayAdSquare1 -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-5590713411868058"
                 data-ad-slot="9122389971"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <div class="mainDiv">
                <p><b>Beware:-</b> The Shillong, Khanapara and Juwai archery game is played by professional players but no one can tell the exact consequences in advance. If anyone is telling that he/she will let you know the end number of the result and demand money for this, then it can’t be happen. So don’t trust any unknown person or data. Always double check the final judgments with online and local counters to ensure the right figures.</p>
                <br>
                <hr>
                <br>
                <p class="pDscrptn">Always focus on your skill improvement so that you can create better history in the Shillong, Khanapara and Juwai Teer Game. In this page we provide the complete yearly Shillong, Khanapara and Juwai previous results for free with 100% accurate list. There are lots of advantages of to look back on previous teer results. We know all the teer games is a number game where the resultent numbers outcome at the end of the day. So keeping eye on previous results will help you to succed in today's teer game. Good luck...</p>
            </div>
        </section>

        <aside class="rightAside">
             <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Side Display Ad -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-5590713411868058"
                 data-ad-slot="6155539189"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </aside>
    </main>
    <footer class="siteFooter">
        <div>
            <h6>About</h6>
            <p class="text-justify">
                <a href="http://teercounterofficial.com/">Teer Counter Official</a>
                is a simple blog which collects Shillong, Khanapara and Juwai Teer Results from various sources and displays the Teer Game results on regular basis. We are not responsible for any wrong results displayed here. If someone provide service on behalf of us then we are not responsible for that as we publish results only and never approach anybody with an intention of selling any services. This is completely free blog to be used for viewing daily results and hit numbers only. For accuracy we suggest viewers to appoach local legal teer counters of Shillong, Khanapara and Juwai. Along with that we also provide dream numbers, common numbers, previous results. Our site must be used as information purpose only. We neither motivate anyone to play Archery Teer game nor creating any barrier for playing such games. Consider our site as similar to those who provides job advertisement and exam results.
            </p>
        </div>
        <div class="footerMainDiv">
            <div class="linkContainer linkContainerL">
                <h6>Categories</h6>
                <ul class="footer-links">
                    <li><a href="http://teercounterofficial.com/">Home Page</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                    <li><a href="https://play.google.com/store/apps/details?id=com.sufideveloper.teer&hl=en_IN">Android App</a></li>
                </ul>
            </div>
            <div class="linkContainer linkContainerR">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="http://teercounterofficial.com/">Teer Results</a></li>
                    <li><a href="shillongpreviousresults.php">Shillong Previous Results</a></li>
                    <li><a href="khanaparapreviousresults.php">Khanapara Previous Results</a></li>
                    <li><a href="juwaipreviousresults.php">Juwai Previous Results</a></li>
                    <li><a href="dreamnumbers.html">Teer Dream Numbers</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="crtDiv col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
                    <a href="#">Sufi Developer</a>.
                </p>
            </div>
            <div class=" crtDiv col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="https://www.facebook.com/Teer-Counter-Official-285405812005113/"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="https://www.facebook.com/Teer-Counter-Official-285405812005113/"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="https://www.facebook.com/Teer-Counter-Official-285405812005113/"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="https://www.facebook.com/Teer-Counter-Official-285405812005113/"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>


    
    <script src="Works/nav.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>