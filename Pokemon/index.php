<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pokemon Wikia</title>
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
                            <h3 style="text-align: center; color: #FAFAFA;">Pokemon Wiki</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                           
                                
                                    <img src="images/skyrimwall.jpg" style="width: 100%;" class="wallp">
                                
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <br>
                                <p style="text-align: justify;">Pokémon is a series of video games developed by Game Freak and published by Nintendo as part of the Pokémon media franchise. First released in 1996 in Japan for the Game Boy, the main series of role-playing video games (RPGs) has continued on each generation of Nintendo's handhelds.</p>

                                <p style="text-align: justify;">The games are commonly released in pairs—each with slight variations—with an enhanced remake of the games usually released a few years after the original versions. While the main series consists of role-playing games, spinoffs encompass other genres, such as action role-playing, puzzle, and digital pet games.</p>

                                <p style="text-align: justify;">As November 24, 2017, more than 300 million Pokémon games have been sold worldwide, across 76 titles. This makes Pokémon the second best-selling video game franchise, behind Nintendo's own Mario franchise. The franchise's mascot is Pikachu.</p>
    
                                <h4>Generations</h4>
                                <p style="text-align: justify;">All of the licensed Pokémon properties overseen by The Pokémon Company are divided roughly by generation. These generations are roughly chronological divisions by release; when an official sequel in the main role-playing game series is released that features new Pokémon, characters, and possibly new gameplay concepts, that sequel is considered the start of a new generation of the franchise. The main games and their spin-offs, the anime, manga and trading card game are all updated with the new Pokémon properties each time a new generation begins. The franchise began its seventh generation with Pokémon Sun and Moon, which were released worldwide on November 18, 2016.</p>

                                <h4>Gameplay</h4>
                                <p style="text-align: justify;">One of the consistent aspects of most "Pokémon" games—spanning from Pokémon Red and Blue on the Game Boy to the Nintendo 3DS games Pokémon Sun and Moon—is the choice of one of three different Pokémon at the start of the player's adventures; these three are often labeled "starter Pokémon". Players can choose a Grass-type, a Fire-type, or a Water-type, Pokémon indigenous to that particular region. For example, in Pokémon Red and Blue, the player has the choice of starting with Bulbasaur, Charmander, or Squirtle. The exception to this rule is Pokémon Yellow, where players are given a Pikachu, an Electric-type mouse Pokémon, famous for being the mascot of the Pokémon media franchise; unique to Pokémon Yellow, the three starter Pokémon from Red and Blue can be obtained during the quest by a single player.</p>

                                <p style="text-align: justify;">Another consistent aspect is that the player's rival will always choose the type that has a type advantage over the player's chosen Pokémon as his or her starter Pokémon(excluding Sun and Moon). For instance, if the player picks the Fire-type Charmander, the rival will always pick the Water-type Squirtle. This does not affect the first battle between the rivals, as they can only use Normal-type attacks at this point, meaning that they cannot exploit weaknesses. The exception to this is again Pokémon Yellow, in which the rival picks Eevee, a Normal-type Pokémon with multiple evolutions. Sun and Moon also is an exception is this rule, as the rival picks the starter weak toward the player's starter, with the Pokémon that has the type advantage going to a trainer in the Champion battle.</p>

                                <p style="text-align: justify;">However, in Pokémon Black and White, there are two rivals; one picks the Pokémon with a type advantage over the player's chosen Pokémon, while the other chooses the Pokémon with the type disadvantage. In Pokémon Diamond, Pearl and Platinum, another Trainer chooses the Pokémon with a type disadvantage to the player's chosen Pokémon, but never battles the player; instead, this character battles alongside the player as a tag partner in certain situations.</p>

                                <p style="text-align: justify;">The situation is similar in Pokémon X and Y, but there are four rivals. Two of them receive the starter Pokémon in an arrangement similar to Pokémon Black and White, but the other two have completely different Pokémon.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <h2>Top Articles</h2><br>
                                <img src="https://vignette.wikia.nocookie.net/pokemon/images/5/54/Ash_SM.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/273/window-height/273?cb=20161014184953" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Pokemon/article.php/2310">Ash Ketchum</a><br>
                                <p>Ash Ketchum is the main protagonist of the Pokémon anime series who has always dreamed of...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/pokemon/images/5/54/Ash_SM.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/273/window-height/273?cb=20161014184953" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Pokemon/article.php/186354">Ash Ketchum/Sun & Moon</a><br>
                                <p>Ash Ketchum is the main protagonist of the Pokémon Anime and a trainer from Pallet Town...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/pokemon/images/2/21/001Bulbasaur.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/476/window-height/475?cb=20140328190757" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Pokemon/article.php/2511">Starter Pokémon</a><br>
                                <p>Starter Pokémon, or Starters, are the Pokémon a trainer chooses at the beginning of their...</p><hr style="border-color: #636363;">
                                
                                <img src="null" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Pokemon/article.php/5513">Evolutionary Stones</a><br>
                                <p>Evolutionary Stones are crystals with the power of a certain element that can instantly evolve...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/pokemon/images/8/8a/Pok%C3%A9mon_the_Series_-_Sun_%26_Moon-_Ultra_Adventures_logo.png/revision/latest/window-crop/width/200/x-offset/136/y-offset/0/window-width/340/window-height/339?cb=20180303040040" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Pokemon/article.php/204190">Pokémon the Series: Sun & Moon - Ultra Adventures</a><br>
                                <p>Pokémon the Series: Sun& Moon - Ultra Adventures is the twenty-first season of the Pokémon anime...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/pokemon/images/0/0a/354Banette.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/476/window-height/475?cb=20140329023847" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Pokemon/article.php/5338">List of Pokémon by color</a><br>
                                <p>The color is a characteristic that can be easily recognized by sight, however, each Pokémon's...</p><hr style="border-color: #636363;">

                                <img src="null" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Pokemon/article.php/7081">List of Pokémon</a><br>
                                <p>This is a complete list of all 807 species of Pokémon currently known to exist. Each Pokémon's...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/pokemon/images/4/4e/Jessie_Wobbuffet.png/revision/latest/window-crop/width/200/x-offset/281/y-offset/0/window-width/721/window-height/720?cb=20160321150834" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Pokemon/article.php/180987">Female characters</a><br>
                                <p>The following is a list of female characters appearing in any Pokémon media.</p><hr>

                                <img src="https://vignette.wikia.nocookie.net/pokemon/images/f/f3/Pok%C3%A9mon_the_Series_-_Sun_%26_Moon.png/revision/latest/window-crop/width/200/x-offset/199/y-offset/0/window-width/405/window-height/404?cb=20161117224708" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Pokemon/article.php/186422">Pokémon the Series: Sun & Moon</a><br>
                                <p>Pokémon the Series: Sun& Moon is the twentieth season of the Pokémon anime and the first season...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/pokemon/images/4/4e/144Articuno.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/476/window-height/475?cb=20140328211202" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/Pokemon/article.php/1909">Legendary Pokémon</a><br>
                                <p>Legendary Pokémon (伝説のポケモン Densetsu no Pokemon), or Pokémon Illusions (幻のポケモン Phantom Pokémon...</p><hr style="border-color: #636363;">
                            </div>
                        </div>
                        <br>
                    </div>
                   
                </div>
                <br><br>
			</div>
		</div>
</body>
</html>		