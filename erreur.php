<!-- Author: AlphaMake -- http://alphamake.jimdo.com -- License: All right reserved. -->
<!--HEADER -->
    <?php
        session_start();
        session_destroy();
        $title="Oups....";
        include 'header.php';
    ?>
<!--HEADER -->

<!-- CONTENT -->
    <!-- Titre -->
        <div class="banner-top">
            <div class="container">
                <h3 >Oups...</h3>
                <h4><a href="index.php"> ThioGGou </a><label>/</label>page inconnue</h4>
                <div class="clearfix"> </div>
            </div>
        </div>
    <!-- Titre -->
    <!-- ThioGGou -->
    <div class="faq-w3 ">
		<div class="container">
			<div class="panel-group" id="accordion">
				<!-- Panel 1 -->
					<h2 align="center">
                        Oups... <br>
                        une erreur s'est produite, la page demander n'existe pas.
                    </h2>
				<!-- Panel 2 -->
			</div>
		</div>	
	</div>
    <!-- ThioGGou -->
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
</body>
</html>