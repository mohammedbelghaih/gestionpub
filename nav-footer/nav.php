<?php
  session_start();
  if(isset($_SESSION["id"])){
    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light navy" style="background-color: #2b485fe3 !important;">
    <a class="navbar-brand" href="home.php">Blogger</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profil.php">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add.php">Ajouter</a>
        </li>
      </ul>
    </div>
    <a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button></a>
  </nav>';
  }else{
    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light navy" style="background-color: #2b485fe3 !important;">
    <a class="navbar-brand" href="home.php">Blogger</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" href="home.php">Home</a>
        </li>
    </ul>
    </div>
    <div style="margin-right:2%;">
    <a href="inscription.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Inscriver Vous!</button></a>
    <a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Se Connecter</button></a>
    </div>
</nav>';
  }
?>

