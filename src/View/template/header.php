<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?php echo isset($title) ? $title : 'Mon super site'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="/assets/style/style.css">
    
</head>
<body>
  
<nav  id='nav-perso'class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">LBDC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/articles/all">Articles</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catégorie
          </a>
          <ul class="dropdown-menu  bg-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Hardaware</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Science</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">fun</a></li>
          </ul>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/users/all">à propos</a>
      </li>
      </ul>
    </div>
  </div>
</nav>
<header>
        <h1 id='title'>Le blog de Cano</h1>
</header>


