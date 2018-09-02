<!DOCTYPE html>
<html>
<head>
	<title>Offline Wikia | Saved Articles</title>
	<meta charset="utf-8">
    <link rel="manifest" href="ElderScrolls/manifest.json">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#212121">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Offline Wikia">
    <link rel="icon" sizes="192x192" href="favicon.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Offline Wikia">
    <link rel="apple-touch-icon" href="favicon.png">

    <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#212121">
    <meta name="msapplication-TileImage" content="favicon.png">
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="main1.js"></script>
    <style type="text/css">
        html,body{
            height: 100%;
            margin:0;
            padding:0;
        }
        .back{
            background-color: #1B1B1B;
            min-width: 100%;
            min-height: 100%;
            padding: 0px !important;
            margin: 0 auto; 
            bottom: 0px;
        }
        img{
            width: 100%;
            height: 300px;
        }
        .image{
            position: relative;
            min-width: 100%;
        }
        h3{
            position: absolute;
            top: 180px;
            left: 0;
            width: 100%;
            text-align: center;
        }
        h3 span { 
            color: white; 
            font: bold 24px/45px Helvetica, Sans-Serif; 
            letter-spacing: -1px;  
            background: rgb(0, 0, 0); /* fallback color */
            background: rgba(0, 0, 0, 0.7);
            padding: 10px; 
        }
    </style>
    <style type="text/css">
        h3,p{
            color: #FAFAFA;
        }
        a{
            text-decoration: none !important;
        }
    </style>
    <script type="text/javascript">
    var db;
            var request1 = indexedDB.open("newDatabase",1);
            request1.onsuccess = function (evt) {
                db = request1.result;
                var counter = 0;
                var objectStore = db.transaction("urlData").objectStore("urlData");
                var count = objectStore.count();
                count.onsuccess = function() {
                    var totresults = count.result;
                    if(totresults == 0){
                        var parentDiv = document.getElementById('content');
                        var d = document.createElement("H4");
                        var d1 = document.createTextNode("You have not saved any articles! Do come back here when you have saved some.")
                        d.appendChild(d1);
                        parentDiv.appendChild(d);
                    }
                }
        objectStore.openCursor().onsuccess = function(event) {
        var cursor = event.target.result;
        if (cursor) {
            var name = cursor.value.name;
            var abstract = cursor.value.abstract;
            var urid = cursor.value.urid;
            var domain = cursor.value.type1;
            var url = domain+"/article.php/"+urid;
            var image2 = domain+"/images/skyrim.jpg";
            if(domain == 'Marvel'){
                var image2 = "images/marvel.png";
            }
            else if(domain == 'ElderScrolls'){
                var image2 = "images/skyrim.jpg";
            }
            else if(domain == 'GameOfThrones'){
                var image2 = "images/got.png";
            }
            else if(domain == 'Pokemon'){
                var image2 = "images/pokemon.png";
            }
            else if(domain == 'HarrtPotter'){
                var image2 = "images/hp.jpg";
            }
            else if(domain == 'PercyJackson'){
                var image2 = "images/pj.jpg";
            }
            else if(domain == 'CallOfDuty'){
                var image2 = "images/cod.jpg";
            }
            else if(domain == 'GodOfWar'){
                var image2 = "images/gow.jpg";
            }
            else if(domain == 'AssassinsCreed'){
                var image2 = "images/ac.jpg";
            }
            else if(domain == 'DragonAge'){
                var image2 = "images/da.jpg";
            }
            else if(domain == 'Witcher'){
                var image2 = "images/witcher.jpg";
            }
            else if(domain == 'DC'){
                var image2 = "images/dc.jpg";
            }
            else if(domain == 'Dragonball'){
                var image2 = "images/db.jpg";
            }
            else if(domain == 'BreakingBad'){
                var image2 = "images/bb.jpg";
            }
            else if(domain == 'WalkingDead'){
                var image2 = "images/wd.jpg";
            }

            var parentDiv = document.getElementById('content');
            
            

            var secondDiv = document.createElement('div');
            secondDiv.setAttribute("class", "col-sm-12 col-lg-4 col-md-4");
            var card = document.createElement('div');
            card.setAttribute("class", "center-block card");
            var image1 = document.createElement('div');
            image1.setAttribute("class", "image");
            
            var x = document.createElement("IMG");
            x.setAttribute("src", image2);
            var z = document.createElement("H3");
            var z1 = document.createElement("SPAN");
            var t = document.createTextNode(name);
            z1.appendChild(t);
            z.appendChild(z1);

            image1.appendChild(x);
            image1.appendChild(z);
            card.appendChild(image1);
            var anchor = document.createElement("A");
            anchor.setAttribute("href", url);
            anchor.appendChild(card);
            secondDiv.appendChild(anchor);

            var f = document.createElement("BR");
            secondDiv.appendChild(f);

            
            parentDiv.appendChild(secondDiv);
        



            cursor.continue();
        }
        else {
            console.log("No more entries!");
        }
   };
}
    </script>
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
                    <a class="navbar-brand" href="#"><img src="images/logo.png" style="width: 150px; height: 30px;"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="saved.php"><span class="glyphicon glyphicon-floppy-disk"></span> Saved Articles</a></li>
                        <li><a href="about.php"><span class="glyphicon glyphicon-user"></span> About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid back">
            <div class="container">
                <br><br><br><br>
                <h2 style="color: #EFEFEF; margin-left: 10px;">Saved Articles</h2>
                <br>
                <div class="content" id="content">
                </div>
            </div>
        </div>
    </body>
</html>