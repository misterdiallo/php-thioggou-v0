<!-- Author: AlphaMake -- http://alphamake.jimdo.com -- License: All right reserved. -->
<!--HEADER -->
    <?php
        session_start();
        $title="Aux Alentours";
        include 'header.php';
    ?>
<!--HEADER -->

<!-- CONTENT -->
    <!-- Titre -->
        <div class="banner-top">
            <div class="container">
                <h3 >Les Alentours</h3>
                <h4><a href="index.php"> ThioGGou </a><label>/</label>Les Alentours</h4>
                <div class="clearfix"> </div>
            </div>
        </div>
    <!-- Titre -->
    <!-- Carte -->
        <div id="map" style="height:500px"></div>
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
                mapTypeId: 'roadmap',
                zoom: 6,
                fullscreenControl: false,
                
                styles: [
                    {
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "saturation": -95
                        },
                        {
                            "lightness": 55
                        },
                        {
                            "visibility": "simplified"
                        }
                        ]
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
                    infoWindow.setContent('Vous etes ici');
                    map.setZoom(17);
                    map.setCenter(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                handleLocationError(false, infoWindow, map.getCenter());
            }
            <?php 
                require_once 'require/connexion.php';
                try {
                    $sql = 'select * from boutique';
                    $bdd = $connect->query($sql); 
                    $i=0;
                    while($bcle = $bdd->fetch())
                    {
                        ?>
                            var contentString<?php echo $i; ?> =' <div id="infomap">' +
                                '<form action="boutique.php" method="POST">' +
                                    '<input type="text" name="id" value="<?php echo $bcle["id"]; ?>" required >' +
                                    '<input type="text" name="login" value="<?php echo $bcle["login"]; ?>" required >' +
                                    '<div class="title"> <?php echo strtoupper($bcle["nom"]); ?></div>' +
                                    '<input type="submit" value="Faire un tour"> ' +
                                '</form>' +
                            '</div>';
                            var myLatLng<?php echo $i; ?> = {lat: <?php echo $bcle['lat']; ?>, lng: <?php echo $bcle['lg']; ?>};
                            var infowindow<?php echo $i; ?> = new google.maps.InfoWindow({
                                content: contentString<?php echo $i; ?>,
                                maxWidth: 350
                            });
                        <?php
                            $i++;   
                    }
                    for($s=0; $s<$i; $s++){
                        ?>
                            //var me ='images/me.png';
                            var marker<?php echo $s;?> = new google.maps.Marker({
                                position: myLatLng<?php echo $s;?>,
                                animation: google.maps.Animation.DROP,
                                map: map,
                                //icon: me
                            });
                            marker<?php echo $s; ?>.addListener('click', function() {
                                infowindow<?php echo $s; ?>.open(map, marker<?php echo $s; ?>);
                            });
                        <?php
                    }
                }catch (PDOException $e){
                            echo 'Connexion Interrompu '.$e;
                }
            ?>
        }
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: Veuillez  autoriser la géolocalisation et actuliser la page .' :
                'Error: ');
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbA4OY0qrzHSRb5WpBsNVKNpKTyeeaxAw&callback=initMap"></script>
    
    <style>
        #infomap .title{
            text-align:center;
            background-color: #000 ;
            font-weight:bold;
            padding:5px;
            color: #fff;
        }
        #infomap input[type="text"]{
            display:none;
        }
        #infomap input[type="submit"]{
            border-radius: 5px;
        }
        
    </style>

</body>
</html>