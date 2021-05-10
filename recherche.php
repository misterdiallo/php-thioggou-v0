<!-- Author: AlphaMake -- http://alphamake.jimdo.com -- License: All right reserved. -->
<!--HEADER -->
    <?php
        session_start();
        $title="Recherche";
        include 'header.php';
    ?>
<!--HEADER -->

<!-- CONTENT -->
    <!-- Titre -->
        <div class="banner-top">
            <div class="container">
                <h3 >Recherche</h3>
                <h4><a href="index.php"> ThioGGou </a><label>/</label>Recherche</h4>
                <div class="clearfix"> </div>
            </div>
        </div>
    <!-- Titre -->
    <!-- ThioGGou -->
    <div class="faq-w3 ">
		<div class="container">
			<div class="panel-group" id="accordion">
            <div class="search-form search-form-result">
                <form action="resultat.php" method="post">
                    <h4>Que cherchez-vous ?</h4>
                    <input type="text" class='serce' required placeholder="Que cherchez-vous ..?" name="recherchesimple"
                    value="">
                    <!-- Panel 1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title" data-toggle="collapse" data-target="#collapseOne">
                                    <span>1.</span> Selectionner la zone de recherche 
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <p style="padding-left:80px">
                                    <label class="checkbox-inline"><input type="checkbox" value="near">Au tour de moi</label>
                                    <label class="checkbox-inline"><input type="checkbox" value="madina">A Madina</label>
                                    <label class="checkbox-inline"><input type="checkbox" value="enville">En Ville</label>
                                    <label class="checkbox-inline"><input type="checkbox" value="ville">Dans la capitale</label>
                                    <label class="checkbox-inline"><input type="checkbox" value="pays">Dans tout le pays</label> 
                                </p>
                            </div>
                        </div>
                    <!-- Panel 2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title" data-toggle="collapse" data-target="#collapseTwo">
                                    <span>2.</span> Selectionner la categorie
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p style="padding-left:80px">
                                        <label class="checkbox-inline"><input type="checkbox" value="all">Tout</label>
                                        <label class="checkbox-inline"><input type="checkbox" value="materiel">appareil / Materiel</label>
                                        <label class="checkbox-inline"><input type="checkbox" value="nourriture">Nourriture</label>
                                        <label class="checkbox-inline"><input type="checkbox" value="Engin">Engin / Automobile</label>
                                        <label class="checkbox-inline"><input type="checkbox" value="service">Service / Non Materiel</label> 
                                    </p>
                                </div>
                            </div>
                        </div>
                    <!-- Panel 3 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThree">
                                    <span>3.</span> Selectionner un tri pour le resultat
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                </div>
                            </div>
                        </div>
                    <!-- Panel 3 -->
                    <input type="submit" class='sercev' value="Afficher le resultat" > <br>
                </form>             
            </div>	
        <style>
            .search-form-result{
                padding-left:10%;
                z-index:99999;
                width:100%;
            }
            .search-form-result input[type='text']{
                padding: 10px;
                outline: none;
                font-size: 1.2em;
                color: #912222;
                width: 100%;
                text-align:center;
                border: 1px solid #912222;
                background: rgba(68, 68, 68, 0.75);
            }
            .search-form-result input[type='submit']{
                padding: 10px;
                outline: none;
                font-size: 1.2em;
                color: #fff;
                width: 100%;
                text-align:center;
                border: 1px solid #912222;
                background: #912222;
            }
        </style>
                    
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