<!DOCTYPE html>
<html>
<head>
	<title>Offline Wikia</title>
	<meta charset="utf-8">
    <link rel="manifest" href="manifest.json">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#212121">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Offline Wikia">
    <link rel="icon" sizes="192x192" href="favicon.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Offline Wikia">
    <link rel="apple-touch-icon" href="favicon.png">

    <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#212121">
    <meta name="msapplication-TileImage" content="favicon.png">
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <style type="text/css">
        @media screen and (max-width: 480px){
            .searchbox{
                width: 90%;
            }
            
        }
        html,body{
            height: 100%;
            margin:0;
            padding:0;
        }
        .back{
            background-color: #1B1B1B;
            min-width: 100%;
            min-height: 100%;
            padding: 0px !important;
            margin: 0 auto; 
            bottom: 0px;
        }
        a{
            text-decoration: none;
            color: #CFD8DC;
        }
        .icons-social i {
            font-size: 3em;
        }
        .icons-social i {
            padding: 10px;
        }
    </style>
</head>
<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" style="margin: 0; border: none; border-radius: 0;">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span> 
      				</button>
      				<a class="navbar-brand" href="#"><img src="images/logo.png" style="width: 150px; height: 30px;"></a>
    			</div>
    			<div class="collapse navbar-collapse" id="myNavbar">
      				<ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        				<li><a href="saved.php"><span class="glyphicon glyphicon-floppy-disk"></span> Saved Articles</a></li>
        				<li><a href="about.php"><span class="glyphicon glyphicon-user"></span> About</a></li>
      				</ul>
    			</div>
  			</div>
		</nav>
		<div class="container-fluid back">
			<div class="container">
                <br><br><br><br>
                <div class="content">
                    <div class="row">
                        <div class="col-sm-2 col-lg-2 col-md-2">
                        </div>
                        <div class="col-sm-8 col-lg-8 col-md-8">
                            <h3 style="color: #FFFFFF; margin: 10px;"> About Application </h3>
                            <p style="margin: 10px; color: #FAFAFA; font-size: 17px; line-height: 24px;">This is a Progressive Web Application, that brings to you, the real time content from the major fictious universes.</p>
                            <p style="margin: 10px; color: #FAFAFA; font-size: 17px; line-height: 24px;">This application uses the latest web technologies to provide you with offline capabilities! Yes that's right, it works offline. We know how long some articles can be. You can end up scrolling forever with no respite. And navigating back to that article again could be a problem. So, whenever you find yourself running out of time, just click the "SAVE TO READ OFFLINE" button, and come back to it anytime you want. You won't need an active internet connection to read that article ever again.</p>
                            <p style="margin: 10px; color: #FAFAFA; font-size: 17px; line-height: 24px;">Also, if you are on a mobile device, you can easily click 'Add to homescreen' button on the banner when it pops up. Alternatively, if it doesn't, or you have already missed it, you can always click the 'Add to Homescreen' button from the 'options' menu on your browser. This will create an app on your homescreen for easy access and a native application like experience.</p>
                            <hr>
                            <h3 style="color: #FFFFFF; margin: 10px;"> Here is the list of websites from where the content is fetched: </h3>
                            <ul style="list-style-type: square;">
                                <li><a href="https://elderscrolls.wikia.com">The Elder Scrolls</a></li>
                                <li><a href="https://gameofthrones.wikia.com">Game Of Thrones</a></li>
                                <li><a href="https://pokemon.wikia.com">Pokemon</a></li>
                                <li><a href="https://marvel.wikia.com">Marvel</a></li>
                                <li><a href="https://harrypotter.wikia.com">Harry Potter</a></li>
                                <li><a href="https://riordan.wikia.com">Percy Jackson</a></li>
                                <li><a href="https://callofduty.wikia.com">Call Of Duty</a></li>
                                <li><a href="https://godofwar.wikia.com">God Of War</a></li>
                                <li><a href="https://assassinscreed.wikia.com">Assassin's Creed</a></li>
                                <li><a href="https://dragonage.wikia.com">Dragon Age</a></li>
                                <li><a href="https://witcher.wikia.com">The Witcher</a></li>
                                <li><a href="https://dc.wikia.com">The DC Database</a></li>
                                <li><a href="https://dragonball.wikia.com">Dragonball</a></li>
                                <li><a href="https://breakingbad.wikia.com">Breaking Bad</a></li>
                                <li><a href="https://walkingdead.wikia.com">The Walking Dead</a></li>
                            </ul>
                            <hr>
                            <h3 style="color: #FFFFFF; margin: 10px;">About Developer</h3><br>
                            <img src="images/fbdp.jpg" style="height: 150px; width: 150px; border-radius: 100px;" class="center-block">
                            <br>
                            <p style="margin: 10px; color: #FAFAFA; font-size: 17px; line-height: 24px;"> This is me, Sanjay Shanbhag, the creator of this application. I am a Web Developer and a student of Computer Science Engineering.</p>
                            <h5 style="color: #FFFFFF; margin: 10px;">Note From The Developer:</h5>
                            <p style="margin: 10px; color: #FAFAFA; font-size: 13px; line-height: 24px;">This is not a finished product, and is still being improved. So, whenever you encounter any kind of bug, regardless of however small it maybe, it would be a great help if you could bring it to my notice. Just shoot me an email and I will try to fix the issue as soon as possible and inform you of the same.</p>
                            <p style="margin: 10px; color: #FAFAFA; font-size: 13px; line-height: 24px;">Thank You.</p>
                            <p style="margin: 10px; color: #FAFAFA; font-size: 13px; line-height: 24px;"> Email: sanjayb.shanbhag@gmail.com</p>
                            <p style="margin: 10px; color: #FAFAFA; font-size: 13px; line-height: 24px;"> Note, all the logos, article content and article images belong to their respective users and fandom websites linked above.</p>
                            <br>
                            <div class="center-block icons-social">
                                <a target="_blank" href="https://github.com/sanjayshanbhag"><i class="fab fa-github"></i></a>
                                <a target="_blank" href="https://twitter.com/sanjay_shanbhag"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://www.facebook.com/sanjay.shanbhag.58"><i class="fab fa-facebook"></i></a>
                                <a target="_blank" href="https://www.linkedin.com/in/sanjayshanbhag10"><i class="fab fa-linkedin"></i></a>
                            </div>
                        <div class="col-sm-2 col-lg-2 col-md-2">
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
            <br><br>
        </div>
    </body>
</html>