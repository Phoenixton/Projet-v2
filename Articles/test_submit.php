
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Ecriture de l'article</title>
		<script type="javascript" src="champsPleins.js"></script>
	<style>
	body{
	background-image:url('../imgpages/mariobg.jpg');
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
    </style>
    <title>Navigation Bar</title>
    
    
    <link rel="stylesheet" href="../style.css">
    
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
		
		   <h4> Bonjour </h4>
			<form id="revsub" class="revsub" method="POST" action="../form_test.php">
			<div class="text-inside">	
			    <label for="title"> Title </label>
			    <div id="comment_form">
			    <textarea name="title" form="revsub"></textarea>
			    </div>
			    
			    
				<label for="texte">Texte</label>
				
				<div id="comment_form">
				<textarea id="text-input" name="texte" form="revsub" onblur="champsPleins(this, texteC);"></textarea>
                </div> 
				<input type="submit" value="Soumettre">
			</div>
			</form>
			<br>
<div class="row">
<div class="instructions">
		<div class="box-cont">	
		
		    Here goes the instructions for the above texte form : 
		    <p>
		    In order to organize your text, we provide you with a few _balises_ :
		    
		    Use : 
		    <p>&lt;div class="news"&gt; to draw a line below the text you're writing. It will help you improve readability. Don't forget to close it, with &lt;/div&gt;. The first &lt;div class="news"&gt; is already in place, as is the last one, the one closing it, so if you only want to write one paragraph, you can not worry about that.
		    <p>
		    The grid system of the page is as follow : 
		    <br>
		       &lt;row&gt; is meant to give you another row of space, each row being able to contain 6 columns.
		    <br>
		        &lt;col-X&gt; will provide the space you need to write colums in your article, with the X being replaced by any number between 1 and 6 (demi and boxes can also be put in place of the X, just be warned the alignement will not be as usual, try it to your heart's content though !)
		    </p>
		    </p>
		</div>
</div>
	</body>
</html>
