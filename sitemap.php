<?php
/**
 * Author : Jeevan 
 * Url : https://jeevanism.com
 * Project : https://www.bhimonlineclassroom.in 
 * Period : May 2020 
 * File : Create SiteMap
 */
include("./_head.php");// include header 
 ?> 

<div id='content'>
<?php 
	
	$maxDepth = 4; 
	renderNavTree($pages->get('/'), $maxDepth); // see the _init.php for the renderNavTree function
	
	?>

</div>

<?php include("./_foot.php");// include footer ?>
