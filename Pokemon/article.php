<?php
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
    $url1 = trim(parse_url($url, PHP_URL_PATH), '/');
    $url1arr = explode("/", $url1);
    $id = $url1arr[3];
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pokemon Wikia</title>
	<link rel="stylesheet" type="text/css" href="/fandom/Pokemon/CSS/style.css">
	<meta charset="utf-8">
    <link rel="manifest" href="/fandom/manifest.json">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fandom/favicon.png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#212121">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Offline Wikia">
    <link rel="icon" sizes="192x192" href="/fandom/favicon.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Offline Wikia">
    <link rel="apple-touch-icon" href="/fandom/favicon.png">

    <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#212121">
    <meta name="msapplication-TileImage" content="/favicon.png">
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="/fandom/main1.js"></script>
    <style type="text/css">
        @media screen and (max-width: 900px){
            .searchbox{
                width: 90%;
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
    </style>
    <script type="text/javascript">
        <?php
                $jsonurl1 = "http://pokemon.wikia.com/api/v1/Articles/Details?ids=".$id."&abstract=100&width=200&height=200";
                $json2 = @file_get_contents($jsonurl1,0,null,null);
                $result2 = json_decode($json2,true);
                $res = $result2['items'];
                $res = $res[$id];
                $title = $res['title'];
                $abs = $res['abstract'];
                $abs = str_replace("'", '"', $abs);
                $image = $res['thumbnail'];
            ?>
            var title19 = '<?php echo $title; ?>';
            var abstract1 = '<?php echo $abs; ?>';
            var image1 = '<?php echo $image; ?>';
            var id19 = <?php echo $id; ?>;
            var type1 = "Pokemon";

    </script>
    <script type="text/javascript">
        function oload(){
            var id20 = <?php echo $id; ?>;
            var db;
            var request1 = indexedDB.open("newDatabase",1);
            request1.onsuccess = function (evt) {
            db = request1.result;
            var objectStore = db.transaction("urlData").objectStore("urlData");
            objectStore.openCursor().onsuccess = function(event) {
            var cursor = event.target.result;
            if (cursor) {
                var urid = cursor.value.urid;
                console.log(id20+" "+urid);
                if(urid == id20){
                    document.getElementById('savoff').style.display = 'none';
                    document.getElementById('offava').style.display = 'block';
                }
                cursor.continue();
            }
        }
    }
}
    </script>
</head>
<body onload="oload()">

		<nav class="navbar navbar-inverse navbar-fixed-top" style="margin: 0; border: none; border-radius: 0;">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span> 
      				</button>
      				<a class="navbar-brand" href="#"><img src="/fandom/images/logo.png" style="width: 150px; height: 30px;"></a>
    			</div>
    			<div class="collapse navbar-collapse" id="myNavbar">
      				<form class="navbar-form navbar-left" method="GET" action="/fandom/ElderScrolls/searchresults.php">
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
        				<li><a href="/fandom/index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="/fandom/saved.php"><span class="glyphicon glyphicon-floppy-disk"></span> Saved Articles</a></li>
                        <li><a href="/fandom/about.php"><span class="glyphicon glyphicon-user"></span> About</a></li>
      				</ul>
    			</div>
  			</div>
		</nav>
		<div class="container-fluid back">
			<div class="container">
                <br><br><br><br>
                <div class="content">
                    <div class="topcon">
                        <img src="/fandom/Pokemon/images/topfile.png" style="width: 300px; height: 90px; margin: auto;" class="center-block toplog">
                        <div class="toplog1" style="display: none; margin-top: top;">
                            <h3 style="text-align: center; color: #FAFAFA;">Pokemon Wiki</h3>
                        </div>
                    </div>
                    <br>
                    <div style="padding-left: 10px; padding-right: 10px;">
                        <div class="row">
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <?php
                                    if(!isset($id)){
                                        echo "<h3>Nothing to show!</h3>";
                                    }else{
                                        $url = "http://pokemon.wikia.com/api/v1/Articles/AsSimpleJson?id=".$id;
                                        $json = @file_get_contents($url,0,null,null);
                                        $result = json_decode($json,true);
                                        $result = $result['sections'];
                                        $ch = $result["0"];
                                        $title121 = $ch['title'];
                                        foreach ($result as $result1) {
                                            # code...
                                            $img = $result1['images'];
                                            //$img = $img['src'];
                                            $siz1 = sizeof($img);
                                            $result2 = $result1['content'];
                                            $siz = sizeof($result2);
                                            if($siz == 0){
                                                echo "<h2>".$result1['title']."</h2>";
                                            }else{
                                                echo "<h3>".$result1['title']."</h3>";
                                                echo "<hr style='border-color: #636363;'>";
                                            }
                                            if($siz1 > 0){
                                                $img = $img['0'];
                                                ?>
                                                <img src="<?php echo $img['src']; ?>" onerror="this.src='/fandom/images/noimg.png'" width="200" height="200" style='float: right; margin-left: 20px; margin-bottom: 10px;'>
                                                <?php
                                            }
                                            foreach ($result2 as $result3) {
                                                # code...
                                                if(!empty($result3['text'])){
                                                    echo "<p style='text-align: justify; font-size: 15px;'>".$result3['text']."</p>";
                                                }else{
                                                    $result4 = $result3['elements'];
                                                    foreach ($result4 as $result5) {
                                                        # code...
                                                        echo "<p style='text-align: justify; font-size: 15px;'>".$result5['text']."<p>";
                                                    }
                                                }
                                            }
                                            //echo "<p>".$result2['text']."</p>";
                                        
                                        }
                                    }
                                ?>
                                <div style="display: none;">
                                    <p id="title121"><?php echo $title121; ?></p>
                                </div>
                                <br>
                                <div style="text-align: center;">
                                    <button class="btn" style="background-color: #263238; border-radius: 50px; box-shadow: 2px 2px #616161;" onclick="saveoff(abstract1,title19,image1,id19,type1)" class="savoff" id="savoff"><span class="glyphicon glyphicon-floppy-disk" style="color: #CFD8DC;"></span><span style="margin-left: 5px; color: #CFD8DC;">SAVE FOR OFFLINE READING</span></button>
                                </div>
                                <div style="text-align: center; display: none;" id="offava">
                                    <button class="btn" style="background-color: #2E7D32; box-shadow: 2px 2px #4CAF50; cursor: default;"><span class="glyphicon glyphicon-ok" style="color: #E0E0E0;"></span><span style="margin-left: 5px; color: #E0E0E0;">ARTICLE IS AVAILABLE OFFLINE</span></button>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <br>
                                <h2> Top Articles: </h2>
                                <br>
                                <?php
                                    $topjson = "http://pokemon.wikia.com/api/v1/Articles/Top?expand=1&limit=10&baseArticleId=".$id;
                                    $json = @file_get_contents($topjson,0,null,null);
                                    $result = json_decode($json,true);
                                    $items = $result['items'];
                                    foreach ($items as $items1) {
                                        # code...
                                        $id1 = $items1['id'];
                                        $title = $items1['title'];
                                        $abstract = $items1['abstract'];
                                        $image = $items1['thumbnail'];
                                        ?>
                                        <img src="<?php echo $image; ?>" onerror="this.src='/fandom/images/noimg.png'" width="100" height="100" style='float: left; margin-right: 5px; height: 100px;'>
                                        <?php
                                        echo "<a href='/fandom/Pokemon/article.php/".$id1."'>".$title."</a><br>";
                                        echo "<p>".$abstract."</p><hr style='border-color: #636363;'>";
                                    }
                                ?>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </body>
</html>	