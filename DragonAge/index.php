<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dragon Age Wikia</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<meta charset="utf-8">
    <link rel="manifest" href="../manifest.json">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#212121">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Offline Wikia">
    <link rel="icon" sizes="192x192" href="../favicon.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Offline Wikia">
    <link rel="apple-touch-icon" href="../favicon.png">

    <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#212121">
    <meta name="msapplication-TileImage" content="../favicon.png">
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
      				<a class="navbar-brand" href="#"><img src="../images/logo.png" style="width: 150px; height: 30px;"></a>
    			</div>
    			<div class="collapse navbar-collapse" id="myNavbar">
      				<form class="navbar-form navbar-left" method="GET" action="searchresults.php">
                        <div class="input-group">
                            <input type="text" class="form-control" name="srch" placeholder="Search">
                            <input type="hidden" name="pg" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
      				<ul class="nav navbar-nav navbar-right">
                        <li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        				<li><a href="../saved.php"><span class="glyphicon glyphicon-floppy-disk"></span> Saved Articles</a></li>
        				<li><a href="../about.php"><span class="glyphicon glyphicon-user"></span> About</a></li>
      				</ul>
    			</div>
  			</div>
		</nav>
		<div class="container-fluid back">
			<div class="container">
	           <br><br><br><br>
                <div class="content">
                    <div class="topcon">
                        <img src="images/topfile.png" style="width: 300px; height: 90px; margin: auto;" class="center-block toplog">
                        <div class="toplog1" style="display: none; margin-top: top;">
                            <h3 style="text-align: center; color: #FAFAFA; margin-bottom: 0;">Dragon Age</h3>
                            <h3 style="text-align: center; color: #FAFAFA; margin-top: 5px;">Wiki</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                           
                                
                                    <img src="images/skyrimwall.jpg" style="width: 100%;" class="wallp">
                                
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <br>
                                
                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">Dragon Age is a dark fantasy role-playing video game series created by BioWare. The first game, Dragon Age: Origins, was released in 2009. Dragon Age II, a sequel to Origins, was released in March 2011. Dragon Age: Inquisition was released in November 2014. The series' fantasy setting has been used by a variety of other media, including books and tabletop games, and the three main games have been joined by a variety of downloadable content (DLC) add-ons. A fourth yet unnamed installment has been revealed to be in production.</p>

                                <br>
                                <h4 style="color: #FAFAFA;">Plot</h4>
                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">The player character—"the Warden"—is a new Grey Warden recruit within the realm of Ferelden, and begins their journey to halt the inevitable Fifth Blight as one of the six origin stories. The origin chosen determines who the Warden is prior to the main events of the game's story. By the same measure, it also affects how NPCs (party and non-party) will react to the Warden. Elves, for example, are often viewed as second-class citizens. Facing unexpected betrayal at the hands of those who were supposed to be Ferelden's greatest defenders, the Warden must now utilize the old Grey Warden treaties to gather unlikely allies and build an army to face the Archdemon, an Old God manifested in the form of a powerful and terrifying dragon, now tainted by the darkspawn and risen from its prison beneath the surface to unleash the Blight in the turbulent history of Thedas. The Warden will also gather companions along the way who will support them on this onerous task. As one of the last Grey Wardens remaining within Ferelden, their actions over the course of one year—both indirectly and directly—will decide which factions align with the warden to halt the advance of the Archdemon and its darkspawn hordes, the fate of the world, as well as the fate of those met on your journey.</p>

                                <br>
                                <h4 style="color: #FAFAFA;">Gameplay</h4>
                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">The designers incorporated origin stories for each race and some classes in the game. For example, a dwarf who is a member of the noble caste will begin the game as part of the royal family in one of the dwarven cities, while a dwarf commoner will begin on the streets of the city. Origin stories provide an introduction to the game world and hours of gameplay. People that the Warden meets during the origin story may reappear throughout the game, some of whom may be adversaries.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">There is no tracking of alignment as in previous BioWare games, but the moral choices of the main character throughout the game will still affect the story. You may save the world whether you are good or evil, but the decisions that you make in the process will change the world around you, deciding who will become king, for example, and affecting nations and races and their places in the world. These decisions will also influence your companions, and could ultimately lead to a companion deciding to leave your party if they do not agree with your approach.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">As with the Baldur's Gate series, players will be able to issue orders to NPCs in real time or while the game is paused, and queue up actions such as spells and special attacks.</p>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <h2 style="color: #FFFFFF;">Top Articles</h2><br>
                                <img src="https://vignette.wikia.nocookie.net/dragonage/images/8/86/DAI_Judgement.jpg/revision/latest/window-crop/width/200/x-offset/309/y-offset/0/window-width/793/window-height/792?cb=20130901230130" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/152134">Sit in Judgment</a><br>
                                <p style="color: #FAFAFA;">Sit in Judgment is a side quest in Dragon Age: Inquisition. Someone being held in Skyhold awaits...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/dragonage/images/1/15/Wicked_Eyes_and_Wicked_Hearts.png/revision/latest/window-crop/width/200/x-offset/421/y-offset/0/window-width/1081/window-height/1080?cb=20141128100331" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/146414">Wicked Eyes and Wicked Hearts</a><br>
                                <p style="color: #FAFAFA;">Wicked Eyes and Wicked Hearts is a main quest in Dragon Age: Inquisition. The fate of Empress...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/dragonage/images/2/24/Inquisitionofficiallogo.png/revision/latest/window-crop/width/200/x-offset/293/y-offset/0/window-width/225/window-height/224?cb=20150419090104" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/89807">Dragon Age: Inquisition</a><br>
                                <p style="color: #FAFAFA;">Dragon Age: Inquisition is BioWare's third installment in the Dragon Age video game series...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/dragonage/images/0/00/Dragon_Age-_Inquisition_map.png/revision/latest/window-crop/width/200/x-offset/321/y-offset/0/window-width/641/window-height/640?cb=20141214162347" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/147170">War table</a><br>
                                <p style="color: #FAFAFA;">In Dragon Age: Inquisition, the war table is used to send advisors and their forces to complete...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/dragonage/images/1/1f/What_Pride_Had_Wrought.png/revision/latest/window-crop/width/200/x-offset/264/y-offset/0/window-width/267/window-height/266?cb=20141204175136" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/148209">What Pride Had Wrought</a><br>
                                <p style="color: #FAFAFA;">What Pride Had Wrought is a main quest in Dragon Age: Inquisition. The Inquisition's efforts...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/dragonage/images/4/49/Icon_mac.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/513/window-height/512?cb=20120411195418" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/2558">Gifts (Origins)</a><br>
                                <p style="color: #FAFAFA;">Gifts can be sold to merchants or given to certain companions to influence their approval...</p><hr>

                                <img src="null" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/129225">Classes and specializations (Inquisition)</a><br>
                                <p style="color: #FAFAFA;">There are three available classes in Dragon Age: Inquisition -- mage, rogue and warrior. Each of...</p><hr>

                                <img src="null" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/154391">Divine election</a><br>
                                <p style="color: #FAFAFA;">Election of the Divine is done by the College of Clerics upon the death of the current Divine...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/dragonage/images/e/e6/Beloved_and_Precious.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/241/window-height/240?cb=20141216233434" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/135742">Romance (Inquisition)</a><br>
                                <p style="color: #FAFAFA;">In Dragon Age: Inquisition, the Inquisitor of either gender and any race can pursue a romance...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/dragonage/images/0/0a/Adamant_2.png/revision/latest/window-crop/width/200/x-offset/93/y-offset/0/window-width/201/window-height/200?cb=20140517015854" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/147867">Here Lies the Abyss</a><br>
                                <p style="color: #FAFAFA;">Here Lies the Abyss is a main quest in Dragon Age: Inquisition. Varric has a friend named Hawke...</p><hr>
                            </div>
                        </div>
                        <br>
                    </div>
                    <br>
                </div>
                <br><br>
			</div>
		</div>
</body>
</html>		