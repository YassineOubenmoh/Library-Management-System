<link rel="stylesheet" href="menustyle.css">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="bootstrap.min.js">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="vh-100 gradient-custom">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link href="http://fonts.googleapis.com/css?family=Arimo:400" rel="stylesheet">

		<a class="menu-bar" data-toggle="collapse" href="#menu">
            <span class="bars"></span>            
        </a>
    	<div class="collapse menu" id="menu">
            <ul class="list-inline">
                <li><a href="list_etudiants.php">liste des etudiants</a></li>
                <li><a href="list_livres.php">Liste des livres</a></li>
                <li><a href="List_emprunts.php">Liste des emprunts</a></li>
                <li><a href="Ajouter_emprunt.php">Ajouter un emprunt</a></li>
                <li><a href="Ajouter_etudiant.php">Ajouter un etudiant</a></li>
            </ul>   
    	</div>

        <div class="container">
            
        </div> 
    
</section>




<?php
include "menu.php";
?>
<link rel="stylesheet" href="monstyle.css">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="bootstrap.min.js">
<section class="vh-100 gradient-custom">
<div id="tableau">
<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">Isbn</th>
        <th scope="col">titre du livre</th>
        <th scope="col">Auteur</th>
        <th scope="col">Image du livre</th>
      </tr>
    </thead>
    <tbody>
        <?php
    include("connexion.php");
    $sql2 = "SELECT * FROM livre";
    $result2 = mysqli_query($connect,$sql2);
    while($data = mysqli_fetch_assoc($result2)){ ?>
        <tr>
        <td scope="row"> <?php echo $data['isbn'] ?>  </td>
        <td scope="row"> <?php echo $data['titre_livre'] ?>  </td>
        <td scope="row"> <?php echo $data['auteur'] ?>  </td>
        <td scope="row"> <img id="photo_profil" height=40 width=40 src="image/<?php echo $data['image_livre'] ?>">  </td>
    </tr>

    <?php } ?>
    </section>