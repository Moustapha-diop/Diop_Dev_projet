<?php
require('database_connexion.php');

function getUsersByEmail($pwd,$email){
    global $connexion;
    $query = "SELECT * FROM users where email= ? AND motDePass= ?";
    $stmt=$connexion->prepare($query);
    $stmt->execute(
        array($email,$pwd)
    );
    return $stmt;
};

function getAllUsers(){
    global $connexion;
    $query = "SELECT users.id,nomUsers,prenomUsers,email,idRole,role FROM users INNER JOIN profile ON users.idRole=profile.id";
    $stmt=$connexion->prepare($query);
    $stmt->execute();
    return $stmt;
    
}
