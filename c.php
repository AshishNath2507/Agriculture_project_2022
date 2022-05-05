<!-- <?php



?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="css/cs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Rajdhani:wght@500&family=Yanone+Kaffeesatz:wght@200;500&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="container flex">
            <a href="#"><img src="./images/logo.png" alt=""></a>
            <nav>
                <ul>
                    <li><a class="navbar-links" href="./index.php">Home</a></li>
                    <li><a class="navbar-links" href="#">Academic</a></li>
                    <li><a class="navbar-links" href="#">Contact Us</a></li>
                    <li><a class="navbar-links" href="#">About Us</a></li>
                    <li><a class="navbar-links" href="#">Account</a></li>
                    <li><a class="navbar-links" href="#">Admin Login</a></li>

                </ul>
            </nav>
        </div>
    </div>

    <!-- Contact us -->
    <section class="contact">
        <div class="container grid">
            
            <div class="contact-text grid-item-1">
                <h1>Contact Us</h1>
                <p>Feel free to contact us and we'll get back to you as soon as we can.</p>
            </div>

            <div class="icons-grid grid-item-2">
                <div class="icons-flex">
                    <div class="icons-items">
                        <div class="icons-images">
                            <img class="icons-images" src="./images/icons/2x/addr-large.png" alt="">    
                        </div>                  
                        <p class="icons-text">Agriculture Road, Jorhat, Assam</p>                       
                    </div>
                    <div class="icons-items">
                        <div class="icons-images">
                            <img src="./images/icons/2x/ph.png" alt="Phone_No.">
                        </div>
                        <p class="icons-text">+9876543210</p>
                    </div>
                    <div class="icons-items">
                        <div class="icons-images">
                            <img src="./images/icons/2x/mail.png" alt="email_image">
                        </div>
                        <p class="icons-text">aau@gmail.com</p>
                    </div>
                    <div class="icons-items">
                        <div class="icons-images">
                            <img src="./images/icons/2x/website.png" alt="website_image">
                        </div>
                        <p class="icons-text">aau.ac.in</p>
                    </div>
                </div>
            </div>

            <div class="contact-form card grid-item-3">
                <h2>Mention Your Query</h2>
                <form action="" method="post">
                    
                    <div class="form-control">
                        <!-- <label for="name">Name</label> -->
                        <input type="text" name="name" id="" placeholder="Name" required>
                    </div>
                    <div class="form-control">
                        <!-- <label for="name">E-mail</label> -->
                        <input type="email" name="email" id="" placeholder="Email" required>

                    </div>
                    <div class="form-control">
                        <!-- <label for="name">Phone</label> -->
                        <input type="tel" name="phno" id="" placeholder="Phone" required>

                    </div>
                    <div class="form-control">
                        <!-- <label for="name">Address</label> -->
                        <input type="text" name="addr" id="" placeholder="Address" required>
                    </div>
                    <div class="form-control">
                        <!-- <label for="name">Message</label> -->
                        <textarea name="message" id="message" cols="17" rows="5" placeholder="Your message"
                            required></textarea>
                    </div>
                    <div class="form-control">
                        <input type="submit" value="Send" class="btn btn-primary">
                    </div>
                    
                </form>
            </div>

            <div class="map-container grid-item-3" id="map">
                <!-- Google Map API works in this div -->
            </div>

        </div>
    </section>


    <footer class="footer bg-dark py-5" style="gap: 2rem;">
        <div class="container grid grid-4">
            <div>
                <h1>Assam Agricultural University</h1>
                <p>Copyright &copy; 2022</p>
            </div>
            <div class="footer-headings">
                <h2>Quote Of The Day</h2>
                <p>Farming looks mighty easy when your plow is a pencil and you're a thousand miles from the corn field."</p>
                <p>- Dwight D. Eisenhower</p>
            </div>
            <nav class="footer-nav footer-headings">
                <ul>
                    <h2>Important Links</h2>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="alumnireg.php">Alumni Register</a></li>
                    <li><a href="alumnilogin.php">Alumni Log IN</a></li>
                </ul>
            </nav>
            <div class="social">
                <a href="https://www.github.com/"><i class="fab fa-github fa-2x"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="https://www.twitter.com"><i class="fab fa-twitter fa-2x"></i></a>
            </div>
        </div>
    </footer>



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
            google.maps.event.addListener(map, 'click', function (event) {
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

                    marker.addListener('click', function () {
                        infoWindow.open(map, marker);
                    })
                }
            }
        }
    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBj7eS9GUUJCrDGtIHSEFStQpGfNDapltM&callback=initMap&v=weekly">
    </script>

    
</body>

</html>