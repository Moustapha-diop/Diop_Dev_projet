<?php
require('database_connexion.php');

function getUsersByEmail($email){
    global $connexion;
    $query = "SELECT * FROM users where email= ?" ;
    $stmt=$connexion->prepare($query);
    $stmt->execute(
        array($email)
    );
    return $stmt;
}

function getAllUsers(){
    global $connexion;
    $query = "SELECT users.id,nomUsers,prenomUsers,email,idRole,role FROM users INNER JOIN profile ON users.idRole=profile.id";
    $stmt=$connexion->prepare($query);
    $stmt->execute();
    return $stmt;
    
}

function getAllProlfiles(){
    global $connexion;
    $query = "SELECT * FROM profile";
    $stmt=$connexion->prepare($query);
    $stmt->execute();
    return $stmt;
}

function addUsers($nom,$prenom,$password,$role,$email){
    global $connexion;

    $query= "INSERT INTO users (nomUsers,prenomUsers,motDepass,idRole,email) VALUES (?,?,?,?,?)";
    $stmt=$connexion->prepare($query);
    $stmt->execute(
       array($nom,$prenom,$password,$role,$email)
    );
    //pour eviter les injections sql
    $stmt->closeCursor();
}
