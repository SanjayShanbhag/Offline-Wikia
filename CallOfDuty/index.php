<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Call Of Duty Wikia</title>
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
                            <h3 style="text-align: center; color: #FAFAFA; margin-bottom: 0;">The Call Of Duty</h3>
                            <h3 style="text-align: center; color: #FAFAFA; margin-top: 5px;">Wiki</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                           
                                
                                    <img src="images/skyrimwall.jpg" style="width: 100%;" class="wallp">
                                
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <br>
                               
                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">Call of Duty is a first-person shooter video game franchise. The series began on Microsoft Windows, and later expanded to consoles and handhelds. Several spin-off games have been released. The earlier games in the series are set primarily in World War II, but later games like Call of Duty 4: Modern Warfare are set in modern times or in futuristic settings. The most recent game, Call of Duty: WWII, was released on November 3, 2017. An upcoming title, Call of Duty: Black Ops 4, is in development and to be released October 2018.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">The Call of Duty games are published and owned by Activision. While Infinity Ward is still a developer, Treyarch and Sledgehammer Games also develop several of the titles with the release of the studios' games alternating with each other. Some games have been developed by Gray Matter Interactive, Nokia, Exakt Entertainment, Spark Unlimited, Amaze Entertainment, n-Space, Aspyr, Rebellion Developments, Ideaworks Game Studio, and nStigate Games. The games use a variety of engines, including the id Tech 3, the Treyarch NGL, and the IW engine.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">As a first-person shooter, Call of Duty places the player in control of an infantry soldier who makes use of various authentic World War II firearms in combat. Each mission features a series of objectives which are marked on the heads-up display's compass; the player must complete all objectives to advance to the next mission. The player can save and load at any time, rather than the checkpoint system utilized in later Call of Duty games.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">The player has two primary weapon slots, a handgun slot and can carry up to ten grenades. Weapons may be exchanged with those found on the battlefield dropped by dead soldiers. Unlike later Call of Duty games, the first allows the player to toggle between different firing modes (single shot or automatic fire). Call of Duty was one of the early first-person shooters to feature iron sights in game play; by pressing the corresponding key the player aims down the actual sights on the gun for increased accuracy. In addition to weapons carried by the player, mounted machine guns and other fixed weapon emplacements are controllable by the player.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">The game uses a standard health points system, with a limited amount of health reflected by a health bar. Medkits scattered throughout the levels or dropped by some foes are used to restore health when the player is injured.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">Call of Duty also featured "shellshock" (not to be confused with the psychological condition of the same name): when there is an explosion near the player, he momentarily experiences simulated tinnitus, appropriate sound "muffling" effects, blurred vision, and also results in the player slowing down, unable to sprint.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">As the focus of the game is on simulation of the actual battlefield, the gameplay differed from many single-player shooters of the time. The player moves in conjunction with allied soldiers rather than alone; allied soldiers will assist the player in defeating enemy soldiers and advancing; however, the player is given charge of completing certain objectives. The game places heavy emphasis on usage of cover, suppressive fire, and grenades. AI-controlled soldiers will take cover behind walls, barricades, and other obstacles when available.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">Call of Duty spawned numerous spin-offs and sequels, part of the Call of Duty series. Its expansion pack - Call of Duty: United Offensive was developed by Gray Matter Interactive and released September 14, 2004. Call of Duty 2 was also developed by Infinity Ward and was released in October 2005. Some Call of Duty spinoffs were developed for consoles, such as Call of Duty: Finest Hour by Spark Unlimited and Call of Duty 2: Big Red One by Gray Matter Interactive (now Treyarch). Call of Duty 3, the first sequel to appear on consoles only, was released in November 2006 and developed by Treyarch and Pi Studios. Call of Duty 4: Modern Warfare, developed by Infinity Ward, was released for the PlayStation 3, Xbox 360 Macintosh and the PC. A Wii version was developed by Treyarch, called Call of Duty: Modern Warfare: Reflex. A handheld version was also produced for the Nintendo DS. Another handheld game, Call of Duty: Roads to Victory was released March 14, 2007 for the PlayStation Portable, the N-Gage, and the Pocket PC. On December 3, 2007 it was announced that Call of Duty: World at War would be developed by Treyarch. It was released November 11, 2008 in the U.S. for the PlayStation 3, Xbox 360, Wii and the PC, and on November 14, 2008 in Europe. A sequel to Call of Duty 4: Modern Warfare called Call of Duty: Modern Warfare 2 was released worldwide on November 10, 2009 for the PlayStation 3, Xbox 360 and PC. Much like Infinity Ward before them, Treyarch has left World War II battlefield and now heads into the Cold War era, which includes the Vietnam War, titled Call of Duty: Black Ops, which was released on November 9, 2010. A sequel to Call of Duty: Modern Warfare 2 called Call of Duty: Modern Warfare 3 was released November 8, 2011. It was released for the PlayStation 3, Xbox 360, PC, Wii, and the Nintendo DS handheld. A sequel to Call of Duty: Black Ops, Call of Duty: Black Ops II, was released on November 13, 2012 for Microsoft Windows, Xbox 360, and PlayStation 3. The Wii U version was released on November 18, 2012. A new entry in the series called Call of Duty: Ghosts was released for Microsoft Windows, PlayStation 3, Wii U, and Xbox 360 on November 5, 2013. Ghosts is the first Call of Duty game available on the PlayStation 4 and Xbox One, as launch titles for both consoles on November 15, 2013 and November 22, 2013 respectively. Another new entry in the series, made by Sledgehammer Games, Call of Duty: Advanced Warfare, was released on November 4, 2014 for Microsoft Windows, PlayStation 4, and Xbox One, with High Moon Studios developing PlayStation 3 and Xbox 360 ports of the game. Call of Duty: Black Ops III was released in November 2015, developed by Treyarch. It is available for PlayStation 4, Xbox One and PC. A new entry in the series, Call of Duty: Infinite Warfare, was released on November 4, 2016, along with a remastered version of Infinity Ward's previous installment into the franchise, Call of Duty 4: Modern Warfare, titled Call of Duty: Modern Warfare Remastered.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <h2 style="color: #FFFFFF;">Top Articles</h2><br>
                                <img src="https://vignette.wikia.nocookie.net/callofduty/images/3/3c/BO4topright.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/284/window-height/284?cb=20180323003612" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/2051">Call of Duty (series)</a><br>
                                <p style="color: #FAFAFA;">Call of Duty is a first-person shooter series created by Infinity Ward. The series is published...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/callofduty/images/1/17/USP_.45_Tactical_Knife_MW2.png/revision/latest/window-crop/width/200/x-offset/69/y-offset/0/window-width/432/window-height/431?cb=20120122130630" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/14550">Tactical Knife</a><br>
                                <p style="color: #FAFAFA;">The Tactical Knife is a weapon attachment featured in Call of Duty: Modern Warfare 2, Call of...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/callofduty/images/2/2d/The_Shadowed_Throne_reveal_image.jpg/revision/latest/window-crop/width/200/x-offset/281/y-offset/0/window-width/721/window-height/720?cb=20180327172328" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/675036">The Shadowed Throne</a><br>
                                <p style="color: #FAFAFA;">The Shadowed Throne is the fourth Nazi Zombies map in Call of Duty: WWII. It is part of the...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/callofduty/images/6/6c/COD_WWII_cover.JPG/revision/latest/scale-to-width-down/200?cb=20170427220650" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/615299">Call of Duty: WWII</a><br>
                                <p style="color: #FAFAFA;">Call of Duty: WWII is a first-person shooter video game developed by Sledgehammer Games for the...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/callofduty/images/9/95/Carentan_View_1_WWII.jpg/revision/latest/window-crop/width/200/x-offset/421/y-offset/0/window-width/1081/window-height/1080?cb=20171223000154" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/665982">Call of Duty: WWII Multiplayer Maps</a><br>
                                <p style="color: #FAFAFA;">Multiplayer maps in Call of Duty: WWII.</p><hr>

                                <img src="null" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/265238">Maps</a><br>
                                <p style="color: #FAFAFA;">Maps are the battlefields where the player battle enemy players in multiplayer modes...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/callofduty/images/d/db/Modern_Warfare_2_cover.PNG/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/312/window-height/312?cb=20120120052622" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/346620">Call of Duty: Modern Warfare 2</a><br>
                                <p style="color: #FAFAFA;">Call of Duty: Modern Warfare 2 (mostly referred to as Modern Warfare 2, MW2 or COD6) is the...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/callofduty/images/7/76/Game_cover_art_BOIII.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/500/window-height/500?cb=20160211194000" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/615297">Call of Duty: Black Ops III</a><br>
                                <p style="color: #FAFAFA;">Call of Duty: Black Ops III is a first-person shooter video game developed by Treyarch for Xbox...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/callofduty/images/0/02/CoD_Black_Ops_cover.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/256/window-height/256?cb=20120306002815" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/28027">Call of Duty: Black Ops</a><br>
                                <p style="color: #FAFAFA;">Call of Duty: Black Ops, abbreviated as CoD: BO or simply BO, is the seventh main Call of Duty...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/callofduty/images/e/e7/ReznovNova.png/revision/latest/window-crop/width/200/x-offset/316/y-offset/0/window-width/1051/window-height/1050?cb=20120121072301" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/7991">Viktor Reznov</a><br>
                                <p style="color: #FAFAFA;">Captain Viktor Reznov (Russian: Виктор Резнов) was a Russian squad leader of the Red Army in...</p><hr>
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