<?php

require_once('../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

use Portfolio\View\ViewPortfolio;

$viewPortfolio = new ViewPortfolio();

// website header
$viewPortfolio->Portfolio_Header();
?>

<div class="container-fluid p-0 m-0"> 
    <div class="row banner-bg vh-100">
        <div class="col-lg-10"> 
        <h1 class="banner-text text-uppercase z-n1 position-absolute">Shawn<br>Patrick<br>Joyce</h1>
        </div> 
        <div class="col-lg-12 d-flex align-items-end"> 
            <div class="clearfix"> 
                <img src="images/cat_banner.png" class="img-fluid cat-banner z-3 position-relative">
            </div>
            <img src="images/back_dust.png" class="img-fluid back-dust z-0 position-absolute">
            <img src="images/face_banner.png" class="img-fluid face-banner z-1 position-absolute">
            <img src="images/front_dust.png" class="img-fluid front-dust z-2 position-absolute">
        </div>
    </div>
</div>
<div class="container-fluid m-0 p-0"> 
    <div class="row info-section border-top border-4 border-white vh-100"> 
        <div class="col-lg-12">
            <h2 class="info-section-title my-5">About Me <img src="images/cat_info.png" class="img-fluid cat-info"> </h2>
            <div class="row"> 
                <div class="col-lg-3 d-none d-lg-block"> 
                    <img src="images/about_me.png" class="img-fluid">
                </div>
                <div class="col-lg-8 gap-0"> 
                    <h4 class="info-section-subtitle">Thirty-nine years old, living on the Colorado Western Slope with his rescue cats and undergoing the grand adventure of Web Development.</h4>
                    <p class="info-section-para">
                        I was diagnosed on the spectrum of high function autism with ADHD traits, making the journey a lot more interesting! I am a self taught programmer and currently working on getting into a Bootcamp or earn my degree in CS.
                        I have always loved web design and developement since I was a teenager making websites on Geocities and Microsoft Frontpage. I look forward to this adventure and will update my projects here frequently! follow my Twitter 
                        and GitHub to stay connected!
                    </p>
                </div>
                <div class="col-lg-12 text-center my-5 gap-5"> 
                    <a href="#" class="text-reset text-decoration-none social-links"><i class="bi bi-envelope-heart"></i> shawnjoyce84@gmail.com </a>
                    <a href="#" class="text-reset text-decoration-none social-links"><i class="bi bi-twitter-x"></i> Twitter</a>
                    <a href="#" class="text-reset text-decoration-none social-links"><i class="bi bi-github"></i> GitHub</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
// website footer
$viewPortfolio->Portfolio_Footer();
?>
