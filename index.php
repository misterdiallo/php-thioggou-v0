<!-- Author: AlphaMake -- http://alphamake.jimdo.com -- License: All right reserved. -->
<!--HEADER -->
    <?php
        session_start();
        if (isset($_SESSION ['login']) && isset($_SESSION ['search']) && isset($_SESSION ['token']) && isset($_GET[sha1($_SESSION['token'])]) ) {
            if ($_SESSION ['token']== $_GET[sha1($_SESSION['token'])] ) {
                ?>  
                    <script src="js/jquery-1.11.1.min.js"></script>
                    <script>
                        $( document ).ready(function(e) {
                            event.preventDefault();
                            var href = $(e.target).attr('href');
                                $('modal-body').empty();
                                $('#modal-success').modal('show');
                                return false;
                        });
                    </script>
                    <style>
                        .modal-content{
                            width: 50%;   
                            float: right;  
                        }
                        @media(max-width:720px){
                            .modal-content{
                                width: 100%;     
                            } 
                        }
                        .modal-header, .modal-success .modal-footer {
                            background-color: #008d4c;
                            color: #fff;
                            text-shadow: 1px 1px 10px #000;
                        }
                        .modal-title{
                            font-size: 13px;

                        }
                    </style>
                    <div class="modal modal-success fade" id="modal-success" data-rel="popup" data-transition="slideup">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" align="center">
                                        <i>Content de vous revoir sur ThioGGou</i><br>
                                        <?php echo ucwords($_SESSION['prenom'])." ".strtoupper($_SESSION['nom']); ?><br />
                                        Vous etes desormais connecter. 
                                    </h4>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <?php
            }
        }
        $title="Accueil";
        include 'header.php';
    ?>
<!--HEADER -->

<!-- CONTENT -->
    <!-- Banniere -->
        <div data-vide-bg="video/video" style="background-color: #938f8f;">
            <div class="container">
                <div class="banner-info">
                    <h3>Dite moi ce que vous cherchez, je vous dirai où trouver</h3>	
                    <div class="search-form">
                        <form action="resultat.php" method="post">
                            <input type="text" class='serce' required placeholder="Que cherchez-vous ..?" name="recherchesimple">
                            <input type="submit" class='sercev' value="" >
                        </form>
                        <a href="recherche.php" align="right" style="color:#912222;font-size:15px;margin-top:10px">
                            Pour plus de coherence, nous conseillons la recherche avancée <i class="fa fa-search"  aria-hidden="true"></i>
                        </a>
                    </div>		
                </div>	
            </div>
        </div>
    <!-- Banniere 
	<script src="js/jquery.vide.min.js"></script>
	<!-- Aux alentours -->
        <div class="content-top ">
            <div class="container ">
                <div class="spec ">
                    <h3>Produits aux alentours</h3>
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
                                <!--Le produit-->
                                    <div class="col-md-3 m-wthree">
                                        <div class="col-m">								
                                            <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                                <img src="images/of.png" class="img-responsive" alt="">
                                                <div class="offer"><p><span> A 20m </span></p></div>
                                            </a>
                                            <div class="mid-1">
                                                <div class="women">
                                                    <h6><a href="single.php">Haricots </a> (1 kg) </h6>							
                                                </div>
                                                <div class="mid-2">
                                                    <p ><em class="item_price">5.000 GNF</em></p>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="add">
                                                <a href="produit.php?info"><button class="btn btn-danger my-cart-btn my-cart-b">Afficher </button></a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                <!--Le produit-->
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Aux alentours -->
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