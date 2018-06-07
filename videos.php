<?php
$API_key    = 'AIzaSyBuWY1MdSwNwGjlmiy1ukqZ9AUiNVN3g2I';
$channelID  = 'UC72N-8kakvmDbsLMvOf9Kxg';
$maxResults = 8;
$limit = 1;
$date = date('Y-m-dH:i:s');

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));

$featured = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$limit.'&key='.$API_key.''));


// https://www.googleapis.com/youtube/v3/search?publishedBefore=2017-12-0408:29:09&part=snippet&channelId=UC72N-8kakvmDbsLMvOf9Kxg&maxResults=10&key=AIzaSyBuWY1MdSwNwGjlmiy1ukqZ9AUiNVN3g2I

// https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=UC72N-8kakvmDbsLMvOf9Kxg&maxResults=10&key=AIzaSyBuWY1MdSwNwGjlmiy1ukqZ9AUiNVN3g2I

// https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=UC72N-8kakvmDbsLMvOf9Kxg&maxResults=10&key=AIzaSyBuWY1MdSwNwGjlmiy1ukqZ9AUiNVN3g2I

?>

<!DOCTYPE html>
<html>
<head>
	<title>MCKB | Videos</title>

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

    <div class="embed-responsive-item embed-responsive embed-responsive-16by9">
            <iframe style="margin-top: 0px;" class="embed-responsive-item" width="100%" height="100%" src="https://www.youtube.com/embed/nbPw1FmORKU?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div>

    <div id="netflixit" class="row">
       <!--  <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">MCKIBBIN SPORTS PERFORMANCE CATEGORIES</h2> -->

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="hero-cover">
            <a href="workouts.php"><h2 style="color: white;">WORKOUTS</h2></a>
            <a href="drills.php"><h2 style="color: white;margin-left: 25px; margin-right: 25px;">DRILLS</h2></a>
            <a href="sportspsych.php"><h2 style="color: white;">SPORTS PSYCH</h2></a>
        </div>

        <div style="background-color: black; width: 100%;" class="row">
            <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">All Videos</h2>
        </div>

        <div class="row">

    	<?php
        foreach($videoList->items as $item) {

            if ( isset($item->id->videoId) && !isset($item->id->playlistId)  ) {
            echo '<div class="youtube-video col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <a href="video.php?video_id='.$item->id->videoId.'&title='.$item->snippet->title.'">
                        <p class="youtube-video-des">'.$item->snippet->description.'</p>
                        <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" alt="'.$item->snippet->title.'" src="'.$item->snippet->thumbnails->high->url.'">
                        </a>
                    </div>';
            } else {
                echo '<div class="youtube-video col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        
                        <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" alt="'.$item->snippet->title.'" src="'.$item->snippet->thumbnails->high->url.'">
                        
                    </div>';
            }
        }
    	?>

    </div>
     

            <footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="footcont">
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
            </footer> 
              </div>

    </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#menu-icon').on('click', function() {
            $('#menu').fadeToggle();
        });
        // $('.youtube-video').on('mouseenter mouseleave', function() {
        //     $('.youtube-video-des').fadeToggle();
        // });  
        var myVideo =  iframe.getElementById('myVideo'); 
        myVideo.mute();
    });
    </script>
</body>
</html>