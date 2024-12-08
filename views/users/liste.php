<?php
    include "../../header.php";
    include_once '../../navbar.php';
    require('../../config/database/users_db.php');
    $users=getAllUsers();
?>

<main class="m-5">
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