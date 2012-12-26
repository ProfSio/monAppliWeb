<?php include 'header.html'; 
if (!isset($GET['page']))
	include 'calculatrice.html'; 
	else {
   if($GET['page']=="nous-contacter")
	 include 'nous-contacter.html';}
include 'footer.html'; ?>



