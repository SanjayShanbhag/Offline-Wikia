<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Witcher Wikia</title>
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
                            <h3 style="text-align: center; color: #FAFAFA; margin-bottom: 0;">The Witcher</h3>
                            <h3 style="text-align: center; color: #FAFAFA; margin-top: 5px;">Wiki</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                           
                                
                                    <img src="images/skyrimwall.jpg" style="width: 100%;" class="wallp">
                                
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <br>
                                

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">The Witcher (Polish: Wiedźmin [ˈvʲjɛ̇ʥ̑mʲĩn]) is an action role-playing game developed by CD Projekt Red and published by Atari, based on the novel series of The Witcher by Polish author Andrzej Sapkowski. The story takes place in a medieval fantasy world and follows Geralt of Rivia, one of a few traveling monster hunters who have supernatural powers, known as Witchers. The game's system of moral choices as part of the storyline was noted for its time-delayed consequences and lack of black-and-white morality.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">The game utilizes BioWare's proprietary Aurora Engine. A console version was to be released in late 2009 using an entirely new engine and combat system and entitled The Witcher: Rise of the White Wolf; it was suspended, however, due to payment problems with console developers Widescreen Games. Two sequels were released: The Witcher 2: Assassins of Kings in 2011 and The Witcher 3: Wild Hunt in 2015.</p>

                                <br>
                                <h4 style="color: #FAFAFA;">Gameplay</h4>
                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">There are three camera styles available in The Witcher: two top-down perspectives, where the mouse is used to control most functions, and an over-the-shoulder view, which brings the player closer to the in-game combat, but limits visibility. In all three views the controls can be changed to be primarily mouse focused or a combined keyboard and mouse approach.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">The combat system in The Witcher represents a different gaming experience from most RPGs. Players can choose one of three fighting styles to use in different situations and against different foes. The fast style allows for faster, less-damaging attacks with a greater chance of hitting faster enemies; the strong style deals more damage in exchange for a slow attack speed, and a lower chance to hit faster enemies; and the group style features sweeping attacks best used if Geralt is surrounded. The player can switch between the styles at any point. Both of Geralt's main swords also have distinctively different combat styles from other weaponry, and serve specific purposes. The steel blade is used to fight humans and other flesh-and-blood beings, while the silver sword is more effective against supernatural monsters and beasts (against some of which steel may have no effect whatsoever). With precise timing, the player can link Geralt's attacks into combos to more effectively damage enemies.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">Alchemy is a major part of gameplay. The player can create potions that increase health or endurance regeneration, allow Geralt to see in the dark, or provide other beneficial effects. The recipes for these potions can be learned through scrolls, or by experimentation. Once the player creates an unknown potion he can choose to drink it, but if the potion is a failure it will poison or have other harmful effects on Geralt. Each time Geralt drinks potions they increase the toxicity level of his body. This can be reduced by drinking a special potion or by meditating at an inn or fireplace. In addition to potions, the player can create oils used to augment the damage done by weapons. They can also create bombs for use as weapons in combat. Neither can be created until talent points have been allocated into the corresponding skills.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">A time delayed decision-consequence system means that the repercussions of players' decisions will make themselves apparent in plot devices in later acts of the game. This prompts the players to put more critical thinking into making each decision, and circumvents a save-reload approach to decision making. It also allows the game to have a unique approach to replay value, as the consequences resulting from the player's decisions can lead to great difference in the events that take place later, and ultimately a very different gameplay experience than in prior play-throughs.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">The nature of the options faced when playing the game rarely falls into the typical black-and-white morality present in most computer RPGs, and the players often find themselves choosing from the lesser of two evils rather than making a clear choice between good and evil, a situation more reflective of real life morality.</p>

                                <br>
                                <h4 style="color: #FAFAFA;">Plot</h4>
                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">The game tells the story of Geralt of Rivia, a Witcher – a genetically enhanced human with special powers trained to slay monsters. The Witcher contains three different paths, which affect the game’s storyline. These paths are: alliance with the Scoia'tael, a guerrilla freedom-fighting group of Elves and other non-humans; alliance with the Order of the Flaming Rose, whose knights protect the country of Temeria; or alliance with neither group to maintain "Witcher neutrality".</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">In the game’s opening cutscene, Geralt is tasked with curing King Foltest's daughter, Princess Adda, of a curse that transforms her into a feral monster. Years later, a group of Witchers find an amnesiac Geralt unconscious in a field and take him to the Witcher stronghold of Kaer Morhen. As he struggles to recall his memories, the castle is attacked by a gang of bandits named the Salamandra. The Witchers and sorceress Triss Merigold battle the invaders, but the mage Azar Javed and the assassin Professor escape with the mutagenic potions that genetically alter the Witchers. The Witchers head off in different directions to find information on the Salamandra.</p>


                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">Geralt heads south to Vizima, capital of Temeria and where Foltest reigns. On the outskirts, he meets a magically gifted child called Alvin and learns that Vizima is in quarantine. To obtain a pass, Geralt defeats a hellhound plaguing the outskirts, but is arrested upon trying to enter Vizima. Geralt volunteers to kill a monster in the sewers in exchange for his freedom from jail and emerges in Vizima's Temple Quarter. With the help of a private investigator, Geralt pursues multiple leads on the Salamandra and witnesses rising tensions between the Order of the Flaming Rose and the Scoia'tael. After a confrontation with Azar Javed and the Professor, Geralt is knocked unconscious and saved by Triss, who invites him to a party of high-standing officials in Vizima's Trade Quarter. There, Geralt meets Princess Adda and gains several new leads on Salamandra's business front. As the Order and the Scoia'tael grow bolder in their efforts, Geralt finds out more about Alvin's powers and visions while taking down Salamandra drug operations.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">Geralt finally assaults a Salamandra base in Vizima with the help of either the Order or the Scoia'tael and kills the Professor, but finds himself surrounded by royal guards after escaping. Adda, who has been forging royal edicts in Foltest's absence, declares that she must kill him to conceal her treachery, but Triss teleports him to a village on the other side of Vizima Lake. Geralt and his friend Dandelion find some unsteady peace while taking care of Alvin, helping with problems surrounding an ill-fated wedding, and negotiating between the village and the inhabitants of an aquatic city. Eventually, however, the conflict between the Order and the Scoia'tael threatens the village, forcing Geralt to finally pick a side or make enemies of both factions. The scared Alvin mysteriously disappears in a flash, and Geralt and Dandelion decide to sail back to Vizima to end Salamandra.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">Foltest finally returns and retakes control of his castle, but at the same time civil war has broken out. The Scoia'tael have caused an uprising, and the Order of the Flaming Rose has responded by killing non-humans with little discern. Depending on which side Geralt took in the previous battle, he must either help the knights or the elves in the battle or assist nurses in a field hospital. He also deals with Adda, who has suffered from a relapse of her curse, after which the grateful king discloses clues about Azar Javed's location. Storming the main Salamandra base with his allies, Geralt finally kills the evil mage, but is shocked to learn that the Grand Master of the Order of the Flaming Rose is the mastermind behind Salamandra's mutation program.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">With most Knights of the Order and their mutants now entering open rebellion, the king again turns to Geralt with a contract to kill the Grand Master. Upon being confronted, the Grand Master tries to persuade Geralt of his "greater plan" to save humanity from prophecies of world-consuming ice. The skeptical Geralt is cast into an icy wasteland illusion by the Grand Master, who bears striking similarities to Alvin. Geralt successfully defeats him and is then approached by the King of the Wild Hunt in specter form, to collect the Grand Master's soul. The specter warns Geralt of the impending events or fights him and disappears, upon which Geralt murders the Grand Master and escapes the illusion. In the ending cut scene, a man with a Witcher’s vertical pupils attempts to assassinate Foltest, but is thwarted by Geralt, leading directly into The Witcher 2: Assassins of Kings.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <h2 style="color: #FFFFFF;">Top Articles</h2><br>
                                <img src="https://vignette.wikia.nocookie.net/witcher/images/c/c8/TheWitcher3BoxArt.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1070/window-height/1070?cb=20150512225156" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/17178">The Witcher 3: Wild Hunt</a><br>
                                <p style="color: #FAFAFA;">The Witcher 3: Wild Hunt (Polish: Wiedźmin 3: Dziki Gon) is the third and final installment in...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/witcher/images/4/4d/The-Witcher-3-Guides-Header.jpg/revision/latest/window-crop/width/200/x-offset/251/y-offset/0/window-width/201/window-height/200?cb=20150518190356" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/37949">The Witcher 3: Wild Hunt - Guide to Romance</a><br>
                                <p style="color: #FAFAFA;">The purpose of this guide is to maximize your chances for romantic encounters in The Witcher 3...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/witcher/images/f/f5/Tw3_journal_ciri.png/revision/latest/scale-to-width-down/200?cb=20160527150710" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/2754">Ciri</a><br>
                                <p style="color: #FAFAFA;">Cirilla Fiona Elen Riannon (also known as Ciri), was born in 1253 or 1252, and most likely...</p><hr>
                                
                                <img src="NULL" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/21770">The Witcher 3 main quests</a><br>
                                <p style="color: #FAFAFA;">This page is a finding aid which lists all main quests in The Witcher 3: Wild Hunt first by...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/witcher/images/a/a0/Tw3_Geralt_of_Rivia_newest_render.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/600/window-height/600?cb=20170606064646" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/1801">Geralt of Rivia</a><br>
                                <p style="color: #FAFAFA;">Geralt of Rivia is a witcher and the main protagonist of the Witcher series by Andrzej Sapkowski...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/witcher/images/a/a4/Tw3_icon_monsters.png/revision/latest/window-crop/width/200/x-offset/8/y-offset/0/window-width/223/window-height/222?cb=20160331170001" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/21869">The Witcher 3 bestiary</a><br>
                                <p style="color: #FAFAFA;">A bestiary is usually a volume containing information on different creatures, either living or...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/witcher/images/2/27/Triss-TW3-new-render.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1052/window-height/1052?cb=20160402173701" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/2035">Triss Merigold</a><br>
                                <p style="color: #FAFAFA;">Triss Merigold of Maribor was a legendary Temerian sorceress of the 13th century. Called...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/witcher/images/7/72/Official_promo_artwork.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/952/window-height/952?cb=20160118191911" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/2007">Yennefer</a><br>
                                <p style="color: #FAFAFA;">Yennefer (born on Belleteyn of the year 1173) was a sorceress who lived in Vengerberg, the...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/witcher/images/4/4b/Wolf_School_medallion.png/revision/latest/window-crop/width/200/x-offset/4/y-offset/0/window-width/361/window-height/360?cb=20151008164535" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/22545">The Witcher 3 secondary quests</a><br>
                                <p style="color: #FAFAFA;">This page is a finding aid which lists all secondary quests (Not including contracts or...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/witcher/images/f/fc/Feline_front-625x394.jpg/revision/latest/window-crop/width/200/x-offset/117/y-offset/0/window-width/395/window-height/394?cb=20150920180419" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/63508">Scavenger Hunt: Cat School Gear</a><br>
                                <p style="color: #FAFAFA;">As with normal Scavenger Hunts, there are purchasable maps that reveal the starting location for...</p><hr>
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