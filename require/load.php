<?php
session_start();
sleep(1);
require_once("connexion.php");
	if ((isset($_POST['login']))&&(isset($_POST['passAdmin']))) {
		if ((empty($_POST['login']))&&(empty($_POST['passAdmin']))) {
			header('500 Internal Server Error', true, '500');
			die("Certains champs de saisie sont vide, veuillez remplir tous les champs svp !");
		} else {
			$e = $pdo->query("select ip_address from ip where ip_address='".$_SERVER['REMOTE_ADDR']."'");
			if ($re = $e->fetch()){
				header('500 Internal Server Error', true, '500');
				die("l'accès pour votre machine a été bloquer suite a des tentatives de connexion frauduleuses. Contactez l'administrateur !");
			}
			$e = $pdo->query("select login from admin where login='admin'");
				if ($re = $e->fetch()) 
				{
					$_POST['passAdmin'] = sha1($_POST['passAdmin']);
					$e = $pdo->query("select enable, level, login, ip_address, email from users where login='".$_POST['login']."' and password='".$_POST['passAdmin']."'");
					if ($re = $e->fetch()) 
					{
						if ($re[0]=='false') {
							header('500 Internal Server Error', true, '500');
							die("Votre Compte est BLOQUER, Veuillez contactez l'administrateur pour le DEBLOQUER !");
						}elseif ($re[1]=='low') {		
							$_SESSION['autorisation'] = $re[1];
							$_SESSION['user'] = $re[2];
							$_SESSION['ip'] = $re[3];
							$_SESSION['email'] = $re[4];
							$data = fopen('init/data.txt', 'r+');
					        $contentData = fgets($data);
							$_SESSION['db'] = $contentData;
							fclose($data);
							die("caissier/");
						}elseif ($re[1]=='medium') {		
							$_SESSION['autorisation'] = $re[1];
							$_SESSION['user'] = $re[2];
							$_SESSION['ip'] = $re[3];
							$_SESSION['email'] = $re[4];
							$data = fopen('init/data.txt', 'r+');
					        $contentData = fgets($data);
							$_SESSION['db'] = $contentData;
							fclose($data);
							die("comptable/");
						}elseif ($re[1]=='high') {		
							$_SESSION['autorisation'] = $re[1];
							$_SESSION['user'] = $re[2];
							$_SESSION['ip'] = $re[3];
							$_SESSION['email'] = $re[4];
							$data = fopen('init/data.txt', 'r+');
					        $contentData = fgets($data);
							$_SESSION['db'] = $contentData;
							fclose($data);
							die("gestion/");
						}else {
							header('500 Internal Server Error', true, '500');
							die("Erreur de traitement !");
						}
					}else {
						$e = $pdo->query("select login, ip_address, email from admin where login='".$_POST['login']."' and password1='".$_POST['passAdmin']."'");
						if ($re = $e->fetch()) 
						{
							$_SESSION['user'] = $re[0];
							$_SESSION['ip'] = $re[1];
							$_SESSION['email'] = $re[2];
							$data = fopen('init/data.txt', 'r+');
					        $contentData = fgets($data);
							$_SESSION['db'] = $contentData;
							fclose($data);
							die("admin/");
						}else{
							if ($_GET['load']==1) {
								header('500 Internal Server Error', true, '500');
								die("Information eronnée! \n Deux (2) essai restant.");
							}elseif ($_GET['load']==2) {
								header('500 Internal Server Error', true, '500');
								echo "Information eronnée! \n Un (1) essai restant.";
							}else {
								header('500 Internal Server Error', true, '500');
								$pdo->exec("INSERT INTO ip(name_user, ip_address, date_add) VALUES ('".$_SERVER['REMOTE_ADDR']."','".$_SERVER['REMOTE_ADDR']."', NOW() )");
								echo "Votre accès a cette application est desormais BLOQUER. Veuillez contactez l'administrateur!";
							}
						}
					}
				}else {
					header('500 Internal Server Error', true, '500');
					header('Location: ../index.php');
				}





		}
	} else {
		header('500 Internal Server Error', true, '500');
		header('Location: ../connexion.php');
	}
	

	
	
		
?>