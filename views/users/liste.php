<?php
    include "../../header.php";
    include_once '../../navbar.php';
    require('../../config/database/users_db.php');
    $users=getAllUsers();
?>

<main class="m-5">
<?php
          if(isset($_GET['message'])){
            $message=$_GET['message'];
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert m-5">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?=$message ?>
          </div>
            <?php
          }
?>
<a type="button" href="add.php" class="btn btn-primary position-absolute  end-0 me-5">Ajouter Users</a>
  <h1>
    La liste des utilisateurs
  </h1>
<table class="table mt-4" id="myTable">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Role</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php while($user = $users->fetch(PDO::FETCH_OBJ)):?>

    <tr>  
      <td><?=$user->id?></td>
      <td><?=$user->nomUsers?></td>
      <td><?=$user->prenomUsers?></td>
      <td><?=$user->role?></td>
      <td><?=$user->email?></td>
    </tr>
    <?php endwhile?>

  </tbody>
</table>

</main>

<?php
    include "../../footer.php"
?>