<?php
    include "../../header.php";
    include_once '../../navbar.php';
    require("../../action/users/createUsersAction.php");
    $profiles=getAllProlfiles();
?>

<main>
<h1 class="mt-4">Ajouter un utilisateur</h1>

<form class="row g-3 m-5" method="POST">
<?php
          if(isset($errorMessage)){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert m-5">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?= $errorMessage ?>
          </div>
            <?php
          }
?>
  <div class="col-md-6">
    <input type="text" class="form-control" placeholder="Nom" name="nom">
  </div>
  <div class="col-md-6">
    <input type="text" class="form-control" placeholder="Prenom" name="prenom">
  </div>
  <div class="col-md-6">
  <select  class="form-select" name="role">
      <option selected>Selectionner Role</option>
      <?php while($profile = $profiles->fetch(PDO::FETCH_OBJ)):?>
      <option value="<?=$profile->id?>"><?=$profile->role?></option>
      <?php endwhile?>
    </select>
  </div>
  <div class="col-md-6">
    <input type="password" class="form-control" placeholder="Mot de passe" name="password">
  </div>
  <div class="col-12">  
    <input type="email" class="form-control"  placeholder="Email" name="email">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="envoyer">Ajouter</button>
  </div>
</form>
</main>

<?php
    include "../../footer.php"
?>