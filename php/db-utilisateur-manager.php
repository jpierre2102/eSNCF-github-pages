<?php
    require_once("connexion.php");


    function mdp($db,$identifiant){
        $reponse = $db->prepare('SELECT id, password FROM Utilisateurs WHERE identifiant= :identifiant');
        $reponse->bindParam(':identifiant',$identifiant);
        $reponse->execute();
      return   $reponse;
    }


    function utilisateurs($db){
        $reponse = $db->query('SELECT identifiant FROM Utilisateurs');
        return $reponse;
    }

    function userExist($db,$identifiant){
      $reponse = $db->prepare('SELECT COUNT(*) FROM Utilisateurs WHERE identifiant= :identifiant');

      $reponse->bindParam(':identifiant',$identifiant);

      $reponse->execute() or die(print_r(  $reponse ->errorInfo(), true));
      return $reponse;
      }

      function addUser($db,$identifiant,$mdp,$email){
        try{
      $stmt =   $db->prepare('INSERT INTO `utilisateurs` (`identifiant`, `password`, `id`,`adresse_mail`) VALUES (:identifiant, :mdp, NULL,:email) ');
     $mdp = sha1($mdp);
      $stmt ->bindParam(':identifiant',$identifiant);
      $stmt ->bindParam(':mdp',$mdp);
      $stmt ->bindParam(':email',$email);
      // $stmt ->bindParam(':nom',$nom);
     //  $stmt ->bindParam(':prenom',$prenom);
      // $stmt ->bindParam(':tel',$tel);
      $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
      $res="fait";
    }
    catch (Exception $e)
{

        die('Erreur : ' . $e->getMessage());
        $res= $e->getMessage();
}
      return $res;
    }

    

    function updateGroup($db,$id,$idGroupe){
      $stmt = $db->prepare('UPDATE `utilisateurs` SET idGroupe = :idGroupe WHERE id = :id');
      $stmt ->bindParam(':id',$id);
      $stmt ->bindParam(':idGroupe',$idGroupe);
      $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
    }

    function getUserList($db,$idGroupe){

    $reponse=$db->prepare('SELECT * FROM utilisateurs
    WHERE idGroupe=:idGroupe');
    $reponse->bindParam(':idGroupe', $idGroupe);
    $reponse->execute();
    return $reponse;
    }

    function getUserInfos($db,$id){

    $reponse=$db->prepare('SELECT identifiant , nom , prenom , tel , email , mdp , status FROM utilisateurs
    WHERE id=:id');
    $reponse->bindParam(':id', $id);
    $reponse->execute();
    return $reponse;
    }


    function delUserSec($db,$id){
      try{
          $stmt = $db->prepare('DELETE FROM `utilisateurs` WHERE `id`=:id');
          $stmt->bindParam(':id',$id);
          $stmt->execute() or die(print_r($stmt->errorInfo(), true));
          $res="fait";
        }
        catch (Exception $e)
        {
          die('Erreur : ' . $e->getMessage());
          $res= $e->getMessage();
        }
        return $res;
        }
      function getStatut($db,$id){
          $stmt = $db->prepare('SELECT status FROM `utilisateurs` WHERE `id`=:id');
          $stmt->bindParam(':id',$id);
          $stmt->execute() or die(print_r($stmt->errorInfo(), true));
          return $stmt;
      }

      function setMail($db , $email , $id){
        $stmt = $db->prepare('UPDATE `utilisateurs` SET email = :email WHERE `id`=:id');
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':id',$id);
        $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
      }

      function setTel($db , $tel , $id){
        $stmt = $db->prepare('UPDATE `utilisateurs` SET tel = :tel WHERE `id`=:id');
        $stmt->bindParam(':tel',$tel);
        $stmt->bindParam(':id',$id);
        $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
      }

      function setMdp($db , $mdp , $id){
        $stmt = $db->prepare('UPDATE `utilisateurs` SET mdp = :mdp WHERE `id`=:id');
        $stmt->bindParam(':mdp',$mdp);
        $stmt->bindParam(':id',$id);
        $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
      }
      function setStatut($db, $statut , $id){
        $stmt = $db->prepare('UPDATE `utilisateurs` SET status = :statut WHERE `id`=:id');
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':statut',$statut);
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
        return $stmt;
      }
      function setPrenom($db , $prenom , $id){
        $stmt = $db->prepare('UPDATE `utilisateurs` SET prenom = :prenom WHERE `id`=:id');
        $stmt->bindParam(':prenom',$prenom);
        $stmt->bindParam(':id',$id);
        $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
      }
      function setNom($db , $nom , $id){
        $stmt = $db->prepare('UPDATE `utilisateurs` SET nom = :nom WHERE `id`=:id');
        $stmt->bindParam(':nom',$nom);
        $stmt->bindParam(':id',$id);
        $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
      }

      function getUser_byMail($db , $email){
            $reponse=$db->prepare('SELECT * FROM utilisateurs
            WHERE email=:email');
            $reponse->bindParam(':email', $email);
            $reponse->execute();
            return $reponse;
      }

      function getUser_byToken($db , $token){
            $reponse=$db->prepare('SELECT * FROM utilisateurs
            WHERE forgetmdp=:token');
            $reponse->bindParam(':token',$token);
            $reponse->execute();
            return $reponse;
      }

      function setForgetMdp($db , $email , $token){
        $stmt = $db->prepare('UPDATE `utilisateurs` SET forgetmdp = :token WHERE `email`=:email');
        $stmt->bindParam(':token',$token);
        $stmt->bindParam(':email',$email);
        $stmt->execute() or die(print_r($stmt ->errorInfo(), true));
      }
?>
