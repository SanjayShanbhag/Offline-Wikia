<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>ElderScrolls Wikia</title>
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
        .loader {
                    position: fixed;
                    left: 0px;
                    top: 0px;
                    width: 100%;
                    height: 100%;
                    z-index: 9999;
                    background: url('../images/box.gif') 50% 50% no-repeat rgb(249,249,249);
                }

    </style>
    <script type="text/javascript">
        $(function() {
  $('#loading-bg').hide();
  $('#loading-image').hide();

  $(window).on('beforeunload', function() {
    $('#loading-bg').show();
    $('#loading-image').show();
  });
});

    </script>
</head>
<body>
        <div id="loading-bg"></div>
<img id="loading-image" src="http://zundapps.com/content/images/large_%20loader.gif" alt="">
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
                            <h3 style="text-align: center; color: #FAFAFA; margin-bottom: 0;">The Elder Scrolls</h3>
                            <h3 style="text-align: center; color: #FAFAFA; margin-top: 5px;">Wiki</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                           
                                
                                    <img src="images/skyrimwall.jpg" style="width: 100%;" class="wallp">
                                
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <br>
                                <p style="color: #FAFAFA; text-align: justify; font-weight: 100;">The Elder Scrolls is a series of action role-playing open world fantasy video games primarily developed by Bethesda Game Studios and published by Bethesda Softworks. The series is known for its elaborate and richly detailed open worlds and its focus on free-form gameplay. Morrowind, Oblivion and Skyrim all won Game of the Year awards from multiple outlets. The series has sold more than 50 million copies worldwide.</p>
                                <p style="color: #FAFAFA; text-align: justify;">Within the fictional Elder Scrolls universe, each game takes place on the continent of Tamriel. The setting is a mix of early or pre-medieval real-world elements, often revolving around a powerful Roman-like Empire in a world with very limited technological capabilities, and high fantasy elements, such as widespread magic use, travel between parallel worlds and the existence of many mythological creatures such as dragons. The continent is split into a number of provinces of which the inhabitants include humans as well as popular humanoid fantasy races such as elves, orcs and anthropomorphic animals. A common theme in the lore is that a chosen hero rises to defeat an incoming threat, usually a malevolent being or an antagonistic army.</p>
                                <p style="color: #FAFAFA; text-align: justify;">Since debuting with Arena in 1994, the series has produced a total of five main games (of which the last three have each featured two or three expansions) as well as numerous spin-offs.[ In 2014, an MMORPG installment called The Elder Scrolls Online was released by Bethesda's affiliated ZeniMax subsidiary ZeniMax Online Studios.</p>
                                <h3 style="color: #FFFFFF;">Setting</h3>
                                <hr>
                                <p style="color: #FAFAFA; text-align: justify;">The Elder Scrolls world is a high fantasy one, with influences from a multitude of cultures all over the globe. Like most works of high or epic fantasy, The Elder Scrolls games are typically serious in tone and epic in scope, dealing with themes of grand struggle against a supernatural or evil force. Many races exist in the world of The Elder Scrolls, some typical of high fantasy works, such as humans, orcs and elves; some atypical, such as the lizard-like Argonians and cat-like Khajiit; and some subversions, such as the extinct Dwemer, known colloquially as "dwarves," who follow the high fantasy stereotype of being subterranean, skilled metallurgists and masons, but are here a variety of elf. As is also typical in high fantasy works, magic and sorcery, mythical creatures, factions with their own political agendas, walled medieval cities and strongholds, and plot elements driven by prophecies and legends can be found in abundance as well. In accordance with many literary high fantasy works, the world of The Elder Scrolls is known for its attention to detail, including well-developed lore and back story. This includes a vast amount of information such as names, dates, and places that constitute its history and the interconnected structure of its various societies, cultures, and religions. Lore, including histories and legends, are contained in thousands of readable in-game books that are scattered throughout the game world.</p>
                                <p style="color: #FAFAFA; text-align: justify;">The Elder Scrolls games primarily take place on the continent of Tamriel, located on the world of Nirn. The exceptions are The Elder Scrolls Legends: Battlespire, which is set in a "slipstream" dimension found between the mortal plane of Mundus and the myriad otherworldly planes of Oblivion; portions of The Elder Scrolls IV: Oblivion, which venture into a particular Oblivion plane called the Deadlands, the realm of the Daedric Prince Mehrunes Dagon; the entirety of The Elder Scrolls IV: Oblivion's expansion Shivering Isles, which takes place in the Oblivion plane The Shivering Isles, realm of the Daedric Prince of madness, Sheogorath; and a brief visit to the Oblivion plane of Soul Cairn during the Dawnguard DLC of The Elder Scrolls V: Skyrim; as well as the plane of Apocrypha during the Dragonborn DLC. The realm of Molag Bal, Coldharbour, also appears in The Elder Scrolls Online. Other continents exist on Nirn aside from Tamriel, such as Akavir, Yokuda, and Atmora, but none have been used as a setting for a game in the series.
                                <p style="color: #FAFAFA; text-align: justify;">Tamriel itself is divided into nine provinces or regions, each of which is dominated by a distinct race: Black Marsh is home to the Argonians; Cyrodiil is home to the Imperials; Elsweyr is home to the Khajiit; Hammerfell is home to the Redguards; High Rock is home to the Bretons; Morrowind is home to the Dunmer, or Dark Elves; Skyrim is home to the Nords; Summerset Isle is home to the Altmer, or High Elves; and Valenwood is home to the Bosmer, or Wood Elves. A tenth race, the Orsimer, or Orcs, reside in settlements scattered across Tamriel and have unsuccessfully attempted on several occasions to establish their own homeland, Orsinium, in the mountains of High Rock.</p>
                                <p style="color: #FAFAFA; text-align: justify;">The major political power in Tamriel's history is the Septim Empire, or Third Empire, centered in Cyrodiil, which at one time or another controlled most of Tamriel's nine provinces. The Empire was founded by Tiber Septim (also known as Talos Stormcrown), who as a Dragonborn, had powerful magical abilities called Shouts. Tiber Septim conquered Tamriel and his dynasty ruled the Empire for several hundred years, at times prospering in peace and other times marred by civil wars and succession crises. During the Oblivion Crisis of The Elder Scrolls IV: Oblivion, a religious cult called The Mythic Dawn opened up dimensional gates to a Hell-like realm called The Deadlands and killed the Emperor Uriel Septim VII and his three sons. The Daedra, beings from the Planes of Oblivion, were eventually defeated, but the end of the Septim dynasty left a severely weakened Empire, which eventually erupted in civil war, allowing many Imperial provinces to break away.</p>
                                <p style="color: #FAFAFA; text-align: justify;">As of The Elder Scrolls V: Skyrim, chronologically the latest-set game in the series (taking place in the 201st year of the Fourth Era of recorded history, abbreviated as 4E 201), the balance of power in Tamriel has shifted dramatically. The Third Empire of Tamriel, which once controlled the entire continent, has declined significantly under the new Mede dynasty of emperors; the Empire can claim only High Rock, Skyrim, and the capital province of Cyrodiil for its own. Three of the Empire's former provinces, Black Marsh, Hammerfell, and Morrowind, are effectively independent: Black Marsh and Hammerfell seceded from the Empire, while Imperial forces withdrew from Morrowind after a volcanic eruption and invasion from Black Marsh devastated it. Rising to rival the Empire is the Aldmeri Dominion, which rules the Summerset Isles and Valenwood outright, and claims the kingdoms of Anequina and Pellitine (the remnants of the province of Elsweyr) as client states. After having its capital city sacked, the Empire defeated a Dominion invasion during The Great War, but the effort exhausted it and peace was only achieved by conceding to many of the Dominion's harsh demands by signing the White-Gold Concordat, including ceding parts of Hammerfell and outlawing the worship of Talos. Skyrim is mired in civil war over the question of secession from the Empire, but some of Tamriel's inhabitants believe the conflict is only a distraction from the true looming threat: a second war between the Empire and the Dominion with both sides provoking each other locked in a state of "cold war."</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <h2 style="color: #FFFFFF;">Top Articles</h2><br>
                                <img src="https://vignette.wikia.nocookie.net/elderscrolls/images/1/1d/Laid_to_Rest.png/revision/latest/window-crop/width/200/x-offset/421/y-offset/0/window-width/1081/window-height/1080?cb=20120123224459" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/ElderScrolls/article.php/57323">Laid To Rest</a><br>
                                <p style="color: #FAFAFA;">Laid to Rest is a quest available in The Elder Scrolls V: Skyrim. This is a quest that takes...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/elderscrolls/images/0/0e/Console1_%28Skyrim%29.png/revision/latest/window-crop/width/200/x-offset/241/y-offset/0/window-width/801/window-height/800?cb=20120828094729" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/ElderScrolls/article.php/41748">Console Commands(Skyrim)</a><br>
                                <p style="color: #FAFAFA;">Console Commands are a debugging tool available to PC players, adding a wide range of...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/elderscrolls/images/b/bc/MarriageSkyrim.jpg/revision/latest/window-crop/width/200/x-offset/316/y-offset/0/window-width/1051/window-height/1050?cb=20111117215123" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/ElderScrolls/article.php/35282">Marriage</a><br>
                                <p style="color: #FAFAFA;">Marriage is a gameplay element in The Elder Scrolls V: Skyrim. After obtaining the Amulet of...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/elderscrolls/images/7/7e/TESV_Unusual_Gem.png/revision/latest/window-crop/width/200/x-offset/63/y-offset/0/window-width/515/window-height/514?cb=20120316201628" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/ElderScrolls/article.php/56020">Stones Of Barenziah</a><br>
                                <p style="color: #FAFAFA;">The Stones of Barenziah are a widely scattered collection of twenty-four gemstones found across...</p><hr>
                                
                                <img src="https://vignette.wikia.nocookie.net/elderscrolls/images/a/a2/DBdoor.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/246/window-height/246?cb=20080314192930" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/ElderScrolls/article.php/41721">The Dark Brotherhood</a><br>
                                <p style="color: #FAFAFA;">The Dark Brotherhood is an organization of highly trained assassins who carry out assassination...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/elderscrolls/images/1/12/Skyrim_Training.png/revision/latest/window-crop/width/200/x-offset/140/y-offset/0/window-width/424/window-height/423?cb=20120124130142" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/ElderScrolls/article.php/58386">Trainer (Skyrim)</a><br>
                                <p style="color: #FAFAFA;">Trainers are NPCs who help increase proficiency in skills in The Elder Scrolls V: Skyrim. Most...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/elderscrolls/images/5/53/Vampire_Difference_%28Skyrim%29.png/revision/latest/window-crop/width/200/x-offset/68/y-offset/0/window-width/481/window-height/480?cb=20120730201009" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/ElderScrolls/article.php/41730">Vampirism (Skyrim)</a><br>
                                <p style="color: #FAFAFA;">Vampirism is a syndrome that is acquired after the disease Sanguinare Vampiris has infected the...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/elderscrolls/images/a/a1/Arkngthamz_Interiror_4.png/revision/latest/window-crop/width/200/x-offset/274/y-offset/0/window-width/703/window-height/702?cb=20120811043903" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/ElderScrolls/article.php/170706">Lost to the Ages</a><br>
                                <p style="color: #FAFAFA;">Lost to the Ages is a quest in The Elder Scrolls V: Dawnguard. The quest details the...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/elderscrolls/images/1/1c/TESV_Shrine.png/revision/latest/window-crop/width/200/x-offset/294/y-offset/0/window-width/1049/window-height/1048?cb=20121217000041" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/ElderScrolls/article.php/54331">Pieces of the Past</a><br>
                                <p style="color: #FAFAFA;">Pieces of the Past is a quest available in The Elder Scrolls V: Skyrim. Silus Vesuius, devotee...</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/elderscrolls/images/7/7e/TESV_Banner_ThievesGuild.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/436/window-height/436?cb=20120311125521" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/ElderScrolls/article.php/13823">Thieves Guild (Skyrim)</a><br>
                                <p style="color: #FAFAFA;">The Thieves Guild is an organized group of professional thieves based in Skyrim that provides...</p><hr>
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