<?php
    header("Access-Control-Allow-Origin: *");    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    header("Access-Control-Allow-Headers: *");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Percy Jackson Wikia</title>
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
                            <h3 style="text-align: center; color: #FAFAFA; margin-bottom: 0;">Percy Jackson</h3>
                            <h3 style="text-align: center; color: #FAFAFA; margin-top: 5px;">Wiki</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                           
                                
                                    <img src="images/skyrimwall.jpg" style="width: 100%;" class="wallp">
                                
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <br>
                                <p style="text-align: justify;">Percy Jackson & the Olympians, often shortened to Percy Jackson, is a pentalogy of fantasy adventure novels written by American author Rick Riordan, and the first book series in the Camp Half-Blood Chronicles. Five supplementary books, along with three graphic novels, have also been released. More than 45 million copies of the books have been sold in more than 35 countries.</p>

                                <p style="text-align: justify;">As of October 28, 2011, the series has been on The New York Times Best Seller list for children's book series for 245 weeks. The first book was adapted into a film titled Percy Jackson & the Olympians: The Lightning Thief in 2010, which was commercially successful, but received mixed reviews. An adaptation of the second book, titled Percy Jackson: Sea of Monsters, was released in 2013.</p>
                                <br>
                                <h4>Origins</h4>
                                <p style="text-align: justify;">Development for both The Lightning Thief and the Percy Jackson series commenced when Rick Riordan began making stories for his son Haley Riordan, who had at the time been diagnosed with ADHD and dyslexia. His son, Haley, had been studying Greek mythology in second grade and requested that his father tell him bedtime stories based on Greek myths. When Riordan ran out of myths, his son suggested that he make up new stories using existing mythological characters and new ones. This led Riordan to create the fictional character of Percy Jackson and create the story of how he travels across the United States to recover Zeus's lightning-bolt. Haley suggested that he should turn that story into a book, and Riordan wrote the book over the next year despite being busy at that time.</p>

                                <p style="text-align: justify;">Leaving his manuscript with his agent and editor for review, Riordan presented the book to a group of 6th, 7th, and 8th graders to read and critique. He gained their approval, and with their help, came up with the name of the book and created the way Percy's sword works. In 2004, the book was sold to Miramax Books for enough money for Riordan to quit his job and focus on writing. After it was released on 28 June 2005, it sold over 1.2 million copies. The book was released in multiple versions, including hardcover, paperback and audio editions. It has been translated into multiple languages and published all over the world.</p>
                                <br>
                                <h4>The Lightning Thief</h4>
                                <p style="text-align: justify;">The Lightning Thief is the first book in the series and was released on July 1, 2005.</p>

                                <p style="text-align: justify;">After a harrowing experience at his school trip, Percy Jackson returns home for the summer vacation, wherein him and his mother Sally Jackson, travel to their cabin in Montauk to take their mind off things.However, the trip is cut short after a series of harrowing incidents, such as being attacked by the Minotaur. Percy finds himself at Camp Half-Blood, a training camp for demigods like him. He discovers that he is a demigod, son of Poseidon, the Greek god of the sea, earthquakes, and father of all horses, (which he made from sea foam). Percy also learns that his best friend, Grover Underwood, is actually a satyr, and that the Greek gods are accusing Percy of having stolen Zeus' master lightning bolt, the most powerful weapon in the world. To clear his name and save the world from another war between the Olympian gods, Percy sets out to retrieve the lightning bolt from Hades, who is suspected of being the real thief. Thus, Percy, Grover, and Annabeth Chase, a daughter of Athena, start on a journey to the underworld, facing numerous mythological monsters on the way. After confronting an innocent Hades, they learn that their friend Luke Castellan, son of Hermes, is the real thief who stole the bolt to allow Kronos, the defeated king of the Titans, a chance to rise again.</p>

                                <p style="text-align: justify;">The book was adapted into a film by Chris Columbus and 20th Century Fox, under the title Percy Jackson & the Olympians: The Lightning Thief, and was released on February 12, 2010.</p>
                                <br>
                                <h4>The Sea of Monsters</h4>
                                <p style="text-align: justify;">The Sea of Monsters is the second installment in the series, released on April 1, 2006.</p>

                                <p style="text-align: justify;">Camp Half-Blood is under attack when Thalia's tree, which guards the borders of the camp, is poisoned and slowly begins to die. In order to save the tree and the camp, someone must recover the Golden Fleece, which is somewhere in the Sea of Monsters. At the same time, Percy finds out that Grover, who has left on a quest to find the missing god Pan, has been captured by the cyclops Polyphemus and that the Fleece is on Polyphemus' island. Together with Annabeth and his half-brother Tyson, a cyclops, Percy sets out to rescue Grover. Meanwhile, Clarisse La Rue, daughter of Ares, is sent on an official quest by Camp Half-Blood to retrieve the Fleece. The trip to the Sea of Monsters is long and hazardous and along the way the heroes encounter several dangers including Scylla and Charybdis, the sorceress Circe, the Sirens and their former friend Luke Castellan. Percy also learns about a prophecy from the Oracle about a child of one of the three most important gods (Zeus, Poseidon and Hades), playing a vital part in the success or failure of the resurrection of Kronos the Titan-King. The heroes eventually retrieve the Fleece and restore Thalia's tree but also unknowingly revive Thalia herself, daughter of Zeus, who had been turned into the tree by her father when she died.</p>

                                <p style="text-align: justify;">The book was adapted into a film by Thor Freudenthal and 20th Century Fox, under the title Percy Jackson: Sea of Monsters, and was released on August 7, 2013.</p>
                                <br>
                               <h4>The Titan's Curse</h4>
                                <p style="text-align: justify;">The Titan's Curse is the third installment in the series. It was released on May 11, 2007.</p>

                                <p style="text-align: justify;">On a mission to rescue half-bloods Bianca and Nico di Angelo; Percy, Annabeth, Thalia and Grover are attacked by a manticore and rescued by the goddess Artemis and her Hunters. However, Annabeth falls off a cliff whilst trying to fight the manticore and is said to be captured. Later, Artemis is captured by Luke's army while on the hunt for the Ophiotaurus, a cow-serpent monster that was foretold to bring the downfall of Olympus when its entrails are sacrificed to a fire. Her lieutenant Zoe Nightshade, daughter of Atlas, leads Bianca, Thalia and Grover on a quest to save her. Percy, who was not invited to join the party, follows them on behalf of Nico Di Angelo, promising that he will do his best to protect his sister, Bianca. The others eventually find Percy, and he joins their group. They become the prey of skeletons, who chase them across the country. Bianca is able to kill one, which leaves the others mystified. Bianca later dies as they make their way across a godly junkyard. They find Annabeth with Luke and Artemis, who is holding up the sky. Percy then takes it from Artemis and they trick Atlas into his original position under the sky. Thalia replaces Zoe, who dies, as Artemis' lieutenant. Thalia's induction as a lieutenant of Artemis ensures that she will become immortal, never aging to 16, thus escaping the Great Prophecy and leaving Percy to fulfill it. They return to camp and Percy informs Nico about Bianca's death during the journey. Nico blames Percy for failing to protect her and runs away, only after killing skeletons that invade the camp, so that Percy realizes that Hades is Nico's father.</p>
                                <br>
                                <h4>The Battle of the Labyrinth</h4>
                                <p style="text-align: justify;">The Battle of the Labyrinth is the fourth installment in the series. It was released on May 6, 2008.</p>

                                <p style="text-align: justify;">After being attacked by monsters, Percy returns to Camp Half-Blood and learns about the Labyrinth. Annabeth and Percy find an entrance into the Labyrinth in camp. Percy soon learns that Luke will use the entrance to lead his army through the Labyrinth straight into the heart of camp. Annabeth is chosen to lead a quest to prevent it, and chooses to bring Tyson, Percy, and Grover, even though it was traditional to bring only two companions on a quest, as explained by Chiron. While in the Labyrinth, Percy and Annabeth become separated from Grover and Tyson. They encounter Nico, who begins to forgive Percy. Percy and Annabeth arrive under Mount St. Helens. Percy accidentally causes St. Helens to erupt and washes ashore on Calypso's island, Ogygia. He returns to Camp Half-Blood, rather than staying with her, stating that "she would always be his biggest 'what-if'". Then he and Annabeth recruit a mortal girl, Rachel Dare to be a guide in the Labyrinth, using her sight through the Mist, the magical veil that separates the mythological world from the mortal world, and her knowledge for the quest. Daedalus is shown to be alive and to have given Ariadne's string to Luke. They find Grover and Tyson and discover Pan, and Grover tells him that he must return to the world. But Pan says that he cannot come and before dying tells Grover to tell those who will listen that he has died. Grover does what he is told. Percy also finds Luke's body in Kronos' coffin. A final demigod joins the Titans' cause, and Kronos fully rises, using Luke's body. They flee to camp, trying to stop the invasion. Kronos' forces attack the camp, but they are defeated. The book ends with Daedalus sacrificing himself after the battle to destroy the Labyrinth, as it is tied to his life force, and Nico Di Angelo fully forgiving Percy and proposing a dangerous plan for defeating the Titans.</p>
                                <br>
                                <h4>The Last Olympian</h4>
                                <p style="text-align: justify;">The Last Olympian, the fifth and final book in the Percy Jackson series, was released on May 5, 2009.</p>

                                <p style="text-align: justify;">Percy Jackson learns that Kronos' forces are preparing to attack Olympus. Poseidon, Percy's father, decides that it is time for Percy to now fulfill the Great Prophecy. Seeking to defeat Kronos, like Achilles did, Percy bathes in the River Styx, making his body invulnerable except one small chosen part of his body (the small of his back). Kronos leads a siege of New York City and puts its citizens to sleep. Percy leads the campers, Hunters, nature spirits, and centaurs to protect Mount Olympus from Kronos and his forces. While they protect Olympus, the gods hold down the monster Typhon as he makes his way to New York. Kronos, possessing Luke's body, forces his way into Olympus and battles Percy in Olympus' throne room. Typhon reaches New York but is defeated after the arrival of Poseidon's forces, led by Tyson. Annabeth is able to make Luke come back to his senses, and Percy gives him Annabeth's knife. Luke stabs himself in his mortal spot (as he also was invulnerable from bathing in the River Styx) to destroy Kronos and save Mount Olympus, but Luke dies. The gods reward Percy and his friends, and offer him immortality. He rejects the offer, but instead requests the gods to claim all their children and to have cabins for all the gods, including the minor ones. Rachel Elizabeth Dare becomes the Oracle and recites the next Great Prophecy. The book finishes with Percy and Annabeth becoming a couple, and ominous clouds looming over Rachel's next Great Prophecy.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div style="padding-right: 10px; padding-left: 10px;">
                                <h2>Top Articles</h2><br>
                                <img src="https://vignette.wikia.nocookie.net/olympians/images/1/10/Percy_Jackson.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1200/window-height/1200?cb=20180319172727" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/1771">Percy Jackson</a><br>
                                <p>This article is about the character. You may be looking for the series, the video game, the...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/olympians/images/e/e7/Nico_di_Angelo.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1200/window-height/1200?cb=20170220200630" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/1805">Nico di Angelo</a><br>
                                <p>Nico di Angelo is a fourteen-year-old Italian Greek demigod, the son of Hades and Maria di...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/olympians/images/c/ca/Annabeth_Chase-Viria.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1200/window-height/1200?cb=20170220200242" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/1778">Annabeth Chase</a><br>
                                <p>Annabeth Chase is a seventeen-year-old Greek demigod, the daughter of Athena and Frederick...</p><hr style="border-color: #636363;" style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/olympians/images/3/33/Magnus_viria.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1146/window-height/1146?cb=20170917163854" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/118023">Magnus Chase</a><br>
                                <p>Magnus Chase is a sixteen-year-old, formerly homeless teenager who lived in Boston...</p><hr style="border-color: #636363;">
                                
                                <img src="https://vignette.wikia.nocookie.net/olympians/images/5/53/Leo_Valdez-Viria.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1200/window-height/1200?cb=20170223023557" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/14701">Leo Valdez</a><br>
                                <p>Leonidas \"Leo\" Valdez is one of the seven heroes of the Prophecy of Seven. He plays one of the...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/olympians/images/e/ee/Jason_Grace-Redraw.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1200/window-height/1200?cb=20170220201202" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/14650">Jason Grace</a><br>
                                <p>For other uses of the name Jason, see Jason (disambiguation). Jason Grace is a Roman demigod...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/olympians/images/5/54/Apollo_Viria.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/716/window-height/716?cb=20180413123657" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/1867">Apollo</a><br>
                                <p>Apollo, also known as Lester Papadopolous in his human form, is the Greek god of the sun, light...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/olympians/images/4/40/Will-Solace.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1200/window-height/1200?cb=20170216133752" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/3063">Will Solace</a><br>
                                <p>Will Solace is a Greek demigod, the son of Apollo and Naomi Solace. He is the current head...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/olympians/images/0/0d/Alex_fierro.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1200/window-height/1200?cb=20170923202903" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/141346">Alex Fierro</a><br>
                                <p>Alex Fierro is a genderfluid, formerly homeless teenager from Boston, Massachusetts. She is the...</p><hr style="border-color: #636363;">

                                <img src="https://vignette.wikia.nocookie.net/olympians/images/2/22/Piper_McLean.jpg/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/1200/window-height/1200?cb=20170220201323" onerror="this.src='../images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                <a href="article.php/15008">Piper McLean</a><br>
                                <p>Piper McLean is a Greek demigod daughter of Aphrodite and Tristan McLean and is currently the...</p><hr style="border-color: #636363;">
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