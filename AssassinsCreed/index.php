<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Assassins Creed Wikia</title>
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
                            <h3 style="text-align: center; color: #FAFAFA; margin-bottom: 0;">Assassins Creed</h3>
                            <h3 style="text-align: center; color: #FAFAFA; margin-top: 5px;">Wiki</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                           
                                
                                    <img src="images/skyrimwall.jpg" style="width: 100%;" class="wallp">
                                
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <br>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">Assassin's Creed is a franchise centered on an action-adventure video game series developed by Ubisoft. It depicts a centuries-old struggle pitting the Assassins, who fight for peace and free will, against the Templars, who believe peace comes through control of humanity. The series features historical fiction mixed with real-world historical events and figures. The series took inspiration from the novel Alamut by the Slovenian writer Vladimir Bartol, while building upon concepts from the Prince of Persia series.</p>

                                <br>
                                <h4 style="color: #FAFAFA;">Premise</h4>
                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">The Assassin's Creed games primarily revolve around the rivalry between two ancient secret societies — the Assassins and the Knights Templar — and their indirect relation to an ancient species pre-dating humanity, referred to within the games as "those who came before", whose society, along with much of Earth's biosphere, was destroyed by a massive solar storm thousands of years before the games. The games' real-world chronological setting begins in the year 2012.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">Within the franchise, Abstergo Industries is a mega-corporation conglomerate with multiple branches, secretly run by modern Knights Templar. The company is the present-day main antagonist of the franchise. Abstergo secretly created the "Animus", a device that allows its users to "re-live" and experience the memories of their genetic ancestors within their bloodline through a virtual simulation. Overexposure to the animus causes the "bleeding effect", which results in giving the user skills and abilities of his ancestors, but is also dangerous for the user as it can damage their mind, causing symptoms such as dementia, insanity, dissociative identity disorder or brain damage. Abstergo is seeking to discover the location of several historical artifacts, known as the "Pieces of Eden". Such artifacts hold great power, and are capable of controlling free will. Abstergo seeks to use them to remove free will and bring humanity into one single unified group, while the Assassins oppose them. In order to find the Pieces of Eden, Abstergo is abducting people whose ancestors are suspected to have had historically confirmed or suspected interactions with such devices, forcing the kidnapped person into the Animus and searching for clues on their ancestors' memories within the Animus.</p>

                                <br>
                                <h4 style="color: #FAFAFA;">Protagonists</h4>
                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">Desmond Miles is a bartender who is a descendant of several lines of prominent Assassins; though raised as an Assassin, he left his nomadic family to seek out a more common lifestyle. He is initially kidnapped by Abstergo, which is aware of his ancestral lineage. Desmond is forced into the Animus and is revealed to be subject 17; many of the sixteen previous subjects died as a result of Animus over-exposure.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">Desmond is later rescued by a small team of modern-day Assassins and agrees to work with them, continuing to experience the memories of his ancestors to discover the locations of additional Pieces of Eden so they can be recovered before Abstergo can do so. From the bleeding effect, Desmond gains some of the Assassin skills of his predecessors at the cost of living with multiple sets of memories and personalities in his mind.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">Within the Animus, Desmond explores the memories of a number of Assassins, including Altaïr Ibn-La'Ahad, an initially disgraced Assassin working to redeem himself during the Third Crusade; Ezio Auditore da Firenze, an Assassin in Italy during the late 15th and early 16th centuries of the Italian Renaissance; and Ratonhnhaké:ton, otherwise known as Connor, a half-Mohawk, half-British Assassin during the American Revolution.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">Throughout these events, Desmond learns of allusions to the prophetic end of the world in 2012 from a former Animus test subject, Subject 16; the event turns out to be a repeat of the disaster which wiped out the ancient civilization, and he finds out that his memories hold the key to Earth's surviving a second solar storm. During his experiences, Desmond is aided by holographic projections of three of the ancient race's rulers: Jupiter, Minerva, and Juno.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">After Desmond dies to ensure Earth's survival, his memories, which have survived in cyberspace, are accessed by Abstergo, which hires a new subject to enter the Animus. The new subject relives the memories of Edward Kenway (grandfather of Ratohnhaké:ton, otherwise known as Connor Kenway) and a privateer-turned-pirate during the Golden Age of Piracy.</p>

                                <br>
                                <h4 style="color: #FAFAFA;">Gameplay</h4>
                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">While the games are often presented through protagonist Desmond Miles, the bulk of the game is played as Desmond experiences the memories of his ancestors through an advanced device called the Animus. This provides a means of a diegetic interface, showing Desmond's ancestor's health, equipment, goals, and other features as part of the Animus interface. The Animus is based on the player controlling the assassin to maintain the synchronization between Desmond and his ancestor's memories. Performing actions that go against the Assassin's way or dying breaks the synchronization, effectively requiring the player to restart at a previous checkpoint. Furthermore, the player cannot explore outside areas that the assassin has not experienced yet. There are also abnormalities within the Animus from previous users of the device.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">While playing as the Assassin characters, the games are generally presented from a third-person perspective in an open world environment, focusing on stealth and parkour. The games use a mission structure to follow the main story, generally assigning the player to complete an assassination of public figureheads or a covert mission. Alternatively, several side missions are available, such as mapping out the expansive cities from a high perch followed by performing a "leap of faith" into a haystack below, collecting treasures hidden across the cities, exploring ruins for relics, building a brotherhood of assassins to perform other tasks, or funding the rebuilding of a city through purchasing and upgrading of shops and other features. At times, the player is in direct control of Desmond, who by nature of the Animus use has learned Assassin techniques through the bleeding effect, as well as their genetic ability of Eagle Vision, which separates friend, foe and assassination targets by illuminating people in different colors. Through the Animus interface, the player can go back to retry any past mission already completed; for example, in Assassin's Creed: Brotherhood, the player achieves better synchronization results by performing the mission in a specific manner such as by only killing the mission's target.</p>

                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">The games use the concept of "active" versus "passive" moves, with "active" moves, such as running, climbing the sides of buildings, or jumping between rooftops, more likely to alert the attention of nearby guards. When the guards become alerted, the player must either fight them or break their line of sight and locate a hiding place, such as a haystack or a well, and wait until the guards' alert is reduced. The combat system allows for a number of unique weapons, armor, and moves, including the use of a hidden blade set in a bracer on the Assassin's arm, and which also can be used to quietly assassinate targets.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <h2 style="color: #FFFFFF;">Top Articles</h2><br>
                                <img src="https://vignette.wikia.nocookie.net/assassinscreed/images/5/5b/640px-Assassin%27s_Creed_Logo.png/revision/latest/window-crop/width/200/x-offset/164/y-offset/0/window-width/315/window-height/314?cb=20170612150818" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/3920">Assassin's Creed (series)</a><br>
                                <p style="color: #FAFAFA;">The Assassin's Creed series is an award-winning video game series that currently consists of ten...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/assassinscreed/images/e/ee/AssassinLogo.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/996/window-height/996?cb=20171221165525" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/2264">Assassins</a><br>
                                <p style="color: #FAFAFA;">The Assassin Brotherhood, also known as the Assassin Order, the Hidden Ones during its early...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/assassinscreed/images/b/b4/Ac_news_announce-keyartt-thumb-ncsa_292590.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/864/window-height/864?cb=20180124092931" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/211516">Assassin's Creed: Origins</a><br>
                                <p style="color: #FAFAFA;">Assassin's Creed: Origins is the tenth main installment in the Assassin's Creed series developed...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/assassinscreed/images/c/c1/Hidden_One_Bayek.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1540/window-height/1540?cb=20180119064235" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/211517">Bayek</a><br>
                                <p style="color: #FAFAFA;">Bayek of Siwa (85 BCE – unknown) was the last Medjay active in Ptolemaic Egypt. Bayek was the...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/assassinscreed/images/c/cf/ACO_Aya_render.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/600/window-height/600?cb=20171027012840" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/213136">Aya</a><br>
                                <p style="color: #FAFAFA;">Aya of Alexandria (79 or 78 BCE – unknown) was a Greco-Egyptian agent to Cleopatra, the last...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/assassinscreed/images/a/a5/Edward_Render.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1865/window-height/1865?cb=20141022161330" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/128078">Edward Kenway</a><br>
                                <p style="color: #FAFAFA;">Edward James Kenway (1693 – 1735) was a Welsh-born British privateer-turned-pirate and a member...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/assassinscreed/images/d/d6/ACI-Connor.png/revision/latest/scale-to-width-down/200?cb=20150930201745" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/83557">Ratonhnhaké:ton</a><br>
                                <p style="color: #FAFAFA;">Ratonhnhaké:ton (1756 – unknown), often known by the adopted name of Connor, was a Master...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/assassinscreed/images/6/66/ACI-Ezio.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/350/window-height/350?cb=20131014134656" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/2352">Ezio Auditore da Firenze</a><br>
                                <p style="color: #FAFAFA;">Ezio Auditore da Firenze (1459 – 1524) was a Florentine nobleman during the Renaissance, and...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/assassinscreed/images/1/18/ACRG_Shay_Unhooded.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/2450/window-height/2450?cb=20161228115541" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/177459">Shay Cormac</a><br>
                                <p style="color: #FAFAFA;">Shay Patrick Cormac (1731 – unknown) was a member of the Colonial Rite of the Templar Order...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/assassinscreed/images/2/29/Curseofpharaohs.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/450/window-height/450?cb=20171105031647" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/214572">The Curse of the Pharaohs</a><br>
                                <p style="color: #FAFAFA;">The Curse of the Pharaohs is a downloadable content expansion package for Assassin's Creed...</p><hr>
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