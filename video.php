<?php
$API_key    = 'AIzaSyBuWY1MdSwNwGjlmiy1ukqZ9AUiNVN3g2I';
$channelID  = 'UC72N-8kakvmDbsLMvOf9Kxg';
$maxResults = 10;

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));

// https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=UC72N-8kakvmDbsLMvOf9Kxg&maxResults=10&key=AIzaSyBuWY1MdSwNwGjlmiy1ukqZ9AUiNVN3g2I

?>

<!DOCTYPE html>
<html>
<head>
	<title>Video | MCKB Volleyball</title>
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
        

       


		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="video">	
				<iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $_GET['video_id'];?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="video-cont">
				<h1 style="color: black;"><?php echo $_GET['title'];?></h1>
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