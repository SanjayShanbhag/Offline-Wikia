function saveoff(abstract,title,image,id,type1){
            document.getElementById('savoff').style.display = 'none';
            document.getElementById('offava').style.display = 'block';
            //console.log(title+" "+abstract);
            //console.log(arguments.length);
            if(!title){
                console.log("Undefined");
            }
            //console.log("Hello: "+title);
            var url123 = "/fandom/"+type1+"/article.php/"+id;
            console.log(url123);
            var CACHE_NAME = "version1";
            
            var db;
            var request1 = indexedDB.open("newDatabase",1);
            request1.onsuccess = function (evt) {
                db = request1.result;
                var request = db.transaction(["urlData"], "readwrite")
                .objectStore("urlData")
                .add({ urid: id, name: title, abstract: abstract, image: image, type1: type1, created: new Date().getTime() });
            
                request.onsuccess = function(event) {
                   // alert("Data has been added to your database.");
                };
            
                request.onerror = function(event) {
                    console.log("Unable to add data\r\nas it is aready existing in your database! ");
                }
            }
            if (Notification.permission == 'granted') {
                navigator.serviceWorker.getRegistration().then(function(reg) {
                    // TODO 2.4 - Add 'options' object to configure the notification
                    var options = {
                        body: 'This Article has been successfully saved and can now be viewed when offline!',
                        icon: 'favicon.png',
                        vibrate: [100, 50, 100],
                        data: {
                            dateOfArrival: Date.now(),
                            primaryKey: 1
                        },

                    };
                    reg.showNotification('Article Saved',options);
                });
            }
          
                caches.open(CACHE_NAME)
                .then(function(cache) {
                    cache.add(url123);
                });
            
        }