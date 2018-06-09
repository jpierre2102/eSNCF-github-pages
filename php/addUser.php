<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

    if($_SERVER['REQUEST_METHOD'] === 'POST') { // L'utilisateur vient de valider le formulaire de connexion
      if(isset($_POST['btnRegister'])){
    if(!empty($_POST['regUserName']) && !empty($_POST['regMdp'])){
            include("db-utilisateur-manager.php");


            $reponse = userExist($db,$_POST['regUserName']);
              $donne = $reponse->fetch();
              if($donne[0]=="0"){

                $resultat = addUser($db,$_POST['regUserName'],$_POST['regMdp'],$_POST['email']);
                echo ($resultat);

            } else { // utilisateur trouvé dans la base de données
              //ajouter vérif email existe déjà
              $erreur = $_POST['regUserName']." existe déjà";
            echo($erreur);
            }
        } else { // L'utilisateur n'a pas rempli tous les champs du formulaire
            $erreur = "Veuillez remplir tous les champs";
            echo($erreur);//include("Vue/connexion_erreur.php");
        }
      }
      header('Location:../index.php');
      die;
    }
?>
<p> done</p>