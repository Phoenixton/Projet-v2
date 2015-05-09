<!DOCTYPE html>

<html lang="fr">


<head>
    <meta charset="utf-8">
    
    <title>Navigation Bar</title>
    
    
    <link rel="stylesheet" href="style.css">
     <style>
     body {
    
    background-color: white;
    background-image:url('imgpages/graybg.jpg');
   
    }
    #essai {
    margin: 15px;
    /*width:200px;*/
    }
    .essai {
    padding: 15px;
    
    }
    .essai2 li{
    
    border:solid 1.5px;
      box-shadow:1px 1px 5px black;   
    
    }
    h1 {
    background-image: linear-gradient(#e74c3c, #000000);
    }
    h3 {
    background-image: linear-gradient(#e74c3c, #000000);
    }
    </style>
    
</head>


<body>
<div class="row"> 
    <div class="col-1">
    <div class="content">
    
    <p>some text...</p>
    </div>
    </div>
   
    <?php
    include('structure/menu.php'); ?>
</div>

<div class="row">
    
    <br>
    <br>
    <?php
    include('structure/barre_tests.php');
    include('structure/fonctions.php');
    
    ?>
<?php titre('Connexion');?> 
<div class="row">
<p> </p>
</div>
<div class="connexion">
						<form action="verifier.php" method=\"POST\">
							<label for="pseudo">Pseudo</label>
							<input type="text" name="pseudo">
							<label for="mdp">Mot de passe</label>
							<input type="password" name="mdp">
							<input type="submit" value="Connexion">
						</form>
</div>
<div class="row">
<p> </p>
</div>
<div class="troll">
<img src="imgpages/notice.gif"/>
</div>
</div>


</body>



</html>
