<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Walking Dead Wikia</title>
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
                            <h3 style="text-align: center; color: #FAFAFA; margin-bottom: 0;">The Walking Dead</h3>
                            <h3 style="text-align: center; color: #FAFAFA; margin-top: 5px;">Wiki</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                           
                                
                                    <img src="images/skyrimwall.jpg" style="width: 100%;" class="wallp">
                                
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <br>
                                

                                <p style="text-align: justify;">The Walking Dead is an American post-apocalyptic horror television series developed by Frank Darabont for AMC that is based on the comic book series of the same name by Robert Kirkman, Tony Moore, and Charlie Adlard. Andrew Lincoln plays the show's lead character, sheriff's deputy Rick Grimes, who awakens from a coma discovering a world overrun by zombies, commonly referred to as "walkers". Grimes reunites with his family and becomes the leader of a group he forms with other survivors. Together they struggle to survive and adapt in a post-apocalyptic world filled with walkers and opposing groups of survivors, who are often more dangerous than the walkers themselves. Much of the series takes place in and around Atlanta, Georgia, and later Alexandria, Virginia.</p>

                                <p style="text-align: justify;">The Walking Dead premiered in the United States on October 31, 2010, exclusively shown on cable television channel AMC and internationally on Fox International Channels. As a result of very favorable Nielsen ratings that rank the show unprecedentedly high for a cable series, AMC has renewed the series each year. Beginning with its third season, The Walking Dead has attracted the most 18 to 49-year-old viewers of any cable or broadcast television series. Its eighth season debuted on October 22, 2017, and it has been renewed for a ninth season to debut in late 2018. The series has been well received by critics and nominated for several awards, including the Writers Guild of America Award for New Series and the Golden Globe Award for Best Television Series – Drama. An AMC spin-off series, Fear the Walking Dead, debuted on August 23, 2015.</p>

                                <p style="text-align: justify;">The Walking Dead takes place after the onset of a worldwide zombie apocalypse. The zombies, colloquially referred to as "walkers", shamble towards living humans and other creatures to eat them; they are attracted to noise, such as gunshots, and to different scents, e.g. humans. Humans that they bite or scratch become infected and slowly turn into walkers as well. It is revealed early in the series that all living humans carry this pathogen, so that if they die from any other cause, they will also turn into walkers. The only way to permanently kill a walker is to damage its brain or otherwise fully destroy the body, such as by cremating it.</p>

                                <p style="text-align: justify;">The series centers on sheriff's deputy Rick Grimes, who wakes up from a coma to discover this apocalypse. He becomes the leader of a group of survivors from the Atlanta, Georgia region as they attempt to sustain themselves and protect themselves not only against attacks by walkers but by other groups of survivors willing to assure their longevity by any means necessary.</p>

                                <br>
                                <h3>Season 1 (2010)</h3>
                                <p style="text-align: justify;">Sheriff's deputy Rick Grimes wakes from a coma discovering a world overrun by zombies. After befriending Morgan Jones, Rick travels alone to Atlanta to find his wife Lori, his son, Carl, and his police partner, Shane Walsh, encountering other survivors. The group travels to the Centers for Disease Control (CDC), but find from the sole remaining CDC member that no cure exists for the epidemic.</p>

                                <br>
                                <h3>Season 2 (2011–12)</h3>
                                <p style="text-align: justify;">Traveling from Atlanta, Rick's group takes shelter at Hershel Greene's farm while they search for Carol's missing daughter, Sophia. Tensions between Rick's group and Hershel's family worsen after it is discovered that Hershel has kept friends and family turned into zombies, including Sophia, in his barn. Shane and Rick's friendship becomes increasingly unhinged when Lori reveals that she is pregnant, and Rick is forced to kill Shane in self-defense. Carl then shoots Shane in the head after he reanimates. The noise draws zombies, forcing Rick's group and Hershel's surviving family to evacuate the farm.</p>

                                <br>
                                <h3>Season 3 (2012–13)</h3>
                                <p style="text-align: justify;">Eight months after fleeing Hershel's farm, Rick's group finds a prison, which they clear of zombies to make their new home. Lori dies in childbirth, and Rick becomes withdrawn. Meanwhile, Andrea is rescued by Michonne and the two discover Woodbury, a fortified town led by a man known as the Governor. He learns of Rick's group at the prison, leading to conflict between them. Rick's group eventually raids and destroys Woodbury, but the Governor has Andrea ultimately killed and escapes. Woodbury's citizens live with Rick’s group at the prison.</p>

                                <br>
                                <h3>Season 4 (2013–14)</h3>
                                <p style="text-align: justify;">Several months after the Governor's attack, a deadly flu kills many of the population at the prison. The Governor finds his former right-hand men and kills them, taking over their group and destroys the prison. Rick's group are forced to separate and flee, but not before Hershel and the Governor are killed. The survivors divide, face their own trials and meet new faces before finding signs pointing to a safe haven called Terminus. One by one, they reunite at Terminus, but all the group are captured for some unknown purpose.</p>

                                <br>
                                <h3>Season 5 (2014–15)</h3>
                                <p style="text-align: justify;">Rick discovers the residents of Terminus engage in cannibalism, but the group manage to destroy Terminus and reunite. Some are injured and kidnapped to Grady, a hospital run by corrupt cops and doctors. When the remaining survivors regroup, they are approached by Aaron, inviting them to join a fortified community called Alexandria. They are initially welcomed, but Rick's group realize the residents have not faced the zombie threat directly. Morgan, who has been searching for Rick, arrives and is shocked to see Rick killing an Alexandrian, who has been abusing his wife, in anger.</p>

                                <br>
                                <h3>Season 6 (2015–16)</h3>
                                <p style="text-align: justify;">The residents of Alexandria put more trust in Rick's group to protect the town better. A group known as the Wolves use a zombie horde to attack Alexandria, and many lives are lost before the living regain control. While recovering, they learn of a community called the Hilltop, who offer to help trade supplies if they can end the threat of the extortionist Saviors led by a man named Negan. Although Rick's group decimate one Savior outpost, they are later caught by Negan, and forced to swear loyalty to him.</p>

                                <br>
                                <h3>Season 7 (2016–17)</h3>
                                <p style="text-align: justify;">Negan murders Glenn and Abraham to coerce Rick's loyalty. Rick initially submits, but Michonne persuades him to fight back, and recruits a community called the Scavengers for help. Meanwhile, Rosita and Eugene make a bullet to kill Negan. When this fails, Negan forcibly recruits Eugene as a Savior. Separately, Carol and Morgan befriend Ezekiel of the Kingdom, another community, while Maggie and Rosita rally the Hilltop. Negan, the Saviors and the turncoat Scavengers attack Alexandria, but it is repelled by Sasha's sacrifice and the aid of Kingdom and Hilltop soldiers.</p>

                                <br>
                                <h3>Season 8 (2017–18)</h3>
                                <p style="text-align: justify;">Rick, Maggie, and Ezekiel rally their communities into war against Negan and the Saviors. Losses are heavy on both sides: many of the Kingdom soldiers are killed, Alexandria falls to a Savior attack, and Carl is bitten by a walker. Before euthanizing himself, Carl convinces Rick to end the war and restart society anew. Negan attempts to wipe out Rick and his allies, but Eugene disrupts his plan and his neck is slit by Rick. Against Maggie’s wishes, Negan is spared and imprisoned in Alexandria, ending the war.</p>

                                <br>
                                <h3>Season 9</h3>
                                <p style="text-align: justify;">In January 2018, the series was renewed for a ninth season, which is planned to premiere in late 2018. It was announced that showrunner Scott Gimple would be promoted to Chief Content Officer for both The Walking Dead and Fear the Walking Dead, while current writer and co-executive producer Angela Kang would take Gimple's role for The Walking Dead. Most of the cast's contracts had to be renewed for the ninth season and beyond, and most of the cast did re-sign; the notable exception is Lauren Cohan who plays Maggie Greene. Cohan had sought a pay increase from AMC given her high demand from other networks; while she had signed onto star in a new series for the ABC network, this contract would still enable her to participate on The Walking Dead in a limited role.</p>

                                <p style="text-align: justify;">Work on the ninth season's production started around March 2018, following the conclusion of editing of the eighth-season finale.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <h2>Top Articles</h2><br>
                                <img src="https://vignette.wikia.nocookie.net/walkingdead/images/a/a4/TWD_816.jpg/revision/latest/window-crop/width/200/x-offset/421/y-offset/0/window-width/1081/window-height/1080?cb=20180416032919" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/375779">Wrath (TV Series)</a><br>
                                <p>"Wrath" is the sixteenth and final episode of the eighth season of AMC's The Walking Dead. It is...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/walkingdead/images/6/61/Whisperers_136.png/revision/latest/window-crop/width/200/x-offset/320/y-offset/0/window-width/604/window-height/603?cb=20150114203305" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/261669">The Whisperers (Comic Series)</a><br>
                                <p>The Whisperers are a mysterious group of survivors who disguise themselves with roamer skin to...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/walkingdead/images/b/bf/Season_eight_negan.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/759/window-height/759?cb=20180311173023" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/298086">Negan (TV Series)</a><br>
                                <p>Negan (pronounced NEE-gan) is a main character and an antagonist, as well as a survivor of the...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/walkingdead/images/6/67/Negan174.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/291/window-height/291?cb=20171206224335" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/15176">Negan (Comic Series)</a><br>
                                <p>Negan (pronounced NEE-gan) is a main character and a former antagonist first encountered in...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/walkingdead/images/2/23/Season_eight_judith_grimes.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/718/window-height/718?cb=20180226045329" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/3513">TV Series Characters</a><br>
                                <p>The following is a complete pictorial list of the characters in AMC's. They are grouped by...</p><hr style="border-color: #636363;">

                                <img src="null" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/335866">Season 8 (TV Series)</a><br>
                                <p>Season 8 of AMC's The Walking Dead consists of sixteen episodes; it premiered on October 22...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/walkingdead/images/4/49/FTWD_401.jpg/revision/latest/window-crop/width/200/x-offset/421/y-offset/0/window-width/1081/window-height/1080?cb=20180416174907" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/375768">What's Your Story?</a><br>
                                <p>\"What's Your Story? \" is the first episode of the fourth season of AMC's Fear The Walking Dead...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/walkingdead/images/5/55/Image%27s_TWD_127_Logo.png/revision/latest/window-crop/width/200/x-offset/1291/y-offset/0/window-width/422/window-height/421?cb=20140515134622" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/2398">The Walking Dead (Comic Series)</a><br>
                                <p>The Walking Dead is a monthly black-and-white American comic that started in 2003, and was...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/walkingdead/images/5/5a/Season_eight_carl_grimes.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/483/window-height/483?cb=20180330063943" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/3944">Carl Grimes (TV Series)</a><br>
                                <p>Carl Grimes is the former deuteragonist and a survivor of the outbreak in AMC's The Walking...</p><hr style="border-color: #636363;">

                                <img src="null" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/365860">Season 9 (TV Series)</a><br>
                                <p>Season 9 is an upcoming season for AMC's The Walking Dead. On January 13, 2018, AMC announced...</p><hr style="border-color: #636363;">
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