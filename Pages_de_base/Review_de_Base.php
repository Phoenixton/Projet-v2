<!DOCTYPE html>

<html lang="fr">


<head>
    <meta charset="utf-8">
    
    <title>Navigation Bar</title>
    
    
    <link rel="stylesheet" href="../style.css">
    <style>
    
    body {
    
    background-color: white;
    background-image: url(../imgpages/farcry_background.png);
   
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
    include('../structure/menu.php'); ?>
    
    <?php
    include('../structure/barre_tests.php');
    include('../structure/fonctions.php');
    
    ?>
    
    
<?php titre('');?> 

<div class="news">
                <p>
                
                
                
                
                
                
                
                </p>
                
                
                
                
                
</div>

<div class="trucs">
Nom/pseudo -- date
<br>
tags
</div>
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
