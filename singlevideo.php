<?php
/*
 * Author : Jeevan 
 * Url : https://jeevanism.com
 * Project : https://www.bhimonlineclassroom.in 
 * Period : May 2020 
 * File : Display a Single Video page 
*/
include('./_head.php'); // include header markup 

/*
*get all fields attribute values attached to the single page template  such as 
* title, summary, url, date modified, author, title of subject, chapter number, title of medium, title of class,
* link to previous page, link to TeachersVideos
*/
$vidoeName = $page->title;
$videoSummary = $page->summary;

$videoUrl = $page->videourl;
$videoLastUpdated = date("Y-m-d", $page->modified);
$videoCreatedBy = $page->createdby->title;
$videoSubject = $page->subjectname->title;
$videoChapter = $page->chapter;
$videoMedium = $page->medium->title;
$videoClass = $page->class->title;
$previousPageLink = $videoListLink . '?med=' . $videoMedium . '&sub=' . $videoSubject . '&c=' . $videoChapter . '&cl=' . $videoClass;
$teacherVideosLink = $teacherVideosLink . '?teacher=' . $videoCreatedBy;
/*
* Code to convert the Youtube URL into Youturb embed URL, inuput param @videourl
*/
preg_match('%(?:youtube(?:-nocookie)?.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu.be/)([^"&?/ ]{11})%i', $videoUrl, $match);
$fullEmbedUrl = $match[1];
$fullEmbedUrl = 'https://www.youtube.com/embed/' . $fullEmbedUrl . '?rel=0';

/*
 * Prepare the comments and rating to each video, then display in the frontend
 */
$starTotalArray = array(); // initialize array to hold totalcomments
foreach ($page->comments as $item) { //iterate stars rating into the array
	$starItem = $item->stars; // fetch the star rating 
	$starTotalArray[] = $starItem; //push into the array 
} //end of loop

/**
 * to get the Average Star Rating = SumofRating divided by CountofRating
 */
$starTotal = array_sum($starTotalArray); // SumofRating
$starCount = count($page->comments); // CountofRating
			
if ($starcount >= 1) { // check if atleast 1 comment exists
	$averageStar = ceil($starTotal / $starCount); //  round Average Star Rating to the next integer 
} else {
	$averageStar = 0;
}
?>
<section>
	<div class="container instruction">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="alert alert-primary" role="alert" style="text-transform: capitalize;"> You are watching
					<?php echo $videoSubject ;?> <i class="fa fa-caret-right" aria-hidden="true"></i>
					<?php echo $videoClass;?> <i class="fa fa-caret-right" aria-hidden="true"></i> Medium
					<?php echo $videoMedium;?> <i class="fa fa-caret-right" aria-hidden="true"></i> <i>Chapter <?php echo  $videoChapter;?></i> </div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class=" text-right alert alert-primary" role="alert"> Please <button type="button" class="btn1 btn-info"> <a href="https://docs.google.com/forms/d/e/1FAIpQLScl1TowOU8udTdDnmjLODTGy2SnbKZy3XsuFGbGYpYTHfjpKQ/viewform?usp=sf_link"><span class="blink_me"><i class="fa fa-rss" aria-hidden="true"></i> Subscribe</span></a></button> for Updates </div>
			</div>
		</div>
	</div>
</section>
<section class="instruction">
	<div class="container instruction ">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div data-aos="zoom-in">
					<div class="alert alert-warning" role="alert">
						<h5><span class="blinking">Instruction:</span>ക്ലാസ്സ് തുടങ്ങുന്നതിന് മുൻപ് ആവശ്യമായ പഠനസാമഗ്രികൾ അതായത് നോട്ട്ബുക്ക്, പെൻ, പെൻസിൽ, സ്കെയിൽ എന്നിവ കയ്യിൽ സൂക്ഷിക്കേണ്ടതാണ്. ക്ലാസ്സിൽ പറയുന്ന സമവാക്യങ്ങൾ, നിർവ്വചനങ്ങൾ, പദങ്ങൾ എന്നിവ നോട്ട് ബുക്കിൽ കുറിച്ചിടേണ്ടതാണ്. </<h5>
					</div>
				</div>
			</div>
		</div>
</section>

<div class="container instruction">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card card-subj shadow p-1 mb-5 bg-white rounded ">
				<div class="card-body">
					<div class="embed-responsive embed-responsive-16by9"> <iframe class="embed-responsive-item" src="<?php   echo    $fullEmbedUrl;?>" frameborder="0" allowfullscreen></iframe> </div>
					<p class="card-text">
						<?php echo $videoSummary;?>
					</p>
					<p>
						<?php
				if($page->pdf){ // check if the page has any PDF file attached
					 foreach($page->pdf as $pdf){ // display out each files with a URL to download
					?> <a class="btn btn-primary" href="<?php echo $pdf->httpUrl;?>">PDF DOWNLOD</a>
							<?php } }
						
				?>
					</p>
	<div class="d-flex bd-highlight mb-3">
	<div class="p-2 bd-highlight mb-0 "> <a href="<?php echo $teacherVideoslink;?>"><i class="fa fa-rss" aria-hidden="true"></i> <?php echo $videoCreatedBy;?> </a> </div>
	<div class="p-2 bd-highlight mb-0 ">
		<div class="fb-share-button" data-href="<?php echo $page->httpUrl(); ?>" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($page->httpUrl);?>" class="fb-xfbml-parse-ignore"><i class="fa fa-facebook-square fa-1x"></i><span class="tweetit">Share</a></div>
	</div>
   
  <div class="ml-auto p-2 bd-highlight">
  <?php

