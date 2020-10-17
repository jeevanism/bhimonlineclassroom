<?php
/**
 * Author : Jeevan 
 * Url : https://jeevanism.com
 * Project : https://www.bhimonlineclassroom.in 
 * Period : March 2020 - May 2020 
 * Page : Prepare links to various pages 
 */

 $homepagelink= $pages->get(1)->url; // home page link - (1) is the id of the page

 $aboutPageLink=$pages->get(1001)->url;// about page link 

 $classesListPageLink=$pages->get(1035)->url;// classeslist page

$subjectsListLink=$pages->get(1017)->url; // subjectList page
 $chaptersListLink= $pages->get(1036)->url; // chaptersList page
$videoListLink= $pages->get(1027)->url; // videosList page

/*
* get page link to LoginCheck Page - but the below login features are temporarily disabled in the website for now
*/ 

 $loginPagelink= $pages->get(1060)->url;

$teachervideoslink = $pages->get(1102)->url;
$donatepagelink =  $pages->get(1108)->url;
?>
