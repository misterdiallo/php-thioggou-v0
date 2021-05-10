<!-- Author: AlphaMake -- http://alphamake.jimdo.com -- License: All right reserved. -->
<?php
    require_once 'require/connexion.php';
    if ( (isset($_GET['sha384-A7FZj7v']))) {
        if ( (!empty($_GET['sha384-A7FZj7v'])) ) {
            $key = $_GET['sha384-A7FZj7v'];
            try {
                $sql = 'select * from user where key_r="'.$key.'"';
                $bdd = $connect->query($sql); 
                $count = $bdd->rowCount();                  			                
                if ($count == 1) {
                    $bcle = $bdd->fetch() ;
                    $key1=$bcle['key_r'];
                    $email=$bcle['email'];
                    $key=sha1(sha1(sha1(sha1(sha1($bcle['email'])))));
                    if ($key == $key1) {
                        
                    }
                    else {
                        $msg_invalidlogin="les informations sont incorrectes";      
                    }
                }else {
                    $msg_invalidlogin= "Aucun utilisateur avec ces informations";      
                }
            }catch (PDOException $e){
                $msg_invalidlogin= 'Connexion Interrompu ';
            }
        }else{
            $msg_invalidlogin= 'Veuillez remplir tous les champs !';
        }
    }elseif ( (isset($_POST['password'])) && (isset($_POST['password1'])) && (isset($_GET['email'])) ) {
        if ( (!empty($_POST['password'])) && (!empty($_POST['password1'])) ) {
            if($_POST['password']==$_POST['password1']){
                $password=sha1($_POST['password']);
                $email=$_GET['email'];
                try {
                        $modification = $connect->prepare("
                            UPDATE user set password='".$password."' WHERE email='".$email."'");
                        $modification->execute();
                        $msg_valid = 'Votre mot de passe a été changer avec succès.  <br />
                             veuillez vous connecter dans 
                            <a href="login.php"> la page connexion </a> ';
                            
                }catch (PDOException $e){
                        $msg_invalidlogin= 'Echec de connection, reessayer. ';
                }
            }else{
                $msg_invalidlogin= 'Echec de chargement du mot de passe, reessayer. ';
            }
        }else{
            $msg_invalidlogin= 'Les deux mot de passes doivent etre identique. ';
        }
    }else{
        header("Location: index.php") ;
		echo "<meta http-equiv='refresh' content='0; url = index.php' />";
    }
?>
<!--HEADER -->
    <?php
        $title="Reinitialisation du Mot de passe";
        include 'header.php';
    ?>
<!--HEADER -->

<!-- CONTENT -->
    <!-- Titre -->
        <div class="banner-top">
            <div class="container">
                <h3 >Reinitialisation votre Mot de passe</h3>
                <h4><a href="index.php"> ThioGGou </a><label>/</label>Mot de passe</h4>
                <div class="clearfix"> </div>
            </div>
        </div>
    <!-- Titre -->
    <!-- form -->
        <div class="login">
            <div class="main-agileits">
                <div class="form-w3agile">
                    <h3>Reinitialiser le mot de passe</h3>
                    <form action="password.php?<?php if (isset($email) && !empty($email)){echo 'email='.$email;} ?>" method="POST">
                        <?php
                            if (isset($msg_invalidlogin)) {
                                echo "<div class='alert alert-danger center' style='width: 90%; margin: auto;'>
                                <p><b>Erreur : </b>".$msg_invalidlogin."</p></div><br><br>"; 
                                
                            }else {
                                if (isset($msg_valid)) {
                                    echo "<div class='alert alert-success center' style='width: 90%; margin: auto;'>
                                    <p><b>Succès : </b>".$msg_valid."</p></div><br><br>";   
                                }   
                            }
                        ?>
                        <div class="key" style="background-color:#767373" >
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input type="password" name="password" placeholder="Entre le nouveau mot de passe" required >
                            <div class="clearfix"></div>
                        </div>
                        <div class="key" style="background-color:#767373" >
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <input type="password" name="password1" placeholder="Confirmer le mot de passe" required >
                            <div class="clearfix"></div>
                        </div>
                        <input type="submit" value="Reinitialiser">
                    </form>
                </div>
                <div class="forg">
                    <a href="login.php" class="forg-left">Se connecter ?</a>
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