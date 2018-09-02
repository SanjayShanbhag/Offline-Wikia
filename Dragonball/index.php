<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dragon Ball Wikia</title>
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
                            <h3 style="text-align: center; color: #FAFAFA; margin-bottom: 0;">The Dragon Ball</h3>
                            <h3 style="text-align: center; color: #FAFAFA; margin-top: 5px;">Wiki</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                           
                                
                                    <img src="images/skyrimwall.png" style="width: 100%;" class="wallp">
                                
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <br>
                                

                                <p style="text-align: justify; font-weight: 100;">Dragon Ball (Japanese: ドラゴンボール Hepburn: Doragon Bōru) is a Japanese media franchise created by Akira Toriyama in 1984. The initial manga, written and illustrated by Toriyama, was serialized in Weekly Shōnen Jump from 1984 to 1995, with the 519 individual chapters collected into 42 tankōbon volumes by its publisher Shueisha. Dragon Ball was initially inspired by the classical Chinese novel Journey to the West. The series follows the adventures of the protagonist, Son Goku, from his childhood through adulthood as he trains in martial arts and explores the world in search of the seven orbs known as the Dragon Balls, which summon a wish-granting dragon when gathered. Along his journey, Goku makes several friends and battles a wide variety of villains, many of whom also seek the Dragon Balls.</p>

                                <p style="text-align: justify; font-weight: 100;">The Dragon Ball manga has been adapted into two anime series produced by Toei Animation: Dragon Ball and Dragon Ball Z, which together were broadcast in Japan from 1986 to 1996. Additionally, the studio has developed 19 animated feature films and three television specials, as well as two anime sequel series titled Dragon Ball GT (1996–1997) and Dragon Ball Super (2015–2018). From 2009 to 2015, a revised, faster-paced version of Dragon Ball Z aired in Japan under the title Dragon Ball Kai, in which most of the original version's "filler" material is removed. Several companies have developed various types of merchandising based on the series leading to a large media franchise that includes films, both animated and live-action, collectible trading card games, numerous action figures, along with several collections of soundtracks and a large number of video games. As of January 2012, the franchise generated $5 billion in merchandise, making Dragon Ball one of the most merchandisable anime based media franchises of all time.</p>

                                <p style="text-align: justify; font-weight: 100;">Since its release, Dragon Ball has become one of the most successful manga and anime series of all time. The manga's 42 volumes have sold over 156 million copies in Japan and more than 240 million copies worldwide, making it the second best-selling manga series in history. Reviewers have praised the art, characterization, and humor of the story. It is widely regarded as one of the greatest manga series ever made, with many manga artists citing Dragon Ball as a source of inspiration for their own now popular works. The anime, particularly Dragon Ball Z, is also highly popular in various countries and was arguably one of the most influential in boosting the popularity of Japanese animation in Western culture.</p>

                                <br>
                                <h4>Dragon Ball</h4>
                                <p style="text-align: justify; font-weight: 100;">Toei Animation produced an anime television series based on the first 194 manga chapters, also titled Dragon Ball. The series premiered in Japan on Fuji Television on February 26, 1986 and ran until April 12, 1989, lasting 153 episodes.</p>

                                <br>
                                <h4>Dragon Ball Z</h4>
                                <p style="text-align: justify; font-weight: 100;">Instead of continuing the anime as Dragon Ball, Toei Animation decided to carry on with their adaptation under a new name and asked Akira Toriyama to come up with the title. Dragon Ball Z (ドラゴンボールZ(ゼット) Doragon Bōru Zetto, commonly abbreviated as DBZ) picks up five years after the first series left off and adapts the final 325 chapters of the manga. It premiered in Japan on Fuji Television on April 26, 1989, taking over its predecessor's time slot, and ran for 291 episodes until its conclusion on January 31, 1996. Two television specials based on the Z series were aired on Fuji TV in Japan. The first, The One True Final Battle ~The Z Warrior Who Challenged Freeza -- Son Goku's Father~, renamed Bardock – The Father of Goku by Funimation, was shown on October 17, 1990. The second special, The Hopeless Resistance!! Gohan and Trunks -- The Two Remaining Super Warriors, renamed The History of Trunks by Funimation, is based on a special chapter of the original manga and aired on March 24, 1993.</p>

                                <br>
                                <h4>Dragon Ball GT</h4>
                                <p style="text-align: justify; font-weight: 100;">Dragon Ball GT (ドラゴンボールGT(ジーティー) Doragon Bōru Jī Tī, G(rand) T(ouring)) premiered on Fuji TV on February 2, 1996 and ran until November 19, 1997 for 64 episodes. Unlike the first two anime series, it is not based on Akira Toriyama's original Dragon Ball manga, being created by Toei Animation as a sequel to the series or as Toriyama called it, a "grand side story of the original Dragon Ball." Toriyama designed the main cast, the spaceship used in the show, the design of three planets, and came up with the title and logo. In addition to this, Toriyama also oversaw production of the series, just as he had for the Dragon Ball and Dragon Ball Z anime. The television special episode, Goku Side Story! The Four Star Ball is a Badge of Courage, renamed A Hero's Legacy by Funimation, aired on March 26, 1997, serving as an epilogue to the series.</p>

                                <br>
                                <h4>Dragon Ball Z Kai</h4>
                                <p style="text-align: justify; font-weight: 100;">In February 2009, Dragon Ball Z celebrated its 20th anniversary, with Toei Animation announcing that it would broadcast a re-edited and remastered version under the name Dragon Ball Kai (ドラゴンボール改 Doragon Bōru Kai, lit. "Dragon Ball Revised"). The footage would be re-edited to follow the manga more closely, eliminating scenes and episodes which were not featured in the original manga, resulting in a more faithful adaptation, as well as in a faster-moving, and more focused story. The episodes were remastered for HDTV, with rerecording of the vocal tracks by most of the original cast, and featuring updated opening and ending sequences. On April 5, 2009, the series premiered in Japan airing in Fuji TV. Dragon Ball Z Kai reduced the episode count to 159 episodes (167 episodes internationally), from the original footage of 291 episodes. Damaged frames were removed, resulting in some minor shots being remade from scratch in order to fix cropping, and others to address continuity issues. The majority of the international versions, including Funimation Entertainment's English dub, are titled Dragon Ball Z Kai.</p>

                                <br>
                                <h4>Dragon Ball Super</h4>
                                <p style="text-align: justify; font-weight: 100;">On April 28, 2015, Toei Animation announced Dragon Ball Super (ドラゴンボール超 Doragon Bōru Sūpā), the first all-new Dragon Ball television series to be released in 18 years. It debuted on July 5 and runs as a weekly series at 9:00 am on Fuji TV on Sundays until its series finale on March 25, 2018 after 131 episodes. Masako Nozawa reprises her roles as Goku, Gohan, and Goten. Most of the original cast reprise their roles as well. Kouichi Yamadera and Masakazu Morita also reprise their roles, as Beerus and Whis, respectively.</p>

                                <p style="text-align: justify; font-weight: 100;">The story of the anime is set four years after the defeat of Majin Boo, when the Earth has become peaceful once again. Akira Toriyama is credited as the original creator, as well for "original story & character design concepts." It is also being adapted into a parallel manga.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <h2>Top Articles</h2><br>
                                <img src="https://vignette.wikia.nocookie.net/dragonball/images/5/5b/Gokusteppingoutofaspaceship.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/391/window-height/391?cb=20150325220848" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/1458">Goku</a><br>
                                <p>Son Goku (孫そん悟ご空くう Son Gokū), born Kakarot (カカロット Kakarotto), is a male Saiyan and the main...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/dragonball/images/1/13/Screenshot_%282%29.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/586/window-height/586?cb=20171020234948" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/565857">Goku Black</a><br>
                                <p>Goku Black (ゴクウブラック Gokū Burakku), usually referred to as Black, is the main antagonist of the...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/dragonball/images/3/33/Jiren1.png/revision/latest/window-crop/width/200/x-offset/18/y-offset/0/window-width/939/window-height/938?cb=20170723224647" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/578181">Jiren</a><br>
                                <p>Jiren (ジレン Jiren), also referred to as \"Jiren The Gray\" (灰色のジレン Haiiro no Jiren), is a member of...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/dragonball/images/2/25/Vegeta_DBZ_Ep_222_002.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/656/window-height/656?cb=20170921025547" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/1525">Vegeta</a><br>
                                <p>Vegeta (ベジータ Bejīta) is the prince of the fallen Saiyan race and the deuteragonist of the Dragon...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/dragonball/images/1/1c/9d175d6e11441f8d0ba1684309a8fd2b.jpg/revision/latest/window-crop/width/200/x-offset/299/y-offset/0/window-width/762/window-height/761?cb=20151108081619" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/598496">Ultra Instinct (ability)</a><br>
                                <p>Directory: Techniques → Supportive techniques Ultra Instinct (身み勝がっ手ての極ごく意い Migatte no Gokui...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/dragonball/images/8/83/Frieza_DBZ_Ep_85_002v2.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/634/window-height/634?cb=20170920193805" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/1590">Frieza</a><br>
                                <p>Directory: Characters → Villains → DBZ villains Directory: Characters → Villains → DBS villains...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/dragonball/images/7/7d/BeerusWikia_%283%29.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/468/window-height/468?cb=20170626180040" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/409631">Beerus</a><br>
                                <p>Beerus (ビルス Birusu) is the God of Destruction of Universe 7. He is accompanied by his martial...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/dragonball/images/b/b9/Ultra_Instinct_Goku.png/revision/latest/window-crop/width/200/x-offset/84/y-offset/0/window-width/1116/window-height/1115?cb=20180304035118" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/609922">Ultra Instinct (transformation)</a><br>
                                <p>Directory: Techniques → Supportive techniques → Transformations Ultra Instinct (身み勝がっ手ての極ごく意い...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/dragonball/images/b/b5/Android_21_profile.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/364/window-height/364?cb=20170921180105" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/9572">Android 21</a><br>
                                <p>Directory: Characters → Villains → Former villains Android 21 (人造人間２１号 Jinzōningen Nijūichi-Gō...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/dragonball/images/f/f6/Tournament_of_Power_Arena.png/revision/latest/window-crop/width/200/x-offset/272/y-offset/0/window-width/739/window-height/738?cb=20170620194430" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/577658">Tournament of Power</a><br>
                                <p>Tournament of Power (力の大会, Chikara no Taikai, lit. \"Convention of Power\") is the name of the...</p><hr style="border-color: #636363;">
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