/**
 * display the average rated stars for the video
 */
			
echo '<p class="videorating">Video Rating :';
switch ($averageStar) {
	/**
	 *  display the stars in the frontend page as per the case of average stars number 
	 */
	case 0;
		echo 'No Reviews yet ';
		break;

	case 1;
		echo '<span class="CommentStars"><span class="CommentStarOn" data-value="1">★</span><span class="CommentStarOff" data-value="2">★</span><span class="CommentStarOff" data-value="3">★</span><span class="CommentStarOff" data-value="4">★</span><span class="CommentStarOff" data-value="5">★</span></span>';
		break;

	case 2;
		echo '<span class="CommentStars"><span class="CommentStarOn" data-value="1">★</span><span class="CommentStarOn" data-value="2">★</span><span class="CommentStarOff" data-value="3">★</span><span class="CommentStarOff" data-value="4">★</span><span class="CommentStarOff" data-value="5">★</span></span>';
		break;

	case 3;
		echo '<span class="CommentStars"><span class="CommentStarOn" data-value="1">★</span><span class="CommentStarOn" data-value="2">★</span><span class="CommentStarOn" data-value="3">★</span><span class="CommentStarOff" data-value="4">★</span><span class="CommentStarOff" data-value="5">★</span></span>';
		break;

	case 4;
		echo '<span class="CommentStars"><span class="CommentStarOn" data-value="1">★</span><span class="CommentStarOn" data-value="2">★</span><span class="CommentStarOn" data-value="3">★</span><span class="CommentStarOn" data-value="4">★</span><span class="CommentStarOff" data-value="5">★</span></span>';
		break;

	case 5;
		echo '<span class="CommentStars"><span class="CommentStarOn" data-value="1">★</span><span class="CommentStarOn" data-value="2">★</span><span class="CommentStarOn" data-value="3">★</span><span class="CommentStarOn" data-value="4">★</span><span class="CommentStarOn" data-value="5">★</span></span>';
		break;
}
echo '</p>';

?>
  
  </div>
</div>
<!-- star display ends -->
<div class="col-12">
	<p class="mb-0 footertext text-left"> <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons Licence" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a> This content is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a> </p>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 card card-subj shadow p-3 mb-5 bg-white rounded">
					
				
<?php
/**
 * display the video comments 
*/
if (count($page->comments)) {
						
	echo $page->comments->render(
		array(
			'headline' => '<h5>Comments & Rating recieved so far</h5>',
			'commentHeader' => '<span class="comment-by">{cite}
									 
									{stars}
								</span>',
			'useStars' => 1,
			'encoding' => 'UTF-8',
			'admin' => true, // shows unapproved comments to admin if true
		)
	);
} else {
	echo '<h5>No Reviews posted yet</h5>';
}
?>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 card card-subj shadow p-3 mb-5 bg-white rounded">
	
<?php 
/**
 * Prepare the Comments display configuration
 */
	 echo $page->comments->renderForm(array(
	 'headline' => "<h5 class='uk-modal-title'>Leave a Review</h5>",
	 'successMessage' => "<p class='uk-alert-success'>Thank you, your review has been submitted.</p>",
	 'errorMessage' => "<p class='uk-alert-danger'>Your reivew was not saved due to one or more errors. Please check that you have completed all fields before submitting again.</p>",
	 'processInput' => true,
	 'encoding' => 'UTF-8',
	 'attrs' => array(
		 'id' => 'CommentForm',
		 'action' => './',
		 'method' => 'post',
		 'class' => '',
		 'rows' => 5,
		 'cols' => 50,
		 ),
	 'inputWrapTag' => '<div class="uk-input">',
	 'labels' => array(
		 'cite' => 'Your Name',
		 'email' => 'Your E-Mail',
		 'text' => 'Your Review',
		  
		 'stars' => 'Your Rating',
		 'submit' => 'Submit Review',
	 ),
		 'requireSecurityField' => '', // the name of a field that must be set (and have any non-blank value), typically set in Javascript to keep out spammers  to use it, YOU must set this with a <input hidden> field from your own javascript, somewhere in the form not used by default

	 ));
  
	 ?>
</div>
 </div>
 </div>
</section>
<section>
	<div class="container">
		<div class="col-lg-4 col-md-12 col-sm-12">
			<div class="card card-subj shadow p-3 mb-5 bg-white rounded "> <a class="btn btn-primary" href="<?php echo $homepagelink;?>" role="button">Go to HomePage</a> </div>
		</div>
	</div>
</section>

 
<?php include('./_foot.php'); // include footer markup ?>
