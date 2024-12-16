<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">MonApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link <?php echo !empty($index) ? 'active' : ''?> " aria-current="page" href="/index.php">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo !empty($auteur) ? 'active' : ''?>" href="/views/author/liste.php">Autheur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/views/books/liste.php' ? 'active' : ''?>" href="/views/books/liste.php">Livres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/views/users/liste.php' ? 'active' : ''?>" href="/views/users/liste.php"><?php
          if($_SESSION['role']==1){
            echo "utilisateurs";
          } ?></a>
        </li>
        
      </ul>
      <a href="/action/auth/logoutAction.php" class="btn btn-danger">Se deconnecter</a>
    </div>
  </div>
</nav>