<!DOCTYPE HTML>

<html>
<head>
    <!-- Bring in whats used for style in the header -->

    <title> Video Network  Solutions</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />

 
    <!-- Bring in the PHP requires -->

    <?php
    // Initialisation
    require_once('./Includes/init.php');
   
    ?>
</head>

<body>
    <!--Check Login status -->
        
    <?php
    if (Auth::getInstance()->isLoggedIn()): ?>

   <?php Util::redirect('/Vendor/profile.php'); ?>

    <?php else: ?>


    <!-- Jqueries -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>


    <!-- Base Header-->
    <header id="header" class="alt">
        <div class="logo"><a href="index.php">Video Network <span>by Du'Bois</span></a></div>
        <a href="#menu">Menu</a>

    </header>

    <!-- Nav guide -->
    <nav id="menu">
        <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="generic.html">Register</a></li>
            <li><a href="elements.php">LOG-IN </a></li>
        </ul>
    </nav>

    <!-- Sliding Header Images and Thought Provocation -->
    <section class="banner full">
        <article>
            <img src="Sharewithworld.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>A Video Deployment Network <br><a>Crisp</a></p>
                    <h2>Smooth and Shareable</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="Vlogger.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>Show the world who you are</p>
                    <h2>Your Creations At Large</h2>
                </header>
            </div>
        </article>

        <article>
            <img src="TheWorld.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>Expand your reach</p>
                    <h2>Connect with the world</h2>
                </header>
            </div>
        </article>

        <article>
            <img src="Limitless.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>Expand Your horizons</p>
                    <h2>Reach for the Stars</h2>
                </header>
            </div>
        </article>

        <article>
            <img src="slide05.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>Join Millions</p>
                    <h2>Retain Your Identity</h2>
                </header>
            </div>
        </article>
    </section>

    <!-- First section of Purpose -->
    <section id="one" class="wrapper style2">

        <div class="align-center">
            <p>
                
          
                
            </p>
        </div>

        <div class="inner">
            <div class="grid-style">




                <div>
                    <div class="box">
                        <div class="image fit">
                            <img src="images/pic02.jpg" alt="" />
                        </div>
                        <div class="content">
                            <header class="align-center">
                                <p>Upload Your own Video Creations</p>
                                <h2>Only Limited by your Own Design</h2>
                            </header>
                            <p> Here users can create their content and display it on their own profile page for other users to see.</p>
                            <footer class="align-center">
                                <a href="#" class="button alt">Learn More</a>
                            </footer>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="box">
                        <div class="image fit">
                            <img src="images/pic03.jpg" alt="" />
                        </div>
                        <div class="content">
                            <header class="align-center">
                                <p>Already Have A video from another platform?</p>
                                <h2>You can share that too!!</h2>
                            </header>
                            <p> Users can not only create their videos and upload their videos using our platefrom but can share and use older projects from other sites as well. </p>
                            <footer class="align-center">
                                <a href="#" class="button alt">Learn More</a>
                            </footer>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2nd Thought Eye popper-->
    <section id="two" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <p>Not just another social media scene</p>
                <h2>Its your social media scene, without all the pop up adds and wait times</h2>
            </header>
        </div>
    </section>

    <!-- Bottom section of examples -->
    <section id="three" class="wrapper style2">
        <div class="inner">
            <header class="align-center">
                <p class="special">Display your creations like never before using Video Networks</p>
                <h2>Clean professional layout to do away with all the clutter</h2>
            </header>
            <div class="gallery">
                <div>
                    <div class="image fit">
                        <video width="100%" height="240" controls>
                            <source src="Vid1.mp4" type="video/mp4">

                        </video>
                    </div>
                </div>
                <div>
                    <div class="image fit">
                        <video width="100%" height="240" controls>
                            <source src="Vid2.mp4" type="video/mp4">

                        </video>
                    </div>
                </div>
                <div>
                    <div class="image fit">
                        <video width="100%" height="240" controls>
                            <source src="Vid3.mp4" type="video/mp4">

                        </video>
                    </div>
                </div>
                <div>
                    <div class="image fit">
                        <a><img width="100%" height="240" object-fit: cover; src="MeQuaz.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Social Media -->
    <footer id="footer">
        <div class="container">
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
            </ul>
        </div>
        <div class="copyright">
            &copy; Video Network. All rights reserved.
        </div>
    </footer>
<?php endif ?>



</body>

</html>
