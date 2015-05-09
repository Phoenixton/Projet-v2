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
<?php titre('Inscription');?> 
<div class="row">
<p> </p>
</div>
<div class="inscription">
						<form class="essai3" action="inserer.php" method="POST">
							<label for="pseudo">Votre pseudonyme</label>
							<input class="essai3" type="text" name="pseudo" onblur="checkPseudo(this);">
							<label for="mdp">Votre mot de passe</label>
							<input class="essai3" type="password" name="mdp" id="mdp">
							<label for="mdp2">Veuillez retaper votre mot de passe</label>
							<input type="password" name="mdp2" onblur="checkMdp(document.getElementById('mdp').value, this);">
							<label for="email">Votre email</label>
							<input type="email" name="email">
							<input class="button" type="submit" value="Inscription">
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
