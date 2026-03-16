<?php
include "connexion.php";
session_start();
if(isset($_POST['Envoyer'])){
    $login = $_POST['login'];
    $pass = $_POST['mdp'];
    $sql = "SELECT* FROM gestionaire WHERE login='".$login."' AND pass = '".$pass."'";
    $result = mysqli_query($connect , $sql);
    $data = mysqli_fetch_assoc($result);
    if($data == TRUE){
        $_SESSION['id_user'] = $data['id_gestionaire'];
        $_SESSION['nom'] = $data['nom'];
        $_SESSION['prenom'] = $data['prenom'];
        header("Location: menu.php");
    }
    else{
        echo "Erreur de connexion";
    }
}
?>
<link rel="stylesheet" href="monstyle.css">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="bootstrap.min.js">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>
<form action="#" method="POST">
              <div class="form-outline form-white mb-4">
                <input type="text" name="login" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="mdp" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" value ="Envoyer" name="Envoyer" type="submit">Login</button>
</form>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
