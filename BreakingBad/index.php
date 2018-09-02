<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Breaking Bad Wikia</title>
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
                            <h3 style="text-align: center; color: #FAFAFA; margin-bottom: 0;">The Breaking Bad</h3>
                            <h3 style="text-align: center; color: #FAFAFA; margin-top: 5px;">Wiki</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                           
                                
                                    <img src="images/skyrimwall.jpg" style="width: 100%;" class="wallp">
                                
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <br>
                               
                                <p style="text-align: justify;">Breaking Bad is an American neo-western crime drama television series created and produced by Vince Gilligan. The show originally aired on the AMC network for five seasons, from January 20, 2008 to September 29, 2013. It tells the story of Walter White (Bryan Cranston), a struggling high school chemistry teacher diagnosed with lung cancer. Together with his former student Jesse Pinkman (Aaron Paul), White turns to a life of crime by producing and selling crystallized methamphetamine to secure his family's financial future before he dies, while navigating the dangers of the criminal world. The title comes from the Southern colloquialism "breaking bad", meaning to "raise hell" or turn toward crime. Breaking Bad is set and filmed in Albuquerque, New Mexico.</p>

                                <p style="text-align: justify;">Walter's family consists of his wife Skyler (Anna Gunn) and children, Walter, Jr. (RJ Mitte) and Holly (Elanor Anne Wenrich). The show also features Skyler's sister Marie Schrader (Betsy Brandt), and her husband Hank (Dean Norris), a Drug Enforcement Administration (DEA) agent. Walter hires lawyer Saul Goodman (Bob Odenkirk), who connects him with private investigator and fixer Mike Ehrmantraut (Jonathan Banks) and in turn Mike's employer, drug kingpin Gus Fring (Giancarlo Esposito). The final season introduces the characters Todd Alquist (Jesse Plemons) and Lydia Rodarte-Quayle (Laura Fraser).</p>

                                <p style="text-align: justify;">Breaking Bad is widely regarded as one of the greatest television series of all time. By the time the series finale aired, it was among the most-watched cable shows on American television. The show received numerous awards, including 16 Primetime Emmy Awards, eight Satellite Awards, two Golden Globe Awards, two Peabody Awards, two Critics' Choice Awards and four Television Critics Association Awards. For his leading performance, Cranston won the Primetime Emmy Award for Outstanding Lead Actor in a Drama Series four times, while Aaron Paul won the Primetime Emmy Award for Outstanding Supporting Actor in a Drama Series three times; Anna Gunn won the Primetime Emmy Award for Outstanding Supporting Actress in a Drama Series twice. In 2013, Breaking Bad entered the Guinness World Records as the most critically acclaimed show of all time.</p>

                                <p style="text-align: justify;">The show explores most of the main characters' connections to their families in great detail. Walt justifies his decision to cook crystal meth and become a criminal because of his desire to provide for his family. In the third season he tries to exit the business because it has driven Skyler to leave him. Gus convinces him to stay, telling him it is a man's job to provide for his family, even if he is unloved. In the final episode of the series, however, Walt finally admits to Skyler that the main motivation for his endeavors in the meth business was his own interest, in spite of secretly securing the 9.72 million dollars (which is all that he had managed to salvage) for her and the children. Jesse's loneliness in the early seasons of the show can be partly explained by his parents' decision to kick him out of their home due to his drug-related activities. This parental disconnect brings him closer to Jane, whose father berates her for her drug use. When Walt crosses paths with Jane's father, he refers to Jesse as his nephew and laments the fact that he can't get through to him. Jane's father responds by telling him to keep trying, saying "Family. You can't give up on them, ever. What else is there?" Jane's subsequent death, which Walt purposefully did not prevent, is a major factor in her father causing the airline crash at the end of the second season.</p>

                                <p style="text-align: justify;">Even the show's more hardened characters maintain ties to family. In the second season, Tuco Salamanca spends time caring for his physically disabled uncle, Hector. When Tuco is killed by Hank, his cousins vow revenge. Their actions are further explained in a flashback, where Hector explains to the brothers that "La familia es todo" ("Family is everything"). Gustavo Fring's franchise Los Pollos Hermanos translates to The Chicken Brothers. This refers to the fact that the company was co-founded by Gus and a man named Max, with whom he shared a close personal connection. When Max is killed by Hector Salamanca, Gus vows to destroy the Salamanca family. In the first part of the fifth season, it is explained that Mike Ehrmantraut's intentions for being in this business were to provide for his granddaughter's future, and by his final episode we see him conflicted when having to leave her in a park by herself once he's warned the police are onto him. During the second part of the fifth season, white supremacist Jack Welker says "don't skimp on family", and he lets Walt live after capturing him in the desert because of love for his nephew Todd Alquist, who has great respect for Walt. Later, Lydia Rodarte-Quayle repeatedly demands that if Mike insists on killing her, that he leave her in her apartment so her daughter can find her, fearful she will think she abandoned her. Much like Walt and Mike, she seems to engage in the meth business in order to provide for her daughter, with actress Laura Fraser stating in an interview that Lydia's daughter is important to how "Lydia justified what she did to herself".</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <h2>Top Articles</h2><br>
                                <img src="https://vignette.wikia.nocookie.net/breakingbad/images/8/8d/BCS_S3_MikeEhrmantraut.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/700/window-height/700?cb=20170327185046" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/2180">Mike Ehrmantraut</a><br>
                                <p>Michael \"Mike\" Ehrmantraut was a former corrupt police officer who, after being forced to leave...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/breakingbad/images/4/46/Cast_bb_800x600_walter-white.jpg/revision/latest/window-crop/width/200/x-offset/101/y-offset/0/window-width/601/window-height/600?cb=20170613183854" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/2025">Walter White</a><br>
                                <p>Walter Hartwell \"Walt\" White Sr., also known by his clandestine pseudonym \"Heisenberg\", is the...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/breakingbad/images/a/ab/BCS_S3_GusFringe.jpg/revision/latest/scale-to-width-down/200?cb=20170327185354" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/2121">Gustavo Fring</a><br>
                                <p>Gustavo \"Gus\" Fring was supposedly a Chilean-born Albuquerque restaurateur, mob boss, business...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/breakingbad/images/c/ce/BCS_S3_Nacho.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/700/window-height/700?cb=20170327185236" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/21583">Nacho Varga</a><br>
                                <p>Ignacio Varga, better known as Nacho, is a calculating, intelligent career criminal. He is the...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/breakingbad/images/d/d3/Cast_bb_800x600_jesse-pinkman.jpg/revision/latest/window-crop/width/200/x-offset/101/y-offset/0/window-width/601/window-height/600?cb=20170613183955" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/2027">Jesse Pinkman</a><br>
                                <p>Jesse Bruce Pinkman is the deuteragonist of Breaking Bad. He is the former partner of Walter...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/breakingbad/images/3/3e/BCS_S3_ChuckMcGill.jpg/revision/latest/scale-to-width-down/200?cb=20170327185308" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/24617">Chuck McGill</a><br>
                                <p>Charles \"Chuck\" L. McGill, Jr. was Jimmy McGill's older brother. He is a named partner at one of...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/breakingbad/images/5/56/BCS_S3_JimmyMcGill.jpg/revision/latest/scale-to-width-down/200?cb=20170327184952" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/21622">Jimmy McGill</a><br>
                                <p>James \"Jimmy\" Morgan McGill, better known by his professional alias Saul Goodman, is a former...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/breakingbad/images/b/b4/Hector_BCS.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/565/window-height/565?cb=20170810091606" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/5822">Hector Salamanca</a><br>
                                <p>Don Hector Salamanca, also known as Tio, was a drug runner and the former right hand man and...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/breakingbad/images/2/26/1x1_Walt_kills_Emilio_1.png/revision/latest/window-crop/width/200/x-offset/321/y-offset/0/window-width/822/window-height/821?cb=20120702024429" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/4473">List of deaths on Breaking Bad</a><br>
                                <p>Breaking Bad is a show about Walter White's transformation into a villain. You can't sell...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/breakingbad/images/b/b4/Jane.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/500/window-height/500?cb=20090621233653" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/2086">Jane Margolis</a><br>
                                <p>Jane Margolis was a tattoo artist and Jesse Pinkman's neighbor, landlord and girlfriend. She was...</p><hr style="border-color: #636363;">
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