<!DOCTYPE html>

<html lang="fr">


<head>
    <meta charset="utf-8">
    
    <title>Navigation Bar</title>
    
    
    <link rel="stylesheet" href="style.css">
    <style>
    
    body {
    background-image: url(http://images8.alphacoders.com/510/510491.jpg);
    }
    #essai {
    margin: 15px;
    }
    .essai {
    padding: 15px;
    }
    .essai2 li{
    
    border:solid 1.5px;
      box-shadow:1px 1px 5px black;   
    
    }
    .box-cont {
    
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
    <br>
    <br>
    <?php
    include('structure/barre_tests.php');
    include('structure/fonctions.php');
    ?>
    <div class="inscript_page">
    </div>
    <br>
    <br>
  
  <div class="row">
<div class="col-demi"> <p> </p> </div>

<div class="col-4"> <p> <h3>Ce site a pour vocation de présenter régulièrement du contenu en lien avec les jeux videos, tests, articles, news et discussions</h3> </p> </div>
</div>
  <div class="row">
  <div class="col-boxes"> <p> </p> </div>
  <div class="col-3">
  <h2> Discussion de la semaine : </h2>
  </div>
  </div>
  <div class="row">
  <div class="col-boxes"> <p> </p> </div>
    <iframe name="myframe" src="/Site_final/Pages_de_base/Discuss_de_Base.php" width="800" height="300" scrolling="yes">
</iframe>

    </div>  

  </div>
</body>



</html>
