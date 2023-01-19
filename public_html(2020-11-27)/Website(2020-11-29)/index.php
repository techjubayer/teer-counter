<?php

$serverIP = "localhost";
$userName = "teerctkk_G_User";
$password = ")AQ=%=!+IESg";
$conn = mysqli_connect($serverIP, $userName, $password);

$teerResultDB = "SELECT * FROM `teerctkk_teerresults`.`juwai_results` INNER JOIN `teerctkk_teerresults`.`khanapara_results` ON juwai_results.Date = khanapara_results.Date INNER JOIN `teerctkk_teerresults`.`shillong_results` ON juwai_results.Date = shillong_results.Date  ORDER BY juwai_results.Date DESC LIMIT 1";
$result = mysqli_query($conn, $teerResultDB) or die(mysqli_error($conn));
$num_of_rows = mysqli_num_rows($result);
$rowResults = array();
for ($i = 0; $i < $num_of_rows; $i++) {
    array_push($rowResults, array(mysqli_fetch_array($result)));
}
// print_r($rowResults);

$commonNumberDB = "SELECT * FROM `teerctkk_teercommonnumber`.`shillong_common` INNER JOIN `teerctkk_teercommonnumber`.`khanapara_common` ON shillong_common.Date = khanapara_common.Date INNER JOIN `teerctkk_teercommonnumber`.`juwai_common` ON shillong_common.Date = juwai_common.Date  ORDER BY shillong_common.Date DESC LIMIT 1";
$result = mysqli_query($conn, $commonNumberDB) or die(mysqli_error($conn));
$num_of_rows = mysqli_num_rows($result);
$rowCommonNumbers = array();
for ($i = 0; $i < $num_of_rows; $i++) {
    array_push($rowCommonNumbers, array(mysqli_fetch_array($result)));
}
// print_r($rowCommonNumbers);

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
    <title>Teer Counter Official || Shillong, Khanapara (Guwahati), Juwai Teer Results</title>
    <meta name="description" content="Teer Counter Official || We provide Juwai, Khanapara & Shillong Teer Result on daily basis and also the teer common numbers for each games in various pages"/>
    <link rel="shortcut icon" href="Image/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Style/home.css">
    <link rel="stylesheet" href="Style/main.css">
    <link rel="stylesheet" href="Style/header.css">
    <link rel="stylesheet" href="Style/footer.css">
    <script data-ad-client="ca-pub-5590713411868058" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
    <header>
        <img src="Image/logo.png" alt="Image">
        <h3>Teer Counter Official</h3>
        <i id="openNav" class="fa fa-bars" aria-hidden="true"></i>
        <input id="navCheckbox" type="checkbox" onclick="showSideBar()"/>
    </header>
    <main>
        <aside id="leftAside" class="leftAside">
            <ul class="navUl">
                <li onclick="callHome()">
                    <svg width="18px" height="18px" viewBox="0 0 16 16" class="hsvg bi bi-house-door-fill"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z" />
                        <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    </svg>
                    Home
                </li>
                <li>
                    <svg width="18px" height="18px" viewBox="0 0 16 16" class="hsvg bi bi-calendar-event-fill"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
                    </svg>
                    Previous Results
                    <ul class="navSubUl">
                        <li onclick="callSPR()">
                            <svg width="18px" height="18px" viewBox="0 0 16 16" class="bi bi-geo-alt-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                            Shillong P.R
                        </li>
                        <li onclick="callKPR()">
                            <svg width="18px" height="18px" viewBox="0 0 16 16" class="bi bi-geo-alt-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                            Khanapara P.R</li>
                        <li onclick="callJPR()">
                            <svg width="18px" height="18px" viewBox="0 0 16 16" class="bi bi-geo-alt-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                            Juwai P.R
                        </li>
                    </ul>
                </li>
                <li onclick="callDream()">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="hsvg bi bi-moon" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z" />
                    </svg>
                    Dream Numbers
                </li>
                <li onclick="callApp()">
                    <svg width="18px" height="18px" viewBox="0 0 16 16" class="hsvg bi bi-bag-fill" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
                    </svg>
                    Mobile App
                </li>
                <li onclick="callAboutUs()">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="hsvg bi bi-person-circle" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        <path fill-rule="evenodd"
                            d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                    </svg>
                    About Us
                </li>
                <li onclick="callPrivacy()">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="hsvg bi bi-lock-fill" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z" />
                        <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                    </svg>
                    Privacy
                </li>
            </ul>
        </aside>

        <section>
            <div id="refreshDiv" onclick="callHome()"><label for="">Refresh</label></div>
            <div class="mainDiv teerDscrptn">
                <h2>Teer Results Today</h2>
                <p id="Intro" class="pDscrptn">Welcome to<b> Teer Counter (Official)</b>, In this site we provide Juwai,
                    Khanapara & Shillong Teer Result on daily basis. We also provide Teer Common Numbers, Previous
                    Results and Dream Numbers. Scroll-down to see the Teer Results & common numbers of Shillong,
                    Khanapara and Juwai.</p>
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

                <h1>Juwai Teer Result Today</h1>
                <h3>(Date: <?php echo $rowResults[0][0][0]; ?>)</h3>
                <div class="todayResult">
                    <h5><?php if($rowResults[0][0][3]==null){
                            echo "Comming Soon...";
                        }else{
                            echo getdateTimeDiff(strtotime($rowResults[0][0][3]));
                        } ?></h5>
                    <h1>F/R:- <?php echo $rowResults[0][0][1]; ?></h1>
                </div>
                <div class="todayResult">
                    <h5><?php 
                        if($rowResults[0][0][4]==null){
                            echo "Comming Soon...";
                        }else{
                            echo getdateTimeDiff(strtotime($rowResults[0][0][4]));
                        }
                        ?></h5>

                    
                    <h1>S/R:- <?php echo $rowResults[0][0][2]; ?></h1>
                </div>
            </div>
            <div class="mainDiv">
                <h1>Khanapara Teer Result Today</h1>
                <h3>(Date: <?php echo $rowResults[0][0][5]; ?>)</h3>
                <div class="todayResult">
                    <h5><?php if($rowResults[0][0][8]==null){
                            echo "Comming Soon...";
                        }else{
                            echo getdateTimeDiff(strtotime($rowResults[0][0][8]));
                        } ?></h5>
                    <h1>F/R:- <?php echo $rowResults[0][0][6]; ?></h1>
                </div>
                <div class="todayResult">
                    <h5>
                        <?php 
                        if($rowResults[0][0][9]==null){
                            echo "Comming Soon...";
                        }else{
                            echo getdateTimeDiff(strtotime($rowResults[0][0][9]));
                        }
                        ?>
                    </h5>
                    <h1>S/R:- <?php echo $rowResults[0][0][7]; ?></h1>
                </div>
            </div>
            <div class="mainDiv">
                <h1>Shillong Teer Result Today</h1>
                <h3>(Date: <?php echo $rowResults[0][0][10]; ?>)</h3>
                <div class="todayResult">
                    <h5><?php if($rowResults[0][0][13]==null){
                            echo "Comming Soon...";
                        }else{
                            echo getdateTimeDiff(strtotime($rowResults[0][0][13]));
                        } ?></h5>
                    <h1>F/R:- <?php echo $rowResults[0][0][11]; ?></h1>
                </div>
                <div class="todayResult">
                    <h5>
                        <?php 
                            if($rowResults[0][0][14]==null){
                                echo "Commong Soon...";
                            }else{
                                echo getdateTimeDiff(strtotime($rowResults[0][0][14]));
                            }
                        ?>
                    </h5>
                    <h1>S/R:- <?php echo $rowResults[0][0][12]; ?></h1>
                </div>
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
            <div class="mainDiv teerDscrptn">
                <h2>Teer Counter Description</h2>
                <p class="pDscrptn">All the game of Shillong, Khanapara and Juwai Teer is played from Monday to
                    Saturday. It is an archery-based lottery game, organized by some Archery Sports Association. There
                    are about 12 archery clubs that are a part of the association which organizes the Teer Games. We
                    keep record ordinary outcome date insightful it causes our guest to examine forthcoming arrow based
                    weaponry amusement. Previous is constantly imperative for a consistent Teer player on the off chance
                    that you play teer, you should have a record of past teer comes about. We keep rundown of past teer
                    result for one year or more.There are a large number of authorized Teer Betting counters operational
                    over the state. The Teer betting was legalised in 1982 after the state government understood that it
                    could be a decent source of income. The Teer betting in the state is currently controlled under the
                    Meghalaya Amusements and Betting Tax (Amendment) Act 1982.</p>
                <br>
                <hr>
                <br>
                <p><b>Shillong Teer Description:</b> Shillong Teer, an archery-based lottery, played from every Monday
                    to Saturday. The Khasi Hills Archery Sports Association, which is a group of 12 archery clubs, hosts
                    the lottery. The first-round number of Shillong Teer result is announced at 3:45 PM and the
                    second-round number of Shillong Teer result is announced at 4:40 PM. Every day, tickets for first
                    round of Shillong Teer are sold from 10:00 am to 3:30 PM and for second round tickets are sold till
                    4.30 PM. At 3:30 PM sharp, the archery session begins.
                </p>
                <br>
                <hr>
                <br>
                <p><b>Khanapara Teer Description:</b> The Khanapara (Guwahati) Teer result is the prime focus for
                    players of Assam. People spent their precious time in these sport activities for some hope. The
                    first-round number of Khanapara Teer result is announced at 4:20 PM and the second-round number of
                    Khanapara Teer result is announced at 4:50 PM. Every day, tickets for first round of Khanapara Teer
                    are sold from 10:00 am to 4:00 PM and for second round tickets are sold till 4.30 PM.</p>
                <br>
                <p class="pDscrptn">I would advice you to always go for reputed and official Teer Counter of Khanapara.
                    If someone tells you or message you that he/she is from this website or similar. Never trust such
                    persons or messages, we do not perform any activities like this. In (teercounterofficial.com) this
                    site you can see Meghalaya and Assam Teer Results.</p>
                <br>
                <hr>
                <br>
                <p><b>Juwai Teer Description:</b> Juwai Teer, an archery-based lottery, played from every Monday to
                    Saturday. The first-round number of Juwai Teer result is announced at 2:10 PM and the second-round
                    number of Juwai Teer result is announced at 2:50 PM. Every day, tickets for first round of Shillong
                    Teer are sold from 10:00 am to 2:00 PM and for second round tickets are sold till 2.30 PM. At 3:30
                    PM sharp, the archery session begins.</p>
                <br>
                <p class="pDscrptn">The number of arrows in Juwai Teer should not be less than 30 and more than 50, and
                    the total number of arrows used in each round of shooting must be in numbers between seven hundred
                    to two thousand. The target will be the type typically used among the Khasis or Jaintias in archery.
                    The target distance from the shooters should not be less than 15.21 meters and more than 30.48
                    meters, and the time duration in which all shooters should complete one round of shooting should not
                    exceed five minutes.</p>
            </div>
            <div class="mainDiv">
                <h1>Shillong Teer Common Number</h1>
                <h3>(Date: <?php echo $rowCommonNumbers[0][0][0]; ?>)</h3>
                <div class="todayResult todayCN">
                    <h4>Today's Common Numbers</h4>
                    <h3><?php echo nl2br($rowCommonNumbers[0][0][1]); ?></h3>
                </div>
                <div class="todayResult">
                    <table class="cNTable">
                        <tr>
                            <th>House</th>
                            <th>Ending</th>
                        </tr>
                        <tr>
                            <td><?php echo substr($rowCommonNumbers[0][0][2],0,1); ?></td>
                            <td><?php echo substr($rowCommonNumbers[0][0][3],0,1); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo substr($rowCommonNumbers[0][0][2],3,1); ?></td>
                            <td><?php echo substr($rowCommonNumbers[0][0][3],3,1); ?></td>
                        </tr>
                    </table>
                </div>
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
                <h1>Khanapara Teer Common Number</h1>
                <h3>(Date: <?php echo $rowCommonNumbers[0][0][4]; ?>)</h3>
                <div class="todayResult todayCN">
                    <h4>Today's Common Numbers</h4>
                    <h3><?php echo nl2br($rowCommonNumbers[0][0][5]); ?></h3>
                </div>
                <div class="todayResult">
                    <table class="cNTable">
                        <tr>
                            <th>House</th>
                            <th>Ending</th>
                        </tr>
                        <tr>
                            <td><?php echo substr($rowCommonNumbers[0][0][6],0,1); ?></td>
                            <td><?php echo substr($rowCommonNumbers[0][0][7],0,1); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo substr($rowCommonNumbers[0][0][6],3,1); ?></td>
                            <td><?php echo substr($rowCommonNumbers[0][0][7],3,1); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="mainDiv">
                <h1>Juwai Teer Common Number</h1>
                <h3>(Date: <?php echo $rowCommonNumbers[0][0][8]; ?>)</h3>
                <div class="todayResult todayCN">
                    <h4>Today's Common Numbers</h4>
                    <h3><?php echo nl2br($rowCommonNumbers[0][0][9]); ?></h3>
                </div>
                <div class="todayResult">
                    <table class="cNTable">
                        <tr>
                            <th>House</th>
                            <th>Ending</th>
                        </tr>
                        <tr>
                            <td><?php echo substr($rowCommonNumbers[0][0][10],0,1); ?></td>
                            <td><?php echo substr($rowCommonNumbers[0][0][11],0,1); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo substr($rowCommonNumbers[0][0][10],3,1); ?></td>
                            <td><?php echo substr($rowCommonNumbers[0][0][11],3,1); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="mainDiv teerDscrptn">
                <h2>About Teer Common Numbers</h2>
                <p class="pDscrptn">Find teer common number, house and ending in this site (Teer Couter Official). We
                    give you the lucky numbers according to our calculation. These common numbers are purely based on
                    certain calculatuons done using by past results. There is no gurantee of the accuracy of these
                    numbers. We did your level best for the extraction of numbers using various algorithm. So you should
                    play our common numbers at your own choice.</p>
                <br>
                <hr>
                <br>
                <p class="pDscrptn">To win the game you need various calculations, techniques and gradually you will
                    understand the flow of the previous results which will lead you to crack the Teer game. </p>
                <br>
                <hr>
                <br>
                <p> <strong>SRRICT WARNING:-</strong> Our site is only for users with age above 18 years old. Our site
                    is not invole in any gambling. Our site only provides the teer results collected from various
                    sources in the internet. Our site is only for information purpose only!</p>

                <br>
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