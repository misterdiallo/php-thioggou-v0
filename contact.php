<!-- Author: AlphaMake -- http://alphamake.jimdo.com -- License: All right reserved. -->
<!--HEADER -->
    <?php
        session_start();
        $title="Contact";
        include 'header.php';
    ?>
<!--HEADER -->

<!-- CONTENT -->
    <!-- Titre -->
        <div class="banner-top">
            <div class="container">
                <h3 >Contact</h3>
                <h4><a href="index.php"> ThioGGou </a><label>/</label>Contact</h4>
                <div class="clearfix"> </div>
            </div>
        </div>
    <!-- Titre -->
    <!-- Contact -->
        <style>
            #map {
                height: 100%;
            }
        </style>
        <div id="contact">
            <div class=" contact-w3"> 	
                <div class="col-md-5 contact-right"> 	
                    <img src="images/cac.jpg" class="img-responsive" alt=""> 
                    <div id="map" style="height:350px"></div>
                </div> 
                <div class="col-md-7 contact-left"> 
                    <h4> Contact Information </h4> 
                    <p> Pour toutes informations, questions, demandes, ou suggestions veuillez nous contacter a travers ce formulaire. 
                    Vous pouvez aussi nous retrouver a notre adresse pendant les jours ouvrables ou nous appeller sur nos contacts. 
                    N'hesitez surtout pas, nous sommes toujours prêt à vous rendre service... <br><br> </p> 
                    <ul class="contact-list"> 
                        <li> <i class="fa fa-map-marker" aria-hidden="true">  </i> Conakry, Lambanyi Commune de Ratoma. </li> 
                        <li> <i class="fa fa-envelope" aria-hidden="true">  </i>  <a href="mailto:example@mail.com"> thioggou@gmail.com </a>  </li> 
                        <li>   <i class="fa fa-phone" aria-hidden="true">  </i> +224 622 304 290 </li> 
                        <br>
                        <br>
                        <ul> 
                            <li>  <a href="http://facebook.com/thioggou" target="_blank" class=" face">  <i class="fa fa-facebook" aria-hidden="true">  </i>  </a>  </li> 
                            <li>  <a href="http://twitter.com/thioggou" target="_blank" class=" twi">  <i class="fa fa-twitter" aria-hidden="true">  </i>  </a>  </li> 
                            <li>  <a href="http://plus.google.com/thioggou" target="_blank" class=" pin">  <i class="fa fa-google" aria-hidden=" true">  </i>  </a>  </li> 
                            <li>  <a href="http://instagram.com/thioggou" target="_blank" class=" dri">  <i class="fa fa-instagram" aria-hidden="true">  </i>  </a>  
                            </li> 
                        </ul> 
                    </ul> 
                    <div id="container"> 
                        <!--Horizontal Tab--> 
                        <div id="parentHorizontalTab" style="display: block; width: 100%; margin: 0px;"> 
                            <ul class="resp-tabs-list hor_1"> 
                                <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">  <i class="fa fa-envelope" aria-hidden="true">  </i>  </li> 
                                <li class="resp-tab-item" aria-controls="tab_item-1" role="tab">   <i class="fa fa-map-marker" aria-hidden="true">  </i>     </li> 
                                <li class="resp-tab-item" aria-controls="tab_item-2" role="tab">   <i class="fa fa-phone" aria-hidden="true">  </i>  </li> 
                            </ul> 
                            <div class="resp-tabs-container hor_1"> 
                                <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>      </h2><div class="resp-tab-content resp-tab-content-active" style="display:block" aria-labelledby="tab_item-0"> 
                                    <form action="#" method="post"> 
                                        <input type="text" value="Nom " name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nom';}" required=""> 
                                        <input type="email" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required=""> 
                                        <textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required=""> Message... </textarea> 
                                        <input type="submit" value="Envoyer"> 
                                    </form> 
                                </div> 
                                <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>          </h2><div class="resp-tab-content" aria-labelledby="tab_item-1"> 
                                    <div class="map-grid"> 
                                    <h5> Nos Emplacements </h5> 
                                        <ul> 
                                            <li>  <i class="fa fa-arrow-right" aria-hidden="true">  </i> Lambanyi, Commune de Ratoma </li> 
                                            <li>  <i class="fa fa-arrow-right" aria-hidden="true">  </i> Cameroun, Commune de Dixinn </li> 
                                            
                                        </ul> 
                                    </div> 
                                </div> 
                                <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>       </h2><div class="resp-tab-content" aria-labelledby="tab_item-2"> 
                                    <div class="map-grid"> 
                                        <h5> Nos Contacts </h5> 
                                        <ul> 
                                            <li> Mobile 1 : +224 622 304 290 </li> 
                                            <li> Mobile 2 : +224 662 876 955 </li> 
                                            <li> Mobile 3 : +224 625 227 242 </li> 
                                            
                                        </ul> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                    
                    <!--Plug-in Initialisation--> 
                    <script type="text/javascript"> 
                    $(document).ready(function() {
                        //Horizontal Tab
                        $('#parentHorizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion
                            width: 'auto', //auto or any width like 600px
                            fit: true, // 100% fit in a container
                            tabidentify: 'hor_1', // The tab groups identifier
                            activate: function(event) { // Callback function if tab is switched
                                var $tab = $(this);
                                var $info = $('#nested-tabInfo');
                                var $name = $('span', $info);
                                $name.text($tab.text());
                                $info.show();
                            }
                        });

                        // Child Tab
                        $('#ChildVerticalTab_1').easyResponsiveTabs({
                            type: 'vertical',
                            width: 'auto',
                            fit: true,
                            tabidentify: 'ver_1', // The tab groups identifier
                            activetab_bg: '#fff', // background color for active tabs in this group
                            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
                            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
                            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
                        });

                        //Vertical Tab
                        $('#parentVerticalTab').easyResponsiveTabs({
                            type: 'vertical', //Types: default, vertical, accordion
                            width: 'auto', //auto or any width like 600px
                            fit: true, // 100% fit in a container
                            closed: 'accordion', // Start closed if in accordion view
                            tabidentify: 'hor_1', // The tab groups identifier
                            activate: function(event) { // Callback function if tab is switched
                                var $tab = $(this);
                                var $info = $('#nested-tabInfo2');
                                var $name = $('span', $info);
                                $name.text($tab.text());
                                $info.show();
                            }
                        });
                    });
                </script> 
                    
                </div> 
                
                <div class="clearfix">  </div> 
            </div>
        </div>
    <!-- Contact -->
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
                center: {lat: 9.5318811, lng: -13.6907422},
                mapTypeId: 'hybrid',
                zoom: 19,
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
            var contentString = '<h4>Siège de ThioGGou</h4>';
            var infowindow = new google.maps.InfoWindow({
            content: contentString
            });
            var myLatLng = {lat: 9.5318811, lng: -13.6907422};
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map
            });
            map.addListener('mouseover', function() {
                infowindow.open(map, marker);
            });          
        }
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: Erreur de Chargement.' :
                'Error: Veuillez actuliser la page.');
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbA4OY0qrzHSRb5WpBsNVKNpKTyeeaxAw&callback=initMap"></script>
    <script src="js/easyResponsiveTabs.js" type="text/javascript">  </script> 
        <script type="text/javascript"> 
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
                });
            });				
        </script> 
</body>
</html>