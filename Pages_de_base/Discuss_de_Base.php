<!DOCTYPE html>

<html lang="fr">


<head>
    <meta charset="utf-8">
    
    <title>Navigation Bar</title>
    
    
    <link rel="stylesheet" href="../style.css">
    <style>
    
    body {
    
    background-image: url(../imgpages/consoles.jpg);
   
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
    
    <!--
    <?php
    include('../structure/menu.php'); ?>-->
    
    <?php
    /*include('../structure/barre_tests.php');*/
    include('../structure/fonctions.php');
    titrediscuss('Do you think obvious display of violence in Video games impact on the youth ?');
    ?>
    
</div>
<div class="row">

 <?php 
        debut_comm_pdb();
        
  	include('../structure/comments.php');
  ?>
	<?php
	end_comm();
	
	?>
	</div>

 </body>
<!--remonter page-->
</html>
