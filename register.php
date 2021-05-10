<!-- Author: AlphaMake -- http://alphamake.jimdo.com -- License: All right reserved. -->
<?php 
    session_start();
    require_once 'require/connexion.php';
    if ( (isset($_POST['name'])) && (isset($_POST['prenom'])) &&(isset($_POST['pseudo'])) && 
         (isset($_POST['email'])) && (isset($_POST['tel'])) && (isset($_POST['password'])) && 
         (isset($_POST['password1'])) ) {
        if ( (!empty($_POST['name'])) && (!empty($_POST['prenom'])) &&(!empty($_POST['pseudo'])) && 
             (!empty($_POST['email'])) && (!empty($_POST['tel'])) && (!empty($_POST['password'])) && 
             (!empty($_POST['password1'])) ) {
                if ($_POST['password']==$_POST['password1']){
                    $name = htmlspecialchars($_POST['name']);
                    $prenom = htmlspecialchars($_POST['prenom']);
                    $pseudo = htmlspecialchars($_POST['pseudo']);
                    $email = htmlspecialchars($_POST['email']);
                    $tel = htmlspecialchars($_POST['tel']);
                    $password = sha1(htmlspecialchars($_POST['password']));
                    $search = '0';
                    $date_add = date('Y-m-d');
                    $pays = 'Guinee';
                    try {
                        $enregistrement = $connect->prepare("INSERT INTO user
                        (nom,prenom,login,password,email,tel,nbre_search,date_add) VALUES 
                        (:nom,:prenom,:pseudo,:password,:email,:tel,:search,:date_add)");
                        $enregistrement->bindParam (':nom' , $name , PDO::PARAM_STR );
                        $enregistrement->bindParam (':prenom' , $prenom , PDO::PARAM_STR );    
                        $enregistrement->bindParam (':pseudo' , $pseudo , PDO::PARAM_STR );
                        $enregistrement->bindParam (':password' , $password , PDO::PARAM_STR );
                        $enregistrement->bindParam (':email' , $email , PDO::PARAM_STR );
                        $enregistrement->bindParam (':tel' , $tel , PDO::PARAM_STR );
                        $enregistrement->bindParam (':search' , $search , PDO::PARAM_STR );
                        $enregistrement->bindParam (':date_add' , $date_add , PDO::PARAM_STR );
                        $enregistrement->execute();
                        $msg_validlogin= 'ok ';
                        header("Location: login.php") ;
			            echo "<meta http-equiv='refresh' content='0; url = login.php' />";
                    }catch (PDOException $e){
                        $msg_invalidlogin= 'Le numero de telephone ou l\'identifiant ou l\'adresse email saisie est déjà utiliser. ';
                    }
                }else{
                    $msg_invalidlogin= "Les deux mots de passes doivent etre identique !";
                }
                
        }else{
            $msg_invalidlogin= 'Veuillez remplir tous les champs !';
        }
    }
?>
<!--HEADER -->
    <?php
        $title="Inscription";
        include 'header.php';
    ?>
<!--HEADER -->

<!-- CONTENT -->
    <!-- Titre -->
        <div class="banner-top">
            <div class="container">
                <h3 >S'inscrire</h3>
                <h4><a href="index.php"> ThioGGou </a><label>/</label>Inscription</h4>
                <div class="clearfix"> </div>
            </div>
        </div>
    <!-- Titre -->
    <!-- form -->
        <div class="login">
            <div class="main-agileits">
                <div class="form-w3agile form1">
                    <h3>Inscription</h3>
                    <form action="register.php" method="post">
                        <?php
                            if (isset($msg_invalidlogin)) {
                                echo "<div class='alert alert-danger center' style='width: 90%; margin: auto;'>
                                <p><b>Erreur : </b>".$msg_invalidlogin."</p></div><br><br>"; 
                                
                            }
                        ?>
                        <div class="key" style="background-color:#767373">
                            <i class="fa fa-user " aria-hidden="true"></i>
                            <input  type="text" value="" placeholder="Nom" name="name" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="key" style="background-color:#767373">
                            <i class="fa fa-user " aria-hidden="true"></i>
                            <input  type="text" value="" placeholder="Prenom" name="prenom" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="key" style="background-color:#767373">
                            <i class="fa fa-user " aria-hidden="true"></i>
                            <input  type="text" value="" placeholder="Identifiant" name="pseudo" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="key" style="background-color:#767373">
                            <i class="fa fa-envelope " aria-hidden="true"></i>
                            <input  type="email" value="" placeholder="Email" name="email" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="key" style="background-color:#767373">
                            <i class="fa fa-phone " aria-hidden="true"></i>
                            <input  type="tel" value="" placeholder="Telephone" name="tel" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="key" style="background-color:#767373">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input  type="password" placeholder="Mot de passe" name="password" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="key" style="background-color:#767373">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input  type="password" placeholder="Confirmer le mot de passe" name="password1"  required="">
                            <div class="clearfix"></div>
                        </div>
                        <input type="submit" value="S'inscrire">
                    </form>
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