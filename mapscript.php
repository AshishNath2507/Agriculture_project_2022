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