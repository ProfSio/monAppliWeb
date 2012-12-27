
<?php include 'header.php'; 
 if (!isset($GET['page']))
	include 'calculatrice.html'; 
	else {
		if($GET['page']=="articles")
			include 'articles.html';
		if($GET['page']=="nous-contacter")
			include 'nous-contacter.html';
		if($GET['page']=="tutos")
			include 'tutos.html';}
		
 include 'footer.html'; ?>

