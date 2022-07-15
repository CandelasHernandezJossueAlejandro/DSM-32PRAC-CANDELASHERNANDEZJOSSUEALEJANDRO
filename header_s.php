<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>



<div class="navbar-fixed">
  <nav class="blue darken-2" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="../index.php" class="brand-logo dominiko">Animal's Home</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger">
        <i class="material-icons white-text">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../index.php">INICIO</a></li>
        <li><a href="./components/cuenta.php">SERVICIOS</a></li>
        <li><a href="#"><i class="material-icons medium right">account_circle</i>Usuario</a></li>
      </ul>
    </div>
  </nav>
</div>

<ul class="sidenav" id="mobile-demo">
<li class="collection-item avatar">
      <img src="images/yuna.jpg" alt="" class="circle">
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
        <li><a href="../index.php"><i class="material-icons">home</i> Inicio </a></li>
        <li><a href="./components/login.php"><i class="material-icons">star</i> Servicios</a></li>
        <li><a href="./components/login.php"><i class="material-icons">logout</i>Log-out</a></li>
</ul>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
</script>