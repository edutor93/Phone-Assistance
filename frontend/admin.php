<!doctype html>
<html lang="es">
  <head>
        <meta charset="utf-8">
        <meta content="text/html">
        <title>Admin Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="index.css">
   </head>
   <body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand" href="#">Phone Assistence</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
           <li class="nav-item active">
             <a class="nav-link" href="#">Inici <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Usuaris</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Fitxa personal</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">CAP - Mútues</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">STA - Responsables</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Historial de trucades</a>
           </li>
           <li class="nav-item">
             <a href="exitLogin.php" class="btn btn-primary" role="button">Logout</a>
           </li>
         </ul>
       </div>
     </nav>
     <div class="container text-center">
       <div class="row noselect vertical-center">
         <div class="col">
           <div class="card" style="width: 16rem;">
             <i class="material-icons" style="font-size:120px;">face</i>
             <div class="card-body">
               <h5>Usuaris</h5>
             </div>
           </div>
         </div>
         <div class="col">
           <div class="card" style="width: 16rem;">
             <i class="material-icons" style="font-size:120px;">person_pin</i>
             <div class="card-body">
               <h5>Fitxa personal</h5>
             </div>
           </div>
           <div class="card" style="width: 16rem;">
             <i class="material-icons" style="font-size:120px;">wifi</i>
             <div class="card-body">
               <h5>STA - Responsables</h5>
             </div>
           </div>
         </div>
         <div class="col">
           <div class="card" style="width: 16rem;">
             <i class="material-icons" style="font-size:120px;">local_hospital</i>
             <div class="card-body">
               <h5>CAP - Mútues</h5>
             </div>
           </div>
           <div class="card" style="width: 16rem;">
             <i class="material-icons" style="font-size:120px;">phone</i>
             <div class="card-body">
               <h5>Historial de trucades</h5>
             </div>
           </div>
         </div>
       </div>

     </div>


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="./js/index.js"></script>
   </body>
</html>
        <?php
        //Obliga al usuario a ser un determinado tipo de usuario para poder entrar en la pagina.En caso de no ser posible por no estar logueado o no ser el tipo de usuario permitido, redirige a la pagina de login.
        session_start();
        if(isset($_SESSION['user'])){
           if($_SESSION['user']['usertype'] != 0){
               header("Location: index.php");
           }
        }elseif(!isset($_SESSION['user'])){
             header("Location: index.php");
        }
        ?>
