<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Harry Potter Wikia</title>
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
                            <h3 style="text-align: center; color: #FAFAFA; margin-bottom: 0;">Harry Potter</h3>
                            <h3 style="text-align: center; color: #FAFAFA; margin-top: 5px;">Wiki</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                           
                                
                                    <img src="images/skyrimwall.jpg" style="width: 100%;" class="wallp">
                                
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <br>

                                <p style="text-align: justify;">Harry Potter is a series of fantasy novels written by British author J. K. Rowling. The novels chronicle the life of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry. The main story arc concerns Harry's struggle against Lord Voldemort, a dark wizard who intends to become immortal, overthrow the wizard governing body known as the Ministry of Magic, and subjugate all wizards and muggles, a reference term that means non-magical people.</p>

                                <p style="text-align: justify;">Since the release of the first novel, Harry Potter and the Philosopher's Stone, on 26 June 1997, the books have found immense popularity, critical acclaim, and commercial success worldwide. They have attracted a wide adult audience as well as younger readers, and are often considered cornerstones of modern young adult literature. The series has also had its share of criticism, including concern about the increasingly dark tone as the series progressed, as well as the often gruesome and graphic violence it depicts. As of February 2018, the books have sold more than 500 million copies worldwide, making them the best-selling book series in history, and have been translated into eighty languages. The last four books consecutively set records as the fastest-selling books in history, with the final instalment selling roughly eleven million copies in the United States within twenty-four hours of its release.</p>

                                <p style="text-align: justify;">The series was originally published in English by two major publishers, Bloomsbury in the United Kingdom and Scholastic Press in the United States. A play, Harry Potter and the Cursed Child, based on a story co-written by Rowling, premiered in London on 30 July 2016 at the Palace Theatre, and its script was published by Little, Brown. The original seven books were adapted into an eight-part film series by Warner Bros. Pictures, which is the third highest-grossing film series of all time as of February 2018. In 2016, the total value of the Harry Potter franchise was estimated at $25 billion, making Harry Potter one of the highest-grossing media franchises of all time.</p>

                                <p style="text-align: justify;">A series of many genres, including fantasy, drama, coming of age, and the British school story (which includes elements of mystery, thriller, adventure, horror, and romance), the world of Harry Potter explores numerous themes and includes many cultural meanings and references. According to Rowling, the main theme is death. Other major themes in the series include prejudice, corruption, and madness.</p>

                                <p style="text-align: justify;">The success of the books and films has allowed the Harry Potter franchise to expand, with numerous derivative works, a travelling exhibition that premiered in Chicago in 2009, a studio tour in London that opened in 2012, a digital platform on which J.K. Rowling updates the series with new information and insight, and a pentalogy of spin-off films premiering in November 2016 with Fantastic Beasts and Where to Find Them, among many other developments. Most recently, themed attractions, collectively known as The Wizarding World of Harry Potter, have been built at several Universal Parks & Resorts amusement parks around the world.</p>


                                <h4>Plot</h4>
                                <p style="text-align: justify;">The central character in the series is Harry Potter, a boy who lives in Surrey with his aunt, uncle, and cousin - the Dursleys - who discovers, at the age of eleven, that he is a wizard, though he lives in the ordinary world of non-magical people known as Muggles. The wizarding world exists parallel to the Muggle world, albeit hidden and in secrecy. His magical ability is inborn and children with such abilities are invited to attend exclusive magic schools that teach the necessary skills to succeed in the wizarding world. Harry becomes a student at Hogwarts School of Witchcraft and Wizardry, a wizarding academy in Scotland and it is here where most of the events in the series take place. As Harry develops through his adolescence, he learns to overcome the problems that face him: magical, social and emotional, including ordinary teenage challenges such as friendships, infatuation, romantic relationships, schoolwork and exams, anxiety, depression, stress, and the greater test of preparing himself for the confrontation that lies ahead in wizarding Britain's increasingly-violent second wizarding war.</p>

                                <p style="text-align: justify;">Each novel chronicles one year in Harry's life during the period from 1991 to 1998. The books also contain many flashbacks, which are frequently experienced by Harry viewing the memories of other characters in a device called a Pensieve.</p>

                                <p style="text-align: justify;">The environment Rowling created is intimately connected to reality. The British magical community of the Harry Potter books is inspired by 1990s British culture, European folklore, classical mythology and alchemy, incorporating objects and wildlife such as magic wands, magic plants, potions, spells, flying broomsticks, centaurs, and other magical creatures, the Deathly Hallows, and the Philosopher's Stone, beside others invented by Rowling. While the fantasy land of Narnia is an alternate universe and the Lord of the Rings' Middle-earth a mythic past, the wizarding world of Harry Potter exists in parallel within the real world and contains magical versions of the ordinary elements of everyday life, with the action mostly set in Scotland (Hogwarts), the West Country, Devon, London and Surrey in southeast England. The world only accessible to wizards and magical beings comprises a fragmented collection of overlooked hidden streets, ancient pubs, lonely country manors and secluded castles invisible to the Muggle population.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <h2>Top Articles</h2><br>
                                <img src="https://vignette.wikia.nocookie.net/harrypotter/images/6/6e/VoldemortHeadshot_DHP1.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1200/window-height/1200?cb=20161203031453" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/343">Tom Riddle</a><br>
                                <p>Tom Marvolo Riddle (31 December, 1926 – 2 May, 1998 ), later (and better) known as Lord...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/harrypotter/images/9/99/Accio_cup.gif/revision/latest/window-crop/width/200/x-offset/150/y-offset/0/window-width/203/window-height/202?cb=20160520023137" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/3581">List of spells</a><br>
                                <p>This is a list of all spells seen in the Harry Potter series, including the books, video games...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/harrypotter/images/a/a9/Dhharryroomhighreso.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1000/window-height/1000?cb=20160722220125" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/13">Harry Potter</a><br>
                                <p>Harry James Potter (b. 31 July, 1980) was a half-blood wizard, one of the most famous wizards of...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/harrypotter/images/d/de/Werewolves-pottermore.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/272/window-height/272?cb=20120511132624" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/6469">XXXXX Creatures</a><br>
                                <p>This category is for creatures in the Wizarding world that are classified as XXXXX by the...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/harrypotter/images/2/29/0.41_Ravenclaw_Crest_Transparent.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/871/window-height/871?cb=20161020182442" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/10">Ravenclaw</a><br>
                                <p>Ravenclaw is one of the four Houses of Hogwarts School of Witchcraft and Wizardry, founded by...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/harrypotter/images/f/fd/GrindelwaldFB2.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/402/window-height/402?cb=20171116193638" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/3224">Gellert Grindelwald</a><br>
                                <p>Gellert Grindelwald (c. 1883 – March, 1998) was considered to be the second most dangerous Dark...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/harrypotter/images/f/f8/Hogwarts_houses.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/236/window-height/236?cb=20160813020635" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/967">Hogwarts Houses</a><br>
                                <p>Hogwarts School of Witchcraft and Wizardry was divided into four houses, each bearing the last...</p><hr style="border-border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/harrypotter/images/5/50/0.51_Hufflepuff_Crest_Transparent.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/877/window-height/877?cb=20161020182518" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/11">Hufflepuff</a><br>
                                <p>Hufflepuff is one of the four Houses of Hogwarts School of Witchcraft and Wizardry. Its founder...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/harrypotter/images/7/70/Nagini_PM.png/revision/latest/window-crop/width/200/x-offset/476/y-offset/0/window-width/1801/window-height/1800?cb=20161124073206" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/359">Nagini</a><br>
                                <p>Nagini (d. 2 May, 1998) was a long, green female snake that belonged to Lord Voldemort, with...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/harrypotter/images/5/57/The_Horcruxex.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1801/window-height/1800?cb=20161126081048" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/84">Horcrux</a><br>
                                <p>A Horcrux is advanced Dark magic, the practise of which is said to be evil. A Horcrux is an...</p><hr style="border-color: #636363;">
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