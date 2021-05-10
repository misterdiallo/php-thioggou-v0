<!-- Author: AlphaMake -- http://alphamake.jimdo.com -- License: All right reserved. -->
<!--HEADER -->
    <?php
    session_start();
        if (isset($_POST['recherchesimple']) && !empty($_POST['recherchesimple']))
        {
            $title="Resultat";
            include 'header.php';
        
           
    ?>
<!--HEADER -->

<!-- CONTENT -->
    <!-- Titre -->
        <div class="banner-top">
            <div class="container">
                <h3 >Resultat de recherche</h3>
                <h4><a href="index.php"> ThioGGou </a><label>/</label>Resultat de recherche</h4>
                <div class="clearfix"> </div>
            </div>
        </div>
    <!-- Titre -->
    <!-- Carte -->
        <div class="search-form search-form-result">
            <form action="resultat.php" method="post">
                <input type="text" class='serce' required placeholder="Que cherchez-vous ..?" name="recherchesimple"
                value="<?php echo $_POST['recherchesimple'];?>">
                <input type="submit" class='sercev' value="" > <br>
                <a align="center" style="color:red; padding-right:10%" href="recherche.php">Cliquer ici pour une Recherche detaillée</a>
            </form>             
        </div>	
        <style>
            .search-form-result{
                position:absolute;
                top:350px;
                padding-left:10%;
                z-index:99999;
                width:100%;
            }
            .search-form-result input[type='text']{
                padding: 10px;
                outline: none;
                font-size: 1.2em;
                color: #912222;
                width: 70%;
                text-align:center;
                border: 1px solid #FFF;
                background: rgba(255, 255, 255, 0.75);
            }
            #map {
                height: 100%;
            }
        </style>
        <div id="map" style="height:400px"></div>
    <!-- Carte -->
    <br />
  	<!-- Pub Slide -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="kitchen.php"> <img class="first-slide" src="images/ba.jpg" alt="First slide"></a>
                </div>
                <div class="item">
                    <a href="care.php"> <img class="second-slide " src="images/ba1.jpg" alt="Second slide"></a>
                
                </div>
                <div class="item">
                    <a href="hold.php"><img class="third-slide " src="images/ba2.jpg" alt="Third slide"></a>
                
                </div>
            </div>
        </div>
    <!-- Pub Slide -->
	<br /><br /><br />
	<!-- Sponsors -->
        <div class="content-top ">
            <div class="container ">
                <div class="spec ">
                    <h3>Nos Sponsors</h3>
                    <div class="ser-t">
                        <b></b>
                        <span><i></i></span>
                        <b class="line"></b>
                    </div>
                </div>
                <div class="tab-head ">
                    <div class=" tab-content tab-content-t ">
                        <div class="tab-pane active text-style" id="tab1">
                            <div class=" con-w3l">
                                <!--Le sponsors-->
                                    <div class="col-md-3 m-wthree">
                                        <div class="col-m">								
                                            <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                                <img src="images/of.png" class="img-responsive" alt="">
                                            </a>
                                        </div>
                                    </div>
                                <!--Le sponsors-->
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<!-- Sponsors -->
    <br />
<!-- CONTENT -->

<!--FOOTER-->
    <?php
	 	include("footer.php")
	?>
<!-- FOOTER-->
    <script src="js/bootstrap.js"></script>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 9.9307086, lng: -13.7050413},
                mapTypeId: 'hybrid',
                zoom: 6,
                styles: [
                    {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                    {
                    featureType: 'administrative.locality',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                    },
                    {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                    },
                    {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#263c3f'}]
                    },
                    {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#6b9a76'}]
                    },
                    {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#38414e'}]
                    },
                    {
                    featureType: 'road',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#212a37'}]
                    },
                    {
                    featureType: 'road',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9ca5b3'}]
                    },
                    {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#746855'}]
                    },
                    {
                    featureType: 'road.highway',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#1f2835'}]
                    },
                    {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#f3d19c'}]
                    },
                    {
                    featureType: 'transit',
                    elementType: 'geometry',
                    stylers: [{color: '#2f3948'}]
                    },
                    {
                    featureType: 'transit.station',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                    },
                    {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#17263c'}]
                    },
                    {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#515c6d'}]
                    },
                    {
                    featureType: 'water',
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#17263c'}]
                    }
                ]
            });
            var infoWindow = new google.maps.InfoWindow({map: map});
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Votre Position.');
                    map.setZoom(17);
                    map.setCenter(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                handleLocationError(false, infoWindow, map.getCenter());
            }
            var contentString = '<h4>Nom du produit</h4> <p>Nom de la boutique <br> Avis client</p>';
            var infowindow = new google.maps.InfoWindow({
            content: contentString
            });
            var myLatLng0 = {lat: 9.5318811, lng: -13.6907422};
            var myLatLng1 = {lat: 9.5318811, lng: -13.6807422};
            var myLatLng2 = {lat: 9.2518811, lng: -13.5507422};
            var myLatLng3 = {lat: 9.4518811, lng: -12.6907422};
            var myLatLng4 = {lat: 9.5518811, lng: -13.6907422};
            <?php
                for($i=0; $i<5; $i++){
            ?>
                var marker<?php echo $i;?> = new google.maps.Marker({
                    position: myLatLng<?php echo $i;?>,
                    map: map
                });
                marker<?php echo $i;?>.addListener('click', function() {
                    infowindow.open(map, marker<?php echo $i;?>);
                });
            <?php
                }
            ?>           
        }
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: Erreur de Géolocalisation.' :
                'Error: Veuillez actuliser la page et autoriser la géolocalisation.');
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbA4OY0qrzHSRb5WpBsNVKNpKTyeeaxAw&callback=initMap"></script>
</body>
</html>


<?php 
    }
    else{
        header('Location: index.php');
    }
?>