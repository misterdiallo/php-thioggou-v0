<!-- Author: AlphaMake -- http://alphamake.jimdo.com -- License: All right reserved. -->
<?php 
    require_once 'require/connexion.php';
    if ( (isset($_POST['pseudo'])) && (isset($_POST['password'])) ) {
        if ( (!empty($_POST['pseudo'])) && (!empty($_POST['password'])) ) {
            $pseudo = $_POST['pseudo'];
            $mdp = sha1($_POST['password']);
            try {
                $sql = 'select * from user where login="'.$pseudo.'" and password="'.$mdp.'"';
                $bdd = $connect->query($sql); 
                $count = $bdd->rowCount();                  			                
                if ($count == 1) {
                    session_start();
                    $bcle = $bdd->fetch() ;
                    $pseudo1=$bcle['login'];
                    $mdp1=$bcle['password'];
                    $search=$bcle['nbre_search'];
                    if ($pseudo == $pseudo1 and $mdp == $mdp1) {
                        $_SESSION['login'] = $pseudo;
                        $_SESSION['search'] = $search;
                        $_SESSION['nom'] = $bcle['nom'];
                        $_SESSION['prenom'] = $bcle['prenom'];
                        $token_rand = sha1(uniqid(rand()));
                        $_SESSION['token'] = $token_rand;
                        $msg_validUser ="ok";
                        header("Location: index.php?".sha1($_SESSION['token'])."=".$_SESSION['token']."") ;
                        echo "<meta http-equiv='refresh' content='0; url = index.php?".sha1($_SESSION['token'])."=".$_SESSION['token']."' />";
                    }
                    else {
                        $msg_invalidlogin="Identifiant incorrect";      
                    }
                }else {
                    $msg_invalidlogin= "Aucun utilisateur avec ces identifiants";      
                }
            }catch (PDOException $e){
                $msg_invalidlogin= 'Connexion Interrompu ';
            }
        }else{
            $msg_invalidlogin= 'Veuillez remplir tous les champs !';
        }
    }
?>
<!--HEADER -->
    <?php
        $title="Connexion";
        include 'header.php';
    ?>
<!--HEADER -->

<!-- CONTENT -->
    <!-- Titre -->
        <div class="banner-top">
            <div class="container">
                <h3 >Se Connecter</h3>
                <h4><a href="index.php"> ThioGGou </a><label>/</label>Connexion</h4>
                <div class="clearfix"> </div>
            </div>
        </div>
    <!-- Titre -->
    <!-- form -->
        <div class="login">
            <div class="main-agileits">
                <div class="form-w3agile">
                    <h3>Connexion</h3>
                    <form action="login.php" method="POST">
                        <?php
                            if (isset($msg_invalidlogin)) {
                                echo "<div class='alert alert-danger center' style='width: 90%; margin: auto;'>
                                <p><b>Erreur : </b>".$msg_invalidlogin."</p></div><br><br>"; 
                                
                            }
                        ?>
                        <div class="key" style="background-color:#767373" >
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input type="text" name="pseudo" placeholder="Identifiant ou email" required >
                            <div class="clearfix"></div>
                        </div>
                        <div class="key" style="background-color:#767373" >
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input  type="password" name="password" placeholder="Mot de passe"  required>
                            <div class="clearfix"></div>
                        </div>
                        <input type="submit" value="Se Connecter">
                    </form>
                </div>
                <div class="forg">
                    <a href="forgot.php" class="forg-left">Mot de passe oublié ?</a>
                    <a href="register.php" class="forg-right">S'inscrire</a>
                <div class="clearfix"></div>
                </div>
            </div>
        </div>
    <!-- form -->
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