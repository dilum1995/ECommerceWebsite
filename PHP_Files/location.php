<!DOCTYPE html>

<html>
    <head>
        <title>SportsLab</title>
        <meta charset="UTF-8">
        <link href="../CSS_Files/indexCSS.css" rel="stylesheet" type="text/css">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
    </head>

    <body>
        <!--including the header along with the nav bar-->
        <?php
        include '../PHP_Files/head.php';
        ?>

        <div>
            <!--including the side nav bar in the left to browse by category-->
            <?php
            include '../PHP_Files/sideNav.php';
            ?>

            <!--part containing the location-->
            <div id="table">
                <div id="map">
                    <script src="http://maps.googleapis.com/maps/api/js"></script>
                    <script>
                        /*to get the map*/
                        function initialize() {
                            var iitLocation = {lat: 6.8652715, lng: 79.8598505}; // location of iit
                            var mapProperties = {
                                center: new google.maps.LatLng(6.8652715, 79.8598505), // location to center map
                                zoom: 15,
                                mapTypeId: google.maps.MapTypeId.ROADMAP // map type
                            };
                            var map = new google.maps.Map(document.getElementById("map"), mapProperties);

                            var marker = new google.maps.Marker({ // animating marker
                                position: iitLocation,
                                map: map,
                                animation: google.maps.Animation.BOUNCE
                            });

                            marker.setMap(map); // setting marker

                        }
                        google.maps.event.addDomListener(window, 'load', initialize);
                    </script>

                </div>
            </div>

            <!--including the login section-->
            <?php
            include '../PHP_Files/login.php';
            ?>

        </div>

        <!--including the footer-->
        <?php
        include '../PHP_Files/footer.php';
        ?>

    </body>
</html>



