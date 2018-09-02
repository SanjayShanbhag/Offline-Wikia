<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game Of Thrones Wikia</title>
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
                            <h3 style="text-align: center; color: #FAFAFA; margin-bottom: 0;">Game of Thrones</h3>
                            <h3 style="text-align: center; color: #FAFAFA; margin-top: 5px;">Wiki</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                           
                                
                                    <img src="images/skyrimwall.jpg" style="width: 100%;" class="wallp">
                                
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <br>
                                <p style="text-align: justify;">Game of Thrones is an American fantasy drama television series created by David Benioff and D. B. Weiss. It is an adaptation of A Song of Ice and Fire, George R. R. Martin's series of fantasy novels, the first of which is A Game of Thrones. It is filmed in Belfast and elsewhere in the United Kingdom, Canada, Croatia, Iceland, Malta, Morocco, Spain, and the United States. The series premiered on HBO in the United States on April 17, 2011, and its seventh season ended on August 27, 2017. The series will conclude with its eighth season premiering in 2019.</p>

                                <p style="text-align: justify;">Set on the fictional continents of Westeros and Essos, Game of Thrones has several plot lines and a large ensemble cast but centers on three primary story arcs. The first story arc centers on the Iron Throne of the Seven Kingdoms and follows a web of alliances and conflicts among the dynastic noble families either vying to claim the throne or fighting for independence from the throne. The second story arc focuses on the last descendant of the realm's deposed ruling dynasty, exiled and plotting a return to the throne. The third story arc centers on the longstanding brotherhood charged with defending the realm against the ancient threats of the fierce peoples and legendary creatures that lie far north, and an impending winter that threatens the realm.</p>

                                <h4>Setting</h4>
                                <p style="text-align: justify;">Game of Thrones is roughly based on the storylines of A Song of Ice and Fire, set in the fictional Seven Kingdoms of Westeros and the continent of Essos. The series chronicles the violent dynastic struggles among the realm's noble families for the Iron Throne, while other families fight for independence from it. It opens with additional threats in the icy North and Essos in the east.</p>

                                <h4> Themes </h4>
                                <p style="text-align: justify;">Throughout the novel, characters are often faced with decisions that match one redeemable trait against another. The Guardian outlines characters who are frequently "forced to choose between their love for those close to them and the greater interests of honour, duty and the realm." In Westeros, Ned ultimately decides to venture south with Robert, leaving much of his family in Winterfell. At the Wall, Jon wrestles with the predicament of joining his half-brother Robb in rebellion or staying with his sworn brothers in the Night's Watch. Daenerys has issue with the Dothraki treatment of those they conquered in Essos. These conflicts characters encounter oftentimes reflect inconsistent decision making. Catelyn initially is overwhelmed by grief and does not leave Bran's bedside while he is comatose, ignoring her political responsibilities, choosing family over duty. But soon after, Catelyn leaves Bran and her family for Kings Landing to inform Ned of potential Lannister treason, effectively displaying a more duty fulfilling role. Family, duty, and honor play major roles in conflicts that arise in the story arc, and qualities traditionally categorized as noble oppose each other in resolution. Character decision conflicts and consequence analysis are particular to how Martin wants to portray fantasy.</p>

                                <h4> Reception </h4>
                                <p style="text-align: justify;">A Game of Thrones has received critical acclaim. Lauren K. Nathan of the Associated Press wrote that the book "grip[s] the reader from Page One" and is set in a "magnificent" fantasy world that is "mystical, but still believable." Steve Perry told readers of The Oregonian that the plot is "complex and fascinating" and the book is "rich and colorful" with "all the elements of a great fantasy novel". Writing in The Washington Post, John H. Riskind commented that "many fans of sword-and-sorcery will enjoy the epic scope of this book" but felt that the book "suffers from one-dimensional characters and less than memorable imagery." Phyllis Eisenstein of the Chicago Sun-Times wrote that, although the book uses many generic fantasy tropes, Martin's approach is "so refreshingly human and intimate that it transcends them." She described it as "an absorbing combination of the mythic, the sweepingly historical, and the intensely personal." John Prior, writing in the San Diego Union-Tribune, called Martin's writing "strong and imaginative, with plenty of Byzantine intrigue and dynastic struggle", and compared it to Robert Jordan's Wheel of Time books, "though much darker, with no comedy or romance to relieve the nastiness."</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <h2>Top Articles</h2><br>
                                <img src="https://vignette.wikia.nocookie.net/gameofthrones/images/5/5f/Daenerys_Dragonpit.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/310/window-height/310?cb=20171015095128" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/GameOfThrones/article.php/2157">Daenerys Targaryen</a><br>
                                <p>Queen Daenerys Targaryen, also known as Dany and Daenerys Stormborn, is the younger sister of...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/gameofthrones/images/c/c7/WhiteWalkersHorseback.png/revision/latest/window-crop/width/200/x-offset/126/y-offset/0/window-width/362/window-height/361?cb=20170823220942" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/GameOfThrones/article.php/2225">White Walkers</a><br>
                                <p>The White Walkers are an ancient race of humanoid ice creatures, who come from the Far North of...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/gameofthrones/images/3/37/Eddard_Stark_infobox_new.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/493/window-height/493?cb=20160730050722" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/GameOfThrones/article.php/2041">Eddard Stark</a><br>
                                <p>Lord Eddard Stark, also known as Ned Stark, was the head of House Stark, the Lord of Winterfell...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/gameofthrones/images/7/76/Mother_of_direwolves.jpg/revision/latest/window-crop/width/200/x-offset/281/y-offset/0/window-width/721/window-height/720?cb=20120430024527" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/GameOfThrones/article.php/2149">Direwolves</a><br>
                                <p>Direwolves are an unusually large and intelligent species of wolf. A grey direwolf on a white...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/gameofthrones/images/5/58/Tyrion_main_s7_e6.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/333/window-height/333?cb=20170818050344" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/GameOfThrones/article.php/2091">Tyrion Lannister</a><br>
                                <p>Lord Tyrion Lannister is the youngest child of Lord Tywin Lannister and younger brother of...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/gameofthrones/images/4/46/Winter_is_Coming_joffrey_looks_at_sansa.jpg/revision/latest/window-crop/width/200/x-offset/132/y-offset/0/window-width/316/window-height/315?cb=20160803003452" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/GameOfThrones/article.php/2106">Joffrey Baratheon</a><br>
                                <p>King Joffrey I Baratheon was the second Baratheon king to sit on the Iron Throne. Though...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/gameofthrones/images/5/54/Arya_the_dragon_and_the_wolf_s7.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/353/window-height/353?cb=20170828062911" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/GameOfThrones/article.php/2129">Arya Stark</a><br>
                                <p>Arya Stark is the third child and second daughter of Lord Eddard Stark and his wife, Lady...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/gameofthrones/images/e/ec/Abduction_of_Lyanna_Stark.png/revision/latest/window-crop/width/200/x-offset/145/y-offset/0/window-width/353/window-height/352?cb=20140613155323" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/GameOfThrones/article.php/2123">Jon Snow</a><br>
                                <p>Jon Snow, born Aegon Targaryen, is the son of Lyanna Stark and Rhaegar Targaryen, the late...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/gameofthrones/images/c/c3/Profile-CerseiLannister.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/452/window-height/452?cb=20170828071355" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/GameOfThrones/article.php/2104">Cersei Lannister</a><br>
                                <p>Queen Cersei I Lannister is the widow of King Robert Baratheon and Queen of the Seven Kingdoms...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/gameofthrones/images/e/eb/Jaime.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1075/window-height/1075?cb=20170818052054" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 90px;'>
                                <a href="/fandom/GameOfThrones/article.php/2103">Jaime Lannister</a><br>
                                <p>Ser Jaime Lannister is the eldest son of Tywin, younger twin brother of Cersei, and older...</p><hr style="border-color: #636363;">
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