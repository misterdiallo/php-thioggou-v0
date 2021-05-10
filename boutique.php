<?php
    require_once 'require/connexion.php';
    if ( (isset($_POST['login'])) && (isset($_POST['id'])) ) {
        if ( (!empty($_POST['login'])) && (!empty($_POST['id'])) ) {
            $login = $_POST['login'];
            $id = $_POST['id'];
            try {
                $sql = 'select * from boutique where login="'.$login.'" and id="'.$id.'"';
                $bdd = $connect->query($sql); 
                $count = $bdd->rowCount();                  			                
                if ($count == 1) {
                    session_start();
                    $bcle = $bdd->fetch() ;
                    $login1=$bcle['login'];
                    $id1=$bcle['id'];
                    //$search=$bcle['nbre_search'];
                    if ($login == $login1 and $id == $id1) {
                        
                    }
                    else {
                        header("Location: alentour.php") ;     
                    }
                }else {
                    header("Location: alentour.php") ;     
                }
            }catch (PDOException $e){
                header("Location: alentour.php") ;
            }
        }else{
            header("Location: alentour.php") ;
        }
    }else{
        header("Location: alentour.php") ;
    }
?>
<!-- Author: AlphaMake -- http://alphamake.jimdo.com -- License: All right reserved. -->
<!--HEADER -->
<?php
        $title=$bcle['nom'];
        include 'header.php';
    ?>
<!--HEADER -->

<!-- CONTENT -->
    <!-- Titre -->
        <div class="banner-top">
            <div class="container">
                <h3 ><?php echo $bcle['nom']; ?></h3>
                <h4><a href="index.php"> ThioGGou </a><label>/</label><?php echo $bcle['nom']; ?></h4>
                <div class="clearfix"> </div>
            </div>
        </div>
    <!-- Titre -->
    <!-- Carte -->
        <div id="bady">
            <div class="container" style="width:100%;">
                    	
            </div>
        </div>
        <div id="map"></div>
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
                center: {lat: <?php echo $bcle['lat']; ?>, lng: <?php echo $bcle['lg']; ?>},
                mapTypeId: 'roadmap',
                zoom: 17,
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
                    }, function() {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
            } else {
                    handleLocationError(false, infoWindow, map.getCenter());
            }
            <?php 
                require_once 'require/connexion.php';
                try {
                    $sql = 'select * from boutique where login="'.$login.'" and id="'.$id.'"';
                    $bdd = $connect->query($sql); 
                    $bcle = $bdd->fetch();
            ?>
                    var contentString =' <div id="infomap">' +
                                '<div class="title"> <?php echo strtoupper($bcle["nom"]); ?></div>' +
                            '</div>';
                    var myLatLng= {lat: <?php echo $bcle['lat']; ?>, lng: <?php echo $bcle['lg']; ?>};
                    var infowindow = new google.maps.InfoWindow({
                                content: contentString,
                                maxWidth: 350
                    });
                    var marker = new google.maps.Marker({
                                position: myLatLng,
                                animation: google.maps.Animation.DROP,
                                map: map
                    });
                    infowindow.open(map, marker);
            <?php
                    
                }catch (PDOException $e){
                    echo 'Connexion Interrompu '.$e;
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
    
    <style>
       #bady {
            float:left;
            width: 70%;
            background:red;
        }
        #map{
            float:right;
            width: 30%;
            height: 500px;
        }
       @media(max-width:768px){
            #bady {
                width: 100%;
            }
            #map{
                width: 100%;
                height: 400px;
            }
        }
    </style>

</body>
</html>