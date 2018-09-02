<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Marvel Wikia</title>
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
                            <h3 style="text-align: center; color: #FAFAFA; margin-bottom: 0;">The Marvel</h3>
                            <h3 style="text-align: center; color: #FAFAFA; margin-top: 5px;">Wiki</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                           
                                
                                    <img src="images/skyrimwall.jpg" style="width: 100%;" class="wallp">
                                
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <br>
                                
                                <p style="text-align: justify; font-weight: 100;">Marvel Comics is the common name and primary imprint of Marvel Worldwide Inc., formerly Marvel Publishing, Inc. and Marvel Comics Group, a publisher of American comic books and related media. In 2009, The Walt Disney Company acquired Marvel Entertainment, Marvel Worldwide's parent company.</p>

                                <p style="text-align: justify; font-weight: 100;">Marvel started in 1939 as Timely Publications, and by the early 1950s, had generally become known as Atlas Comics. The Marvel branding began 1961, the year that the company launched The Fantastic Four and other superhero titles created by Stan Lee, Jack Kirby, Steve Ditko, and many others.</p>

                                <p style="text-align: justify; font-weight: 100;">Among Marvel's most well-known characters are superheroes such as Spider-Man, Wolverine, the Hulk, Thor, Iron Man, Captain America, Daredevil, Black Panther, and Captain Marvel, including such teams as the Avengers, the X-Men, the Guardians of the Galaxy, and the Fantastic Four, and antagonists such as Doctor Doom, the Red Skull, the Green Goblin, Thanos, Ultron, Doctor Octopus, Magneto, and Loki. Most of Marvel's fictional characters operate in a single reality known as the Marvel Universe, with most locations mirroring real-life places; many major characters are based in New York City.</p>

                                <h4>Marvel Comics</h4>
                                <p style="text-align: justify; font-weight: 100;">The first modern comic books under the Marvel Comics brand were the science-fiction anthology Journey into Mystery #69 and the teen-humor title Patsy Walker #95 (both cover dated June 1961), which each displayed an "MC" box on its cover. Then, in the wake of DC Comics' success in reviving superheroes in the late 1950s and early 1960s, particularly with the Flash, Green Lantern, and other members of the team the Justice League of America, Marvel followed suit.</p>

                                <p style="text-align: justify; font-weight: 100;">In 1961, writer-editor Stan Lee revolutionized superhero comics by introducing superheroes designed to appeal to older readers than the predominantly child audiences of the medium. Modern Marvel's first superhero team, the titular stars of The Fantastic Four #1 (Nov. 1961), broke convention with other comic book archetypes of the time by squabbling, holding grudges both deep and petty, and eschewing anonymity or secret identities in favor of celebrity status. Subsequently, Marvel comics developed a reputation for focusing on characterization and adult issues to a greater extent than most superhero comics before them, a quality which the new generation of older readers appreciated. This applied to The Amazing Spider-Man title in particular, which turned out to be Marvel's most successful book. Its young hero suffered from self-doubt and mundane problems like any other teenager, something with which many readers could identify.</p>

                                <p style="text-align: justify; font-weight: 100;">Lee and freelance artist and eventual co-plotter Jack Kirby's Fantastic Four originated in a Cold War culture that led their creators to revise the superhero conventions of previous eras to better reflect the psychological spirit of their age. Eschewing such comic-book tropes as secret identities and even costumes at first, having a monster as one of the heroes, and having its characters bicker and complain in what was later called a "superheroes in the real world" approach, the series represented a change that proved to be a great success.</p>

                                <p style="text-align: justify; font-weight: 100;">Marvel often presented flawed superheroes, freaks, and misfits—unlike the perfect, handsome, athletic heroes found in previous traditional comic books. Some Marvel heroes looked like villains and monsters such as the Hulk and the Thing. This naturalistic approach even extended into topical politics.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <h2>Top Articles</h2><br>
                                <img src="https://vignette.wikia.nocookie.net/marveldatabase/images/c/cb/Infinity_Vol_1_4_Generals_Variant_Textless.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/572/window-height/572?cb=20130628193007" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Marvel/article.php/2456">Thanos (Earth-616)</a><br>
                                <p>Thanos was one of the last sons of A'Lars, progenitor of the second colony of Eternals on Titan...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/marveldatabase/images/b/bf/One-Above-All_%28Multiverse%29_from_Thanos_The_Infinity_Finale_Vol_1_1_001.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/412/window-height/412?cb=20160426140219" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Marvel/article.php/15187">One-Above-All (Multiverse)</a><br>
                                <p">Apparently responsible for the existence of all life in the Multiverse and possibly beyond, the...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/marveldatabase/images/0/07/Amazing_Spider-Man_Vol_3_19.1_Ponsor_Variant_Textless.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/791/window-height/791?cb=20150319005417" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Marvel/article.php/1678">Peter Parker (Earth-616)</a><br>
                                <p>See also: Expanded History Peter Benjamin Parker was born in Queens to Richard and Mary Parker...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/marveldatabase/images/3/31/StanLeePresents_TheMightyMarvelComics_StrengthAndFitnessBook.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/500/window-height/500?cb=20140331125238" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Marvel/article.php/6156">Strength Scale</a><br>
                                <p>The purpose of this Strength Scale is to, eventually, put all the characters of the Marvel...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/marveldatabase/images/b/b6/Infinity_Countdown_Prime_Vol_1_1_Textless.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/906/window-height/906?cb=20171219184232" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Marvel/article.php/15594">Infinity Gems</a><br>
                                <p>Before being called the Infinity Gems, these items were known as the Soul Gems. The first soul...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/marveldatabase/images/7/72/Black_Order_%28Earth-616%29_from_Avengers_Vol_1_681_001.jpg/revision/latest/window-crop/width/200/x-offset/19/y-offset/0/window-width/1053/window-height/1052?cb=20180224004235" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Marvel/article.php/640772">Black Order (Earth-616)</a><br>
                                <p>The Black Order is a group of lethal aliens gathered by Thanos in order to help him in his...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/marveldatabase/images/4/4f/Soul_Gem_from_Infinity_Countdown_Prime_Vol_1_1_001.jpg/revision/latest/window-crop/width/200/x-offset/158/y-offset/0/window-width/597/window-height/596?cb=20180222031853" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Marvel/article.php/15691">Soul Gem</a><br>
                                <p>One of six Infinity Gems that grant its user control over reality. According to the most...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/marveldatabase/images/b/b1/Captain_America_Vol_6_2_Textless.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/900/window-height/900?cb=20110719042719" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Marvel/article.php/7139">Steven Rogers (Earth-616)</a><br>
                                <p>See also: Expanded History Steve Rogers was born July 4, 1920, to poor Irish immigrant parents...</p><hr style="border-color: #636363;">

                                <img src="null" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Marvel/article.php/302773">Power Grid</a><br>
                                <p>The ability to think and process information. Slow/Impaired, Normal, Learned, Gifted, Genius...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/marveldatabase/images/e/e1/The_Marvel_Universe.png/revision/latest/window-crop/width/200/x-offset/257/y-offset/0/window-width/689/window-height/688?cb=20110513164401" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Marvel/article.php/6678">Characters</a><br>
                                <p>A comprehensive list of every character that can be found on the Marvel Database. With over...</p><hr style="border-color: #636363;">
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