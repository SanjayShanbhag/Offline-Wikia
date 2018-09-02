<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Offline Wikia</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<meta charset="utf-8">
    <link rel="manifest" href="manifest.json">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
        @media screen and (max-width: 900px){
            img.wallp{
                height: 250px;
            }

        }
        @media screen and (max-width: 350px){
            .toplog{
                display: none;
            }
            .toplog1{
                display: block !important;
            }
            .content{
                width: 100%;
            }
        }
        img.responsive{
            height: 400px;
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
            <br><br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="ElderScrolls/index.php">
                            <div class="image">
                                <img src="images/skyrim.jpg" style="height: 300px; width: 100%;">
                                <h3><span>The Elder Scrolls</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="GameOfThrones/index.php">
                            <div class="image">
                                <img src="images/got.png" style="height: 300px; width: 100%;">
                                <h3><span>Game Of Thrones</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="Pokemon/index.php">
                            <div class="image">
                                <img src="images/pokemon.png" style="height: 300px; width: 100%;">
                                <h3><span>Pokemon</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="Marvel/index.php">
                            <div class="image">
                                <img src="images/marvel.png" style="height: 300px; width: 100%;">
                                <h3><span>The Marvel Universe</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="HarryPotter/index.php">
                            <div class="image">
                                <img src="images/hp.jpg" style="height: 300px; width: 100%;">
                                <h3><span>Harry Potter</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="PercyJackson/index.php">
                            <div class="image">
                                <img src="images/pj.jpg" style="height: 300px; width: 100%;">
                                <h3><span>Percy Jackson Universe</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="CallOfDuty/index.php">
                            <div class="image">
                                <img src="images/cod.jpg" style="height: 300px; width: 100%;">
                                <h3><span>Call Of Duty</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="GodOfWar/index.php">
                            <div class="image">
                                <img src="images/gow.jpg" style="height: 300px; width: 100%;">
                                <h3><span>God Of War</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="AssassinsCreed/index.php">
                            <div class="image">
                                <img src="images/ac.jpg" style="height: 300px; width: 100%;">
                                <h3><span>The Assassin's Creed</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="DragonAge/index.php">
                            <div class="image">
                                <img src="images/da.jpg" style="height: 300px; width: 100%;">
                                <h3><span>Dragon Age Universe</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="Witcher/index.php">
                            <div class="image">
                                <img src="images/witcher.jpg" style="height: 300px; width: 100%;">
                                <h3><span>The Witcher</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="DC/index.php">
                            <div class="image">
                                <img src="images/dc.jpg" style="height: 300px; width: 100%;">
                                <h3><span>The DC Universe</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="Dragonball/index.php">
                            <div class="image">
                                <img src="images/db.jpg" style="height: 300px; width: 100%;">
                                <h3><span>The Dragonball Universe</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="BreakingBad/index.php">
                            <div class="image">
                                <img src="images/bb.jpg" style="height: 300px; width: 100%;">
                                <h3><span>Breaking Bad</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="center-block card">
                            <a style="text-decoration: none;" href="WalkingDead/index.php">
                            <div class="image">
                                <img src="images/wd.jpg" style="height: 300px; width: 100%;">
                                <h3><span>The Walking Dead</span></h3>
                            </div>
                            </a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <script>
            
            if('serviceWorker' in navigator){
                navigator.serviceWorker.register('sw3.js')
                .then(function(registration) {
                    console.log('Registration Completed: ', registration);
                })
                .catch(function(error) {
                    console.log('Registration Failed: '. error);
                });
            }
            
        </script>
        <script type="text/javascript">
            Notification.requestPermission(function(status) {
                console.log('Notification permission status:', status);
            });
        </script>
    </body>
</html>