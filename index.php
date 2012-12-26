<?php include 'header.php'; 
 if (!isset($GET['page']))
	include 'calculatrice.html'; 
	else {
   if($GET['page']=="articles")
	 include 'articles.html';}
 include 'footer.html'; ?>