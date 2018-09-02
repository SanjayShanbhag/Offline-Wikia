<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>DC Wikia</title>
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
                            <h3 style="text-align: center; color: #FAFAFA; margin-bottom: 0;">The DC</h3>
                            <h3 style="text-align: center; color: #FAFAFA; margin-top: 5px;">Wiki</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                           
                                
                                    <img src="images/skyrimwall.png" style="width: 100%;" class="wallp">
                                
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <br>
                                
                                <p style="text-align: justify; font-weight: 100;">DC Comics, Inc. is an American comic book publisher. It is the publishing unit of DC Entertainment, a subsidiary of Warner Bros. Entertainment, Inc., a division of Time Warner. DC Comics is one of the largest and oldest American comic book companies, and produces material featuring numerous well-known heroic characters including Superman, Batman, Wonder Woman, Green Lantern, The Flash, The Spectre, The Atom, Aquaman, Hawkman, Martian Manhunter, Supergirl, Nightwing, Green Arrow, Static, Starfire, Black Canary, Zatanna and Cyborg. Most of their material takes place in the fictional DC Universe, which also features teams such as the Justice League, the Justice Society of America, the Suicide Squad, and the Teen Titans, and well-known villains such as The Joker, The Penguin, Lex Luthor, Deadshot, Cheetah, Harley Quinn, Darkseid, Catwoman, Ares, Riddler, Ra's al Ghul, Deathstroke, Bizarro, Scarecrow, Two-Face, General Zod, Bane, Reverse-Flash, Sinestro, Doomsday, Black Adam, and Brainiac. The company has also published non-DC Universe-related material, including Watchmen, V for Vendetta, and many titles under their alternative imprint Vertigo.</p>

                                <p style="text-align: justify; font-weight: 100;">The initials "DC" came from the company's popular series Detective Comics, which featured Batman's debut and subsequently became part of the company's name. Originally in Manhattan at 432 Fourth Avenue, the DC Comics offices have been located at 480 and later 575 Lexington Avenue; 909 Third Avenue; 75 Rockefeller Plaza; 666 Fifth Avenue; and 1325 Avenue of the Americas. DC had its headquarters at 1700 Broadway, Midtown Manhattan, New York City, but it was announced in October 2013 that DC Entertainment would relocate its headquarters from New York to Burbank, California in April 2015.</p>

                                <p style="text-align: justify; font-weight: 100;">In September 2009, Warner Bros. announced that DC Comics would become a subsidiary of DC Entertainment, Inc., with Diane Nelson, President of Warner Premiere, becoming president of the newly formed holding company and DC Comics President and Publisher Paul Levitz moving to the position of Contributing Editor and Overall Consultant there.</p>

                                <p style="text-align: justify; font-weight: 100;">On February 18, 2010, DC Entertainment named Jim Lee and Dan DiDio as Co-Publishers of DC Comics, Geoff Johns as Chief Creative Officer, John Rood as EVP (Executive Vice President) of Sales, Marketing and Business Development, and Patrick Caldon as EVP of Finance and Administration.</p>

                                <p style="text-align: justify; font-weight: 100;">DC licensed pulp characters including Doc Savage and the Spirit which it then used, along with some DC heroes, as part of the First Wave comics line launched in 2010 and lasting through fall 2011.</p>

                                <p style="text-align: justify; font-weight: 100;">In May 2011, DC announced it would begin releasing digital versions of their comics on the same day as paper versions.</p>

                                <p style="text-align: justify; font-weight: 100;">On June 1, 2011, DC announced that it would end all ongoing series set in the DC Universe in August and relaunch its comic line with 52 issue #1s, starting with Justice League on August 31 (written by Geoff Johns and drawn by Jim Lee), with the rest to follow later on in September.</p>

                                <p style="text-align: justify; font-weight: 100;">On June 4, 2013, DC unveiled two new digital comic innovations to enhance interactivity: DC2 and DC2 Multiverse. DC2 layers dynamic artwork onto digital comic panels, adding a new level of dimension to digital storytelling, while DC2 Multiverse allows readers to determine a specific story outcome by selecting individual characters, storylines and plot developments while reading the comic, meaning one digital comic has multiple outcomes. DC2 will first appear in the upcoming digital-first title, Batman '66, based on the 1960s television series and DC2 Multiverse will first appear in Batman: Arkham Origins, a digital-first title based on the video game of the same name.</p>

                                <p style="text-align: justify; font-weight: 100;">In October 2013, DC Entertainment (DCE) announced that the DC Comics offices would be moved from New York City to Warner Bros. Burbank, California, headquarters in 2015. The other DCE units – animation, movie, TV and portfolio planning – had preceded DC Comics by moving there in 2010.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <h2>Top Articles</h2><br>
                                <img src="https://vignette.wikia.nocookie.net/marvel_dc/images/3/33/Batman_002.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/900/window-height/900?cb=20130412165015" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/1422">Batman (Bruce Wayne)</a><br>
                                <p>Batman is the superhero protector of Gotham City, a man dressed like a bat who fights against...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/marvel_dc/images/1/14/Superman_0002.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/400/window-height/400?cb=20100419210629" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/23387">Superman (Clark Kent)</a><br>
                                <p>Superman is the most powerful being on planet Earth, an alien immigrant named Kal-El from the...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/marvel_dc/images/4/42/Flash_0001.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/900/window-height/900?cb=20120215162610" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/1380">Flash (Barry Allen)</a><br>
                                <p>Barry Allen is the second incarnation of The Flash, the fastest man alive. Using his super-speed...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/marvel_dc/images/9/95/Wonder_Woman_0024.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/618/window-height/618?cb=20140728202508" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/1448">Wonder Woman (Diana Prince)</a><br>
                                <p>Diana is the daughter of Queen Hippolyta, the first child born on Paradise Island in the three...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/marvel_dc/images/c/ce/Blight_01.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/623/window-height/623?cb=20090126053357" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/94237">Blight (Post-Zero Hour)</a><br>
                                <p>The Blight were intergalactic nomads comprised of techno-organic symbionts. This scientifically...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/marvel_dc/images/5/56/Batman_0180.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/960/window-height/960?cb=20130530164421" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/2359">Batman</a><br>
                                <p>This is the Batman disambiguation page. Batman is the super-hero protector of Gotham City, a man...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/marvel_dc/images/e/e1/Joker_0001.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/881/window-height/881?cb=20130730172137" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/45789">Joker</a><br>
                                <p>This is the Joker disambiguation page. The Joker is a serial killer and a super-villain, a...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/marvel_dc/images/5/57/Dark_Knights.png/revision/latest/window-crop/width/200/x-offset/150/y-offset/0/window-width/983/window-height/982?cb=20170913205610" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/517818">Dark Knights (Dark Multiverse)</a><br>
                                <p>See Also 24 Appearances of Dark Knights (Dark Multiverse), 6 Images that include Dark Knights...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/marvel_dc/images/5/5d/Adam_Strange_06.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1200/window-height/1200?cb=20111021201755" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/1829">Adam Strange (New Earth)</a><br>
                                <p>Adam Strange was once a mere human archaeologist, one day while working on a dig in Caramanga...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/marvel_dc/images/b/bc/Trinity_of_Sin_Pandora_Vol_1_6_Textless.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/725/window-height/725?cb=20131218231942" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/364579">Blight (Prime Earth)</a><br>
                                <p>Blight is the gestalt entity formed through all of humanity's evils that was augmented and given...</p><hr style="border-color: #636363;">
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