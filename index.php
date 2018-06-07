<!DOCTYPE html>
<html>

<head>
    <title>MCKB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<?php

include 'nav.php';
    
?>

    <div class="container-fluid">
<!--         <div id="land-vid" class="embed-responsive-item embed-responsive embed-responsive-16by9">
            <iframe style="margin-top: 0px;" class="embed-responsive-item" width="100%" height="100%" src="https://www.youtube.com/embed/nbPw1FmORKU?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>
        </div> -->
        <!--    
        <div class="row" id="welcome">
                <span id="blurb">
                    <mark style="font-size: 30px;background-color: white;text-decoration: underline red;">MCKIBBIN SPORT PERFORMANCE</mark>
                    <mark style="width: 800px;background-color: white;">An inside look into the training regimen of AVP Professional Beach Volleyball Players with hi-def video tutorials of their workouts, practice plans and drills, and beach volleyball tips, tricks and skills training.</mark>
                    <mark><button>Check it out!</button></mark>
                </span>
        </div>
        -->
        <div id="landing-cont">
            <div id="blurb">
               <img id="landing-img" src="assets/img/mckb-sp-white.png">
                <p style="width: 90%;color: white;">An inside look into the training regimen of AVP Professional Beach Volleyball Players with hi-def video tutorials of their workouts, practice plans and drills, and beach volleyball tips, tricks and skills training.</p>
                <p style="padding-top: 5px;color: white;">
               <button><a href="videos.php">Check it out!</a></button>
                </p>
            </div>
        </div>
        <div id="news" class="row">
            <h3>TRAIN LIKE A PRO</h3>
            <p>Train like a pro with access to The McKibbin Brothers' weekly workout programs and beach volleyball skills training with FREE VIDEO TUTORIALS.</p>
            <input type="text" name="">
        </div>
        <div class="row">
           <div style="background-image: url('assets/img/riley-rip.JPG');" class="previews col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="workouts.php">
                    <div class="prev-hover">
                        <h2 style="color: white;">WORKOUTS</h2>
                    </div>
                </a>
            </div>
            <div style="background-image: url('assets/img/dime.jpg');" class="previews col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="drills.php">
                <div class="prev-hover">
                    <h2 style="color: white;">DRILLS</h2>
                </div>
            </a>
            </div>
            <a href="shop.html">
            <div style="background-image: url('assets/img/roof.JPG');" class="previews col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="sportspsych.php">
                    <div class="prev-hover">
                        <h2 style="color: white;">SPORT PSYCH</h2>
                    </div>
                </a>
            </div>
           
        </div>
    </div>
    <footer class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="footcont">
            <h2>MCKB Volleyball</h2>
            <div class="mediacont">
                <a href="">
                    <div id="mediaicon1"></div>
                </a>
                <a href="">
                    <div id="mediaicon3"></div>
                </a>
                <a href="">
                    <div id="mediaicon2"></div>
                </a>
                <a href="">
                    <div id="mediaicon4"></div>
                </a>
            </div>
            <a href="">Connect with us on Instagram, Facebook, our Youtube Channel, and Spotify for the full experience !</p>
    </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#menu-icon').on('click', function() {
            $('#menu').fadeToggle();
        });

        // $('.previews').on('mouseenter mouseleave', function() {
        //     $('.prev-hover').fadeToggle();
        // });
    });
    </script>
</body>

</html>