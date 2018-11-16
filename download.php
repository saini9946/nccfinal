<?php
require 'php/connect.php';
$r="SELECT downloads FROM notices";
$t=mysqli_query($conn,$r);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="https://www.gndec.ac.in/sites/default/files/acquia_marina_favicon.png" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Harpreet Saini">
    <meta name="author" content="Pardeep Singh">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">

    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/icon-font.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <title>downloads</title>

</head>

<body>
   <div class="header-fixed">
           
    </div>

<div class="sticky-top">
    <nav class="navbar navbar-dark  navbar-expand-md  mainNav">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
            <span class="navbar-toggler-icon" style="color:white;"></span>
        </button>
        <a href="index.php" class="navbar-brand mainNav__logo ml-4" style="font-size:24x;"><img src="">NCC
        </a>
        <div class="collapse navbar-collapse" id="myNav">
            <ul class="navbar-nav ml-auto mr-2">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link text-white">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a href="nccGndec.html" class="nav-link text-white">MISCELLANEOUS</a>
                </li>
                <li class="nav-item">
                    <a href="ssb.html" class="nav-link text-white">SSB</a>
                </li>
                <li class="nav-item">
                    <a href="contact.html" class="nav-link text-white">CONTACT US</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
   
    <section class="section__download">
        <div class="download__container">
            <div class="row1">
                <div class="col-1-of-2">
                    <ul><?php 
                        while($row=mysqli_fetch_assoc($t)){
                        echo $row['downloads'];
                    };
                        ?>
                    </ul>
                </div>
                <div class="col-1-of-2">

                </div>
            </div>
        </div>
    </section>






    <footer class="footer">
        <div class="footer__upper">
            <div class="footer__logo-box u-margin-bottom-big">
                <img src="images/ncclogo.png" alt="Big Logo" class="footer__logo u-margin-bottom-small">
                <h3 class="footer__heading u-margin-bottom-small">National Cadet Corps</h3>
            </div>
        </div>
    </footer>
    <footer>
        <div class="footer__lower u-margin-top-large">
            <div class="row1">
                <div class="col-1-of-3">
                    <div class="footer__navigation">
                        <ul>
                            <li class="footer__item"><a href="http://indianairforce.nic.in/" target="_blank" class="text-white"><i
                                        class="fa fa-fighter-jet footer__icons footer__icons--mid"></i>
                                    <p class="footer__para">
                                        Air Force</p>
                                </a>
                            </li>
                            <li class="footer__item"><a href="http://joinindianarmy.nic.in/Alpha/" target="_blank"
                                    class="text-white"><i class="fa fa-fighter-jet footer__icons footer__icons--mid"></i>
                                    <p class="footer__para">
                                        Indian Army</p>
                                </a>
                            </li>
                            <li class="footer__item"><a href="https://www.joinindiannavy.gov.in" target="_blank" class="text-white"><i
                                        class="fa fa-ship footer__icons footer__icons--mid"></i>
                                    <p class="footer__para">Indian Navy</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="footer__address">
                        <ul>
                            <li class="footer__item"><i class="fa fa-map-marker footer__icons footer__icons--mid"></i>
                                <p class="footer__para">
                                    GNE COLLEGE,LUDHIANA</p>
                            </li>
                            <li class="footer__item"><i class="fa fa-phone footer__icons footer__icons--mid"></i>
                                <p class="footer__para">+9465577951</p>
                            </li>
                            <li class="footer__item"><i class="fa fa-envelope footer__icons footer__icons--mid"></i>
                                <p class="footer__para">nccgndecofficial@gmail.com</p>
                            </li>
                            <li class="footer__item"><i class="fa fa-envelope footer__icons footer__icons--mid"></i>
                                <p class="footer__para">nccgndecofficial@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="footer__copyright">
                        <p class="u-margin-bottom-very-small"><a href="download.php" id="developer_id">Downloads
                            </a>
                        </p>
                        <p class="footer__para"><a href="developer.html" id="developer_id">Developed By
                                Pardeep Singh & Harpreet Saini, D3CS</a>
                        </p>
                        <p class="footer__para">Site Maintained by GNDEC,Ludhiana
                        </p>
                    </div>
                    <div class="footer__copyright-highlight">
                        <p> <span>NCC Gndec &copy; 2018</span></p>
                    </div>
                    <div>
                        <ul class="u-margin-bottom-big">
                            <li class="footer__item"><a href="https://www.facebook.com/groups/nccgndec/" target="_blank"><i
                                        class="fa fa-facebook footer__icons footer__icons--mid"></i></a></li>
                            <li class="footer__item"><a href="https://www.instagram.com/nccgndec/" target="_blank"><i
                                        class="fa fa-instagram footer__icons footer__icons--mid"></i></a></li>
                            <li class="footer__item"><a href="" target="_blank"><i class="fa fa-github footer__icons footer__icons--mid"></i></a></li>
                            <li class="footer__item"><a href="" target="_blank"><i class="fa fa-linkedin footer__icons footer__icons--mid"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>

</body>

</html>