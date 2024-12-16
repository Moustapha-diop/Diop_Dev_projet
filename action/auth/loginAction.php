<?php

require_once('../../config/database/users_db.php');
//code pour la connexion a la base de donnes et l'authentification
if(isset($_POST['send'])) {
    if(!empty($_POST['email']) && !empty($_POST['password'])){
      $email=$_POST['email'];
        $password=$_POST['password'];
        $result=getUsersByEmail($email);
        
        if($result->rowCount() >0){
            $userInfos = $result->fetch(PDO::FETCH_OBJ);

            if(password_verify( $password,$userInfos->motDePass)){
            session_start();
        $_SESSION['isLogin']=true;
        $_SESSION['role']=$userInfos->idRole;
        $_SESSION['nom']=$userInfos->nomUsers;
        $_SESSION['prenom']=$userInfos->prenomUsers;
        header('location: /index.php');
            }else $errorMessage='mot de passe incorrect';
        }else $errorMessage='Email incorect';

        
        
    }else{
        $errorMessage='Veuiller remplir le formulaire';
    }
}



?>