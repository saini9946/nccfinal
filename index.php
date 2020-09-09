<?php
require 'php/connect.php';
$r='SELECT * FROM notices';
$p='SELECT * FROM footer';
$q1=mysqli_query($conn,$p);
$row1=mysqli_fetch_assoc($q1);
$q=mysqli_query($conn,$r);
$row=mysqli_fetch_assoc($q)
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


    <title>HOME | NCC</title>

</head>

<body>

        <div class="header-fixed">
        
    </div>
    <div class="sticky-top">
<nav class="navbar navbar-dark sticky-top navbar-expand-md  mainNav ">
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
                    <a href="ssb.html" class="nav-link text-white">SSB</a>
                </li>
                <li class="nav-item">
                    <a href="nccGndec.html" class="nav-link text-white">MISCELLANEOUS</a>
                </li>
                <li class="nav-item">
                    <a href="php/index.php" class="nav-link text-white">LOG IN</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link text-white">ABOUT US</a>
                </li>
                                
                <li class="nav-item">
                    <a href="contact.html" class="nav-link text-white">CONTACT US</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
        <section class="section__slider">
            <div class="Container">
                <div id="car3" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#car3" data-slide-to="0" class="active"></li>
                        <li data-target="#car3" data-slide-to="1"></li>
                        <li data-target="#car3" data-slide-to="2"></li>
                        <li data-target="#car3" data-slide-to="3"></li>
                        <li data-target="#car3" data-slide-to="4"></li>
                        <li data-target="#car3" data-slide-to="5"></li>
                        <li data-target="#car3" data-slide-to="6"></li>
                        <li data-target="#car3" data-slide-to="7"></li>
                        <li data-target="#car3" data-slide-to="8"></li>
                        <li data-target="#car3" data-slide-to="9"></li>
                        <li data-target="#car3" data-slide-to="10"></li>
                        <li data-target="#car3" data-slide-to="11"></li>
                        <li data-target="#car3" data-slide-to="12"></li>
                        <li data-target="#car3" data-slide-to="13"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/carousel-1.jpeg" class="img-fluid">
                        </div>
                        <div class="carousel-item ">
                            <img src="images/carousel-2.jpeg" class="img-fluid">
                        </div>
                        <div class="carousel-item ">
                            <img src="images/carousel-3.jpeg" class="img-fluid">
                        </div>
                        <div class="carousel-item ">
                            <img src="images/carousel-4.jpeg" class="img-fluid">
                        </div>
                        <div class="carousel-item ">
                            <img src="images/carousel-5.jpeg" class="img-fluid">
                        </div>
                        <div class="carousel-item ">
                            <img src="images/carousel-6.jpeg" class="img-fluid">
                        </div>
                        <div class="carousel-item ">
                            <img src="images/carousel-7.jpeg" class="img-fluid">
                        </div>
                        <div class="carousel-item ">
                            <img src="images/carousel-8.jpeg" class="img-fluid">
                        </div>
                        <div class="carousel-item ">
                            <img src="images/carousel-9.jpeg" class="img-fluid">
                        </div>
                        <!-- <div class="carousel-item ">
                            <img src="images/carousel-10.jpeg" class="img-fluid">
                        </div> -->
                        <div class="carousel-item ">
                            <img src="images/carousel-11.jpg" class="img-fluid">
                        </div>
                        <div class="carousel-item ">
                            <img src="images/carousel-12.jpeg" class="img-fluid">
                        </div>
                        <div class="carousel-item ">
                            <img src="images/carousel-13.jpg" class="img-fluid">
                        </div>
                        <div class="carousel-item ">
                            <img src="images/carousel-14.jpeg" class="img-fluid">
                        </div>

                    </div>
                    <a href="#car3" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">previous</span>
                    </a>
                    <a href="#car3" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">next</span>
                    </a>
                </div>
            </div>
        </section>
        <section class="section__description">
            <div class="row1">
                <div class="col-1-of-4">
                    <div style="overflow-y: auto;" class="sidetext__box">
                        <div class="heading__secondary">
                            Notices
                        </div>
                        <marquee  scrollamount="2" direction="up" loop="true" id="marquee">
                        <?php
                            echo $row['notice'];
                        ?>
                        </marquee>
                    </div>
                </div>
                <div class="col-2-of-4">
                    <div class="heading__description">
                        <marquee scrollamount="6" direction="left" loop="true">"Life is not measured by the number of
                            breathe we take,but by the moments that take our breaths away."</marquee>

                    </div>

                    <p align="justify">
                        Guru Nanak Dev Engineering College, Ludhiana, besides being a premium college for engineering
                        studies, is also a training ground for cadets of NATIONAL CADET CORPS. The NCC cadets of GNDEC
                        are enrolled under the 3 PUNJAB batallion. Regular drill sessions are conducted in
                        sport complex, where the senior cadets impart their skills and Josh to
                        Junior ones. The session starts with a light warm up including two-three rounds of 400 meter
                        track and jumps. Drill sessions are always a delight to watch, where some cadets could be seen
                        marching in proper sync and coordination, where defaulters could be seen facing grueling RAGDA.
                    </p>

                    <p align="justify">The RAGDA make the cadet stronger and sparks his/her inner strength. The senior always tries to
                        bring their cadet out of their comfort zone so that they can grow a step every day. Also, PI
                        (P.T. instructor) and ANO visit the ground to ensure the proper functioning of the drill
                        parades. They interact and solve the problems of cadets. Students brought up like cadets build
                        good friendship with other cadets.</p>


                </div>

                <div  class="col-1-of-4">
                    <div style="overflow-y: auto;" class="sidetext__box">
                        <div class="heading__secondary">
                            Events
                        </div>
                        <div id="marquee">
                            <?php
                                echo $row['events'];
                            ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row1">
                <div class="col-1-of-4 u-margin-top-large">
                    <div style="overflow-y: auto;" class="sidetext__box">
                        <div class="heading__secondary">
                            Camps
                        </div>
                        <div id="marquee">
                        <?php
                                echo $row['camps'];
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-2-of-4 u-margin-top-large">

                    <p align="justify">
                        Along with the outdoor drill, indoor sessions are held in which cadets exercise various tasks
                        to inculcate the OFFICER LIKE QUALITIES. Senior share their experiences of growing out of this
                        organization as a leader and building inter-personal skills to lead a group of men. We got to
                        do more and more of extra-curricular activities, we perform nukkad-nataks, we dance, we sing, we
                        go out on road for rallies, we give lectures, we discuss the highlighted topics of concern, we
                        go for camps, we learn and above all we perform our duty as NCC CADETS. </p>

                    <p align="justify">Camps are always exciting and a transforming phase in a cadet’s life. There he/she is shown the
                        real schedule of a defence personnel. Here his overall dimension of personality shines from
                        doing parades in scorching heat to performing cultural events in evening, from competing with
                        other cadets in Obstacle Race to shooting in bird’s eye, from delivering his roles as a guard
                        and at times a linesman in the range to serving food and refreshment to other cadets. It is the
                        camp that one has wide chances of learning and earning those smart looking badges that
                        decorates one’s uniform. We get in touch with soldiers and learn the art of shooting, giving
                        commands and carrying out one duties with accuracy and precision. We live in one house and make
                        it a home of above 700 cadets and defence personnel.
                        The NCC cadets has always
                        proved the quote “NAAM NAMAK NISHAAN”
                        <span><i>In GNDEC scholars are made and NCC makes them SCHOLAR WARRIORS.</i></span>
                    </p>


                </div>

                <div class="col-1-of-4 u-margin-top-large">
                    <div style="overflow-y: auto;" class="sidetext__box">
                        <div class="heading__secondary">
                            Alumini
                        </div>
                        <p class="text-center">
                            <marquee scrollamount="2" direction="up" loop="true" id="marquee">
                              <?php
                                echo $row['alumnis'];
                             ?>
                            </marquee>
                        </p>
                    </div>

                </div>
            </div>

        </section>

        <section class="section__backimg">
            <div id="cadet">
                <div class="container">
                    <div class="row1">
                        <div class="col-1-of-2 u-margin-top-down">
                            <h1 class="heading__primary" id="color-white">
                                PARAKRAM PARV CELEBRATIONS
                            </h1>
                            <p align="justify" class="paragraph" id="color-white">
                                Indian Armed Forces always brought laurels to the Nation. Their contribution in
                                war and peace are of immense value to every Indian. We proudly celebrate Kargil Vijay
                                Diwas Day and many such
                                battle honour days in the memory of our brave soldiers.
                                 Indian Army conducted surgical strikes in 2016 which had strategic ramifications and
                                were aimed to dissuade inimical adversary from adopting the path of violence and to
                                ensure an environment of peace for the Nation....
                                <span class=" btn-success btnHS" data-toggle="collapse" href="#moreInfo-3">Read
                                    More!</span>
                                <div class="collapse" id="moreInfo-3">
                                    <h2 id="color-white">What happened on September 29, 2016?</h2>
                                    <p align="justify" class="paragraph" id="color-white"> Visuals from surgical strike footage of
                                        29/9/2016 from Pakistan Occupied Kashmir (PoK).
                                        On September 29, 2016, the Indian Army carried out surgical strikes on seven
                                        terrorist launch pads across the Line of Control (LoC) as a response to an
                                        attack on its base in Uri earlier that month.
                                        To showcase the courage, valour and sacrifice of Armed Forces, ‘Parakram Parv’
                                        is being observed from 28-30 September 2018. The main event is planned in India
                                        Gate Lawns, Rajpath, New Delhi. Similarly, 53 locations in   51 cities across
                                        the Nation shall be showcasing the events highlighting valour of Indian Armed
                                        Forces in general and Special Forces in particular.
                                    </p>
                                </div>
                            </p>
                        </div>

                        <div class="col-1-of-2 u-margin-top-down ">
                            <div class="composition u-margin-top-small">
                                <img src="images/parakram1.jpeg" alt="photo-1" class="composition__photo composition__photo--p1 img-fluid">
                                <img src="images/parakram2.jpeg" alt="photo-1 img-fluid" class="composition__photo composition__photo--p2">
                                <img src="images/parakram3.jpeg" alt="photo-1" class="composition__photo composition__photo--p3 img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__video">
            <div class="u-center-text u-margin-bottom-medium">
                <h2 class="video__heading" id="black">
                    The Battle of Asal Uttar
                </h2>
            </div>
            <div class="bg-video">
                <video class="bg-video__content" autoplay muted loop>
                    <source src="videos/prade.mp4">
                    Your browser is not supported!
                </video>
            </div>

            <div class="row1">
                <div class="nccPrade">
                    <div class="nccPrade__text">
                        <p align="justify" class="paragraph" id="black">The <strong>Battle of Asal Uttar</strong> was one of the
                            largest tank battles fought during
                            the Indo-Pakistani War of 1965. It was fought from 8 to 10 September 1965, when the
                            Pakistan Army thrust its tanks and infantry into Indian territory, capturing the Indian
                            town of Khem Karan 5 km from the International Border. The Indian troops retaliated, and
                            after three days of bitter fighting, the battle ended with the Pakistani forces being
                            repulsed near Asal Uttar. Factors that contributed to this were the fierce fight put up by
                            Indian army, conditions of the plains, better Indian tactics and a successful Indian
                            strategy. In the night, the Indian troops flooded the sugar cane field, and the next
                            morning, the Pakistani tanks of the 1st Armoured Division, consisting mainly of M47 and M48
                            Patton tanks, were lured inside the horse-shoe trap.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row1">
                <div class="nccPrade">
                    <div class="nccPrade__text">
                        <p align="justify" class="paragraph" id="black"> The swampy ground slowed down the
                            advance of the Pakistani tanks and many of them could not move because of the muddy
                            slush.In the night, the Indian troops flooded the sugar cane field, and the next morning,
                            the Pakistani tanks of the 1st Armoured Division, consisting mainly of M47 and M48 Patton
                            tanks, were lured inside the horse-shoe trap. The swampy ground slowed down the advance of
                            the Pakistani tanks and many of them could not move because of the muddy slush. Ninety nine
                            Pakistani tanks mostly Pattons, and a few Shermans and Chaffees, were destroyed or captured
                            while the Indians, by their account, lost only 10 tanks during this counter offensive. </p>
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
                            <ul class="u-margin-bottom-big">
                                <li class="footer__item"><a href="http://www.careerairforce.nic.in/" target="_blank" class="text-white"><i
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
                                <li class="footer__item"><a href="https://www.joinindiannavy.gov.in" target="_blank"
                                        class="text-white"><i class="fa fa-ship footer__icons footer__icons--mid"></i>
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
                                    <p class="footer__para"><?php echo $row1['phone'];?></p>
                                </li>
                                <li class="footer__item"><i class="fa fa-envelope footer__icons footer__icons--mid"></i>
                                    <p class="footer__para"><?php echo $row1['email'];?></p>
                                </li>
                                <li class="footer__item"><i class="fa fa-envelope footer__icons footer__icons--mid"></i>
                                    <p class="footer__para"><?php echo $row1['emails'];?></p>
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
                            <ul>
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
