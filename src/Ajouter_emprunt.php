<?php
include "menu.php";
session_start();
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

             
<form action="#" method="POST">
              <div class="form-outline form-white mb-4">
                
              </div>
                <select name="apogee" id="typeEmailX" class="form-control form-control-lg">
                    <option value="13003031">ALMOUHAK_KAOUTAR</option>
                    <option value="13007111">AKSBI OUSSAMA</option>
                    <option value="13007921">CHTIBY SAFAA</option>
                    <option value="14000054">BAHOUMI BASMA</option>
                    <option value="14000108">EL ATTAOUI ANAS</option>
                    <option value="14000149">BELOUIZA CHARIFA</option>
                    <option value="14000198">BOUSFIHA TAREK</option>
                    <option value="14001418">BELHAJ ZOUBIDA</option>
                    <option value="14001914">ABERCHANE OUMAIMA</option>
                    <option value="14003733">EDDOUMY MONCEF</option>
                </select>
                <label class="form-label" for="typeEtudiant">Etudiant</label>

                <select name="isbn" id="typeEmailX" class="form-control form-control-lg">
                    <option value="1">LIVRE A</option>
                    <option value="2">LIVRE B</option>
                    <option value="3">LIVRE C</option>
                    <option value="4">LIVRE D</option>
                    <option value="5">LIVRE E</option>
                    <option value="6">LIVRE F</option>
                    <option value="7">LIVRE G</option>
                    <option value="8">LIVRE H</option>
                    <option value="9">LIVRE I</option>
                    <option value="10">LIVRE J</option>
                </select>
                <label class="form-label" for="typeEtudiant">Livre</label>
                <input type="date" name="dt_debut" value="dt_debut" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Date de début</label>
                
                <input type="date" name="dt_retour" value="dt_retour" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Date de retour</label> <br>
           
              <button class="btn btn-outline-light btn-lg px-5" value ="Enregistrer" name="Enregistrer" type="submit">Enregistrer</button>
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



  <?php
include "connexion.php";
    if (isset($_POST['Enregistrer'])) {
    $apogee = $_POST['apogee'];
    $livre = $_POST['isbn'];
    $dt_debut = $_POST['dt_debut'];
    $dt_retour = $_POST['dt_retour'];
    $gestionaire = $_SESSION['id_user'];
    $sql4 = "INSERT INTO emprunt (id_etudiant , id_livre , dt_debut , dt_retour , id_gestionaire) values ('$apogee' , '$livre' , '$dt_debut' , '$dt_retour' , '$gestionaire')";
    $resultat4 = mysqli_query($connect,$sql4);
    if($resultat4 == TRUE){
        
		header("Location: list_emprunts.php");

    }
    else{
        echo'erreur';
        print "<a href='javascript: history.back()'> Retour </a>";
    }

}
  ?>