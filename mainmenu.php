<?php
/*
 * Author : Jeevan 
 * Url : https://jeevanism.com
 * Project : https://www.bhimonlineclassroom.in 
 * Period : May 2020 
 * File : Prepare Main Navigation Menu
*/

 $homePage = $pages->get("/"); // get the homepage object

 $navItems = $homePage->and($homePage->children); // get PageArray of homepage object and child page objects
 foreach ($navItems as $navItem):// iterate over the $navItems PageArray

   /* if the id of the page currently being
   * iterated equals the id of the current page
   */
   if ($navItem->id == $page->id) {
     $activeClass = " active";

   }
   else {
     $activeClass = "";
   }

?>

<li class="nav-item "> <a class=" nav-link <?php echo $activeClass; ?>" href="<?php echo $navItem->url; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i><?php echo $navItem->title; ?> </a> </li>
	<?php endforeach ?>
