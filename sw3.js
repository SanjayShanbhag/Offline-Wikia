(function(){
    'use strict';


    var CACHE_NAME = 'version1';
    var urlsToCache = [
        '.',
        'index.php',
        'error.php',
        'CSS/style.css',
        'images/ac.jpg',
        'images/cod.jpg',
        'images/db.jpg',
        'images/da.jpg',
        'images/bb.jpg',
        'images/dc.jpg',
        'images/got.png',
        'images/gow.jpg',
        'images/hp.jpg',
        'images/logo.png',
        'images/marvel.png',
        'images/pj.jpg',
        'images/pokemon.png',
        'images/skyrim.jpg',
        'images/wd.jpg',
        'images/witcher.jpg',
        'images/noimg.png',
        'images/error.png',
        'favicon.png',
        'main2.js',
        'manifest.json',
        'saved.php',
        'about.php',
        'images/fbdp.jpg',
        'AssassinsCreed/CSS/style.css',
        'BreakingBad/CSS/style.css',
        'CallOfDuty/CSS/style.css',
        'DC/CSS/style.css',
        'Dragonball/CSS/style.css',
        'ElderScrolls/CSS/style.css',
        'GameOfThrones/CSS/style.css',
        'GodOfWar/CSS/style.css',
        'HarryPotter/CSS/style.css',
        'Marvel/CSS/style.css',
        'PercyJackson/CSS/style.css',
        'Pokemon/CSS/style.css',
        'WalkingDead/CSS/style.css',
        'Witcher/CSS/style.css',
        'DragonAge/CSS/style.css',
        'AssassinsCreed/index.php',
        'BreakingBad/index.php',
        'CallOfDuty/index.php',
        'DC/index.php',
        'Dragonball/index.php',
        'ElderScrolls/index.php',
        'GameOfThrones/index.php',
        'GodOfWar/index.php',
        'HarryPotter/index.php',
        'Marvel/index.php',
        'PercyJackson/index.php',
        'Pokemon/index.php',
        'WalkingDead/index.php',
        'Witcher/index.php',
        'DragonAge/index.php',
        'AssassinsCreed/images/topfile.png',
        'BreakingBad/images/topfile.png',
        'CallOfDuty/images/topfile.png',
        'DC/images/topfile.png',
        'Dragonball/images/topfile.png',
        'ElderScrolls/images/topfile.png',
        'GameOfThrones/images/topfile.png',
        'GodOfWar/images/topfile.png',
        'HarryPotter/images/topfile.png',
        'Marvel/images/topfile.png',
        'PercyJackson/images/topfile.png',
        'Pokemon/images/topfile.png',
        'WalkingDead/images/topfile.png',
        'Witcher/images/topfile.png',
        'DragonAge/images/topfile.png',
        'AssassinsCreed/images/skyrim.jpg',
        'BreakingBad/images/skyrim.jpg',
        'CallOfDuty/images/skyrim.jpg',
        'DC/images/skyrim.jpg',
        'Dragonball/images/skyrim.jpg',
        'ElderScrolls/images/skyrim.jpg',
        'GameOfThrones/images/skyrim.jpg',
        'GodOfWar/images/skyrim.jpg',
        'HarryPotter/images/skyrim.jpg',
        'Marvel/images/skyrim.png',
        'PercyJackson/images/skyrim.jpg',
        'Pokemon/images/skyrim.jpg',
        'WalkingDead/images/skyrim.jpg',
        'Witcher/images/skyrim.jpg',
        'DragonAge/images/skyrim.png',
        'AssassinsCreed/images/skyrimwall.jpg',
        'BreakingBad/images/skyrimwall.jpg',
        'CallOfDuty/images/skyrimwall.jpg',
        'DC/images/skyrimwall.png',
        'Dragonball/images/skyrimwall.png',
        'ElderScrolls/images/skyrimwall.jpg',
        'GameOfThrones/images/skyrimwall.jpg',
        'GodOfWar/images/skyrimwall.jpg',
        'HarryPotter/images/skyrimwall.jpg',
        'Marvel/images/skyrimwall.jpg',
        'PercyJackson/images/skyrimwall.jpg',
        'Pokemon/images/skyrimwall.jpg',
        'WalkingDead/images/skyrimwall.jpg',
        'Witcher/images/skyrimwall.jpg',
        'DragonAge/images/skyrimwall.jpg',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
        'https://code.jquery.com/jquery-2.1.1.min.js',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        'https://use.fontawesome.com/releases/v5.0.8/css/all.css'
    ];

    self.addEventListener('install', function(event) {
        event.waitUntil(
            caches.open(CACHE_NAME)
            .then(function(cache) {
                return cache.addAll(urlsToCache);
            })
        );
    });

    self.addEventListener('activate', function(event) {


        var cacheWhitelist = [CACHE_NAME];

  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.map(function(cacheName) {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
          }
        })
      );
  })
    );

            var db;
            var request = indexedDB.open("newDatabase", 1);
         
            request.onerror = function(event) {
                console.log("error: ");
            };
         
            request.onsuccess = function(event) {
                db = request.result;
                console.log("success: "+ db);
            };
         
            request.onupgradeneeded = function(event) {
                var db = event.target.result;
                var objectStore = db.createObjectStore("urlData", {keyPath: 'id', autoIncrement:true});
            }
        });

    self.addEventListener('fetch', function(event) {
        event.respondWith(
            caches.match(event.request)
            .then(function(response) {
                return response || fetchAndCache(event.request);
            })
        );
    });

    function fetchAndCache(url){
    return fetch(url)
    .then(function(response) {
        if(!response.ok){
            fetch(url, {mode: 'cors'})
            .then(function(reponse1) {
                if(!response1.ok){
                    throw Error(response1.statusText);
                }
                return response1;
            });
        }
        return caches.open(CACHE_NAME)
        .then(function(cache) {
            //cache.put(url, response.clone());
            return response;
        });
    })
        .catch(function(error) {
            console.log('Request Failed:', error);
            // You could return a custom offline 404 page here
        return caches.match("error.php");
        });
    }
})();