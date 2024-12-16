<?php 
require_once('../../config/database/users_db.php');

if(isset($_POST['envoyer'])){
    if(!empty($_POST['nom']) && !empty($_POST['prenom'])
     && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['role'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $password=password_hash($_POST['password'] , PASSWORD_DEFAULT);
        $role=$_POST['role'];
        $email=$_POST['email'];
        addUsers($nom,$prenom,$password,$role,$email);
        $message="$prenom $nom a été ajoutée avec succés !";
        header('location: ../../views/users/liste.php?message='.$message);
        
    }else{
        $errorMessage="Veuillez remplir tous les champs";
    }
    
}
?>
