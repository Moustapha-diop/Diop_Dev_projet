<?php
require ('../../action/auth/loginAction.php');
$login = true;
include_once '../../header.php';
?>

<main class="flex-shrink-0 min-vh-100 d-flex align-items-center">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg-4">
    
        <h1 class="mb-4 text-center">Authentification</h1>
        <?php
          if(isset($errorMessage)){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?= $errorMessage ?>
          </div>
            <?php
          }
        ?>
        <form method="POST">
  <div class="mb-3">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label for="inputPassword" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary" name="send">
    se connecter
  </button>
</form>
    </div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</main> 