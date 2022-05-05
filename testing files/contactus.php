<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Us</title>
    <link rel="stylesheet" href="demo.css">
    <style>
        sup {
            color: red;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Rajdhani:wght@500&family=Yanone+Kaffeesatz:wght@200;500&display=swap" rel="stylesheet">
</head>

<body>
    
    <?php
         
   
    
    ?>

    <div class="backgroundImage">
        <img src="./images/texture-wallpaper-20070911473722.jpg" alt="background-image for show">
    </div>
    <div class="c-container">        
        <div class="heading">
            <h2>Contact-Us Form</h2>
        </div>
        <div class="contactus">
            <form action="#" method="POST" class="contact">
                <div class="row">
                    <label for="name">Name<sup>*</sup></label>
                    <input type="text" name="name" placeholder="Your name" required>
                </div>
                <div class="row">
                    <label for="">Email<sup>*</sup></label>
                    <input type="email" name="email" placeholder="Your email" required>
                </div>
                <div class="row">
                    <label for="">Phone<sup>*</sup></label>
                    <input type="text" name="phone" placeholder="Phone number" required>
                </div>
                <div class="row">
                    <label for="">Address<sup>*</sup></label>
                    <input type="text" name="addr" placeholder="Your Address" required>
                </div>
                <div class="row">
                    <label for="">Message<sup>*</sup></label>
                    <textarea name="message" id="message" cols="15" rows="5" placeholder="Your Message..."></textarea>
                </div>
                <div class="row">
                    <button type="submit" class="submitButton">Submit</button>
                </div>
            </form>

            <div id="map">
                <!-- Google Map API works in this div -->
            </div>

        </div>
        <div class="icons">
            <div class="iconrow">
                <div class="iconImage">
                    <img class="cImg" src="./images/icons/addr-large.png" alt="ad" srcset="">
                </div>
                <div class="data">
                    <span>Address:</span> <span class="data-inside">Agriculture Road, Jorhat, Assam</span>
                </div>
            </div>
            <div class="iconrow">
                <div class="iconImage">
                    <img class="cImg" src="./images/icons/ph.png" alt="phno" srcset="">
                </div>
                <div class="data">
                    <span>Phone:</span> <span class="data-inside">+9876543210</span>
                </div>
            </div>
            <div class="iconrow">
                <div class="iconImage">
                    <img class="cImg" src="./images/icons/mail.png" alt="email" srcset="">
                </div>
                <div class="data">
                    <span>e-mail:</span> <span class="data-inside">aau@gmail.com</span>
                </div>
            </div>
            <div class="iconrow">
                <div class="iconImage">
                    <img class="cImg" src="./images/icons/website.png" alt="site" srcset="">
                </div>
                <div class="data">
                    <span>Website:</span> <a href="www.aau.ac.in" target="_blank">aau.ac.in</a>
                </div>
            </div>

        </div>
    </div>

    <script>
        function initMap() {

            //Map Options
            var options = {
                zoom: 12,
                center: {
                    lat: 26.7509,
                    lng: 94.2037
                }
            }

            //New Map
            var map = new google.maps.Map(document.getElementById("map"), options);

            //Listen for click on map
            google.maps.event.addListener(map, 'click', function(event) {
                //Add marker
                addMarker({
                    coords: event.latLng
                });
            });

            /*
            //Add Marker
            var marker = new google.maps.Marker({
                position : {lat: 26.7247 , lng:94.1936},
                map : map

                //---To change the icon--- 
                // ,icon :'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
            });

            var infoWindow = new google.maps.InfoWindow({
                content:'<h4>Assam Agricultural University, Jorhat, Assam</h4>'
            });

            marker.addListener('click', function(){
                infoWindow.open(map, marker);
            })
            */

            //Array of Markers
            var markers = [{
                    coords: {
                        lat: 26.7247,
                        lng: 94.1936
                    },

                    iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                    content: '<h4>Assam Agricultural University, Jorhat, Assam</h4>'
                },
                {
                    coords: {
                        lat: 26.746130,
                        lng: 94.194060
                    },
                    content: '<h4>My Home Address</h4>'
                }
            ];

            //Loop through markers
            for (var i = 0; i < markers.length; i++) {
                addMarker(markers[i]);
            }


            //Add marker function
            function addMarker(props) {
                var marker = new google.maps.Marker({
                    position: props.coords,
                    map: map,

                    // icon : props.iconImage
                });

                //check for customicon
                if (props.iconImage) {
                    //set icon image
                    marker.setIcon(props.iconImage);
                }

                //Check content
                if (props.content) {
                    var infoWindow = new google.maps.InfoWindow({
                        content: props.content
                    });

                    marker.addListener('click', function() {
                        infoWindow.open(map, marker);
                    })
                }
            }
        }
    </script>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBj7eS9GUUJCrDGtIHSEFStQpGfNDapltM&callback=initMap&v=weekly"></script>

</body>

</html>