<!-- Author: AlphaMake -- http://alphamake.jimdo.com -- License: All right reserved. -->
<?php
    require_once 'require/connexion.php';
    if ( (isset($_POST['email'])) && (isset($_POST['tel'])) ) {
        if ( (!empty($_POST['email'])) && (!empty($_POST['email'])) ) {
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            try {
                $sql = 'select * from user where email="'.$email.'" and tel="'.$tel.'"';
                $bdd = $connect->query($sql); 
                $count = $bdd->rowCount();                  			                
                if ($count == 1) {
                    $bcle = $bdd->fetch() ;
                    $email1=$bcle['email'];
                    $tel1=$bcle['tel'];
                    $key=sha1(sha1(sha1(sha1(sha1($bcle['email'])))));
                    if ($email == $email1 and $tel == $tel1 and preg_match("#^[a-z0-9._-]+@(hotmail|gmail|yahoo|live|msn).[a-z]{2,4}$#", $email)) {
                        try {
                            $modification = $connect->prepare("
                                UPDATE user set key_r='".$key."' WHERE email='".$email."' and tel='".$tel."'");
                            $modification->execute();
                            $msg_validlogin= 'ok ';
                                // destinataire
                            $to  = $email1;
                            // Sujet
                            $subject = 'Reinitialisation de mot passe ThioGGou';
                            // message
                            $message = "
                                <html>
                                <head>
                                    <meta charset='utf-8'>
                                    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
                                    <title>Reinitialisation de mot passe ThioGGou</title>
                                    <link href='https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css' rel='stylesheet'>
                                    <link href='https://v4-alpha.getbootstrap.com/examples/cover/cover.css' rel='stylesheet'>
                                </head>
                                <body>
                                    <div class='site-wrapper'>
                                    <div class='site-wrapper-inner'>
                                        <div class='cover-container'>
                                        <div class='masthead clearfix'>
                                            <div class='inner'>
                                            <h3 class='masthead-brand' align='center'>ThioGGou</h3>
                                            </div>
                                        </div>
                                        <div class='inner cover'>
                                            <h1 class='cover-heading'>Reinitialisation de mot passe</h1>
                                            <p class='lead'>
                                                Une reinitialisation du mot passe de votre compte ThioGGou a été lancer. <br>
                                                Si vous vous n'etes pas l'auteur de ce action, veuillez ignorez ce message. <br>
                                                Et s'il s'agit de vous, cliquer sur le bouton ci-dessous :
                                            </p>
                                            <p class='lead'>
                                            <a href='http://127.0.0.1:8080/edsa-work/ionic/MonProjet/SiteThioGGou/password.php?sha384-A7FZj7v=".$key."' class='btn btn-lg btn-secondary'>Reinitialiser</a>
                                            </p>
                                        </div>
                                        <div class='mastfoot'>
                                            <div class='inner'>
                                            <p>Source : <a href='https://thiggou.com'>ThioGGou</a>.</p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <script src='https://code.jquery.com/jquery-3.1.1.slim.min.js' integrity='sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n' crossorigin='anonymous'></script>
                                    <script>window.jQuery || document.write('<script src='https://v4-alpha.getbootstrap.com/assets/js/vendor/jquery.min.js'><\/script>')</script>
                                    <script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js' integrity='sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb' crossorigin='anonymous'></script>
                                    <script src='https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js'></script>
                                    <script src='https://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js'></script>
                                </body>
                                </html>
                            ";
                            // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
                            $headers  = 'MIME-Version: 1.0' . "\r\n";
                            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                            // En-têtes additionnels
                            $headers .= 'From: ThioGGou <ThioGGou@thioggou.com>' . "\r\n";
                            // Envoi
                            try{
                                mail($to, $subject, $message, $headers);
                                $msg_valid= 'Verifier votre boite de reception, un email de reinitialisation vous a eté envoyer';
                            }catch (Exception $e){
                                $msg_invalidlogin= 'Erreur inatendu lors de la renitialisation, Reessayer ';
                            }
                        }catch (PDOException $e){
                            $msg_invalidlogin= 'Echec de connection, reessayer. ';
                        }
                        
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
    }
?>
<!--HEADER -->
    <?php
        $title="Recuperation Mot de passe";
        include 'header.php';
    ?>
<!--HEADER -->

<!-- CONTENT -->
    <!-- Titre -->
        <div class="banner-top">
            <div class="container">
                <h3 >Recuperation Mot de passe</h3>
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
                    <form action="forgot.php" method="POST">
                        <?php
                            if (isset($msg_invalidlogin)) {
                                echo "<div class='alert alert-danger center' style='width: 90%; margin: auto;'>
                                <p><b>Erreur : </b>".$msg_invalidlogin."</p></div><br><br>"; 
                                
                            }elseif (isset($msg_valid)) {
                                echo "<div class='alert alert-success center' style='width: 90%; margin: auto;'>
                                <p><b>Important : </b>".$msg_valid."</p></div><br><br>";   
                            }
                            else {
                                echo "<div class='alert alert-info center' style='width: 90%; margin: auto;'>
                                <p>Veuillez fournir l'<b>email </b> et le <b>numero de telephone </b> utiliser lors de votre inscription
                                </p></div><br>";   
                            }
                        ?>
                        <div class="key" style="background-color:#767373" >
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input type="email" name="email" placeholder="Votre email" required >
                            <div class="clearfix"></div>
                        </div>
                        <div class="key" style="background-color:#767373" >
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <input  type="tel" name="tel" placeholder="Votre numero"  required>
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