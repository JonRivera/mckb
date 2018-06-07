<?php
include 'nav.php';
$API_key    = 'AIzaSyBuWY1MdSwNwGjlmiy1ukqZ9AUiNVN3g2I';
$playlistId  = 'PLfgRbk6aEXDv24L_sKJGWlfdi3AfqHaqZ';

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId='.$playlistId.'&key='.$API_key.''));

$list = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=1&playlistId='.$playlistId.'&key='.$API_key.''));

?>
<!DOCTYPE html>
<html>
<head>
		<title>MCKB | Sports Psych</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

		<?php
	        foreach($list->items as $item){
	            echo '
	            <div class="embed-responsive-item embed-responsive embed-responsive-16by9">
	                <iframe class="embed-responsive-item" width="100%" height="" src="https://www.youtube.com/embed/'.$item->snippet->resourceId->videoId.'?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>
	            </div>';
	            }
	        
	    ?>

        
        <div style="background-color: black;" class="container-fluid">

             <div style="background-color: black; width: 100%;" class="row">
            <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Workouts</h2>
        </div>

		<div class="row">
    	<?php
        foreach($videoList->items as $item) {
            echo '<div class="youtube-video col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <a href="video.php?video_id='.$item->snippet->resourceId->videoId.'&title='.$item->snippet->title.'">
                        <img class="col-lg-11 col-md-11 col-sm-12 col-xs-12" alt="'.$item->snippet->title.'" src="'.$item->snippet->thumbnails->high->url.'">
                        </a>
                        <h2 style="margin-top:10px;">'. $item->snippet->title .'</h2>
                    </div>';
        }
    	?>
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
    </div>
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