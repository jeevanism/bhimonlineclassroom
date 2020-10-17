<?php
/**
 * Author : Jeevan 
 * Url : https://jeevanism.com
 * Project : https://www.bhimonlineclassroom.in 
 * Period : March 2020 - May 2020 
 * File : To display the list of Video Classes
 */

include('./_head.php'); // include header markup 

/*get all videos list and display as in grid */
$med = $input->get('med'); // retrieve value
$med = $sanitizer->text($med); // sanitize input as 1-line text
$med =$sanitizer->entities($med); // sanitize for output, outputs "TEST"
$sub=$input->get('sub'); // GET for subject
 $c=$input->get('c'); // GET for chapter 
 $cl=$input->get('cl'); // GET for class
$previousPageLink = $chaptersListLink.'?med='.$med.'&sub='.$sub.'&c='.$c.'&cl='.$cl;
$videoList = $pages->find("template=singlevideo, medium=$med,chapter=$c, subjectname=$sub,class=$cl"); // find the videopages w.r.t to medium, subject and class 
 ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="alert alert-primary" role="alert"> Videos >> <strong><?php echo $sub ;?></strong> >> chapter <strong><?php echo  $c;?></strong> >> <strong><?php echo $cl;?></strong> >> Medium <strong><?php echo $med;?></strong> </div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class=" text-right alert alert-primary" role="alert"> <a href="<?php echo $previousPageLink;?>" class="alert-link">Go back to previous Page</a></div>
			</div>
		</div>
	</div>
</section>
<section class="instruction">
	<div class="container ">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div data-aos="zoom-in">
					<div class="alert alert-warning" role="alert">
						<h5><span class="blinking">Instruction:</span> Click or Tap on the VIDEO You want to view. </<h5>
					</div>
				</div>
			</div>
		</div>
</section>

<div class="container instruction">
	<div class="row">
		<?php
if (count($videoList)==0) {
  ?>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card card-subj shadow p-3 mb-5 bg-white rounded ">
					<div class="card-body"> <img class="img-fluid" src="<?php echo $config->urls->templates?>images/404.jpg" />
						<h5 class="card-title"> No videos added for Subject
							<?php echo $s;?> in
							<?php echo $q;?> MEDIUM </h5>
					</div>
				</div>
  
<?php
}
else {
/*display the cards in grid */
foreach ($videoList as $key) { $vidName=$key->title; $vidUrl=$key->url; $lastUpdated=date("Y-m-d",$page->modified); $vidNameMage=$key->images->first()->httpUrl; $createdBy =$key->createdby->title; //$imagevideo=$key->images->first()->url(); $dummary=$key->summary; ?>
  <div class="col-lg-6 col-md-12 col-sm-12">
    <div class="card card-subj shadow p-3 mb-5 bg-white rounded " data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
      <div class="card-header">
        <a href="<?php echo $vidUrl.'?med='.$med.'&sub='.$sub.'&c='.$c;?>">
          <h5>
            <?php echo $vidName;?>
          </h5>
        </a>
      </div>
      <div class="card-body"> <a href="<?php echo $vidUrl.'?med='.$med.'&sub='.$sub.'&c='.$c;?>"><img class="img-fluid" src="<?php echo 	$vidNameMage;?>" /></a>
        <p class="card-text">
          <?php echo $dummary ;?>
        </p>
        <div class="d-flex bd-highlight mb-3">
          <div class="p-2 bd-highlight"><i class="ti-id-badge mr-1"></i>: <strong> <?php echo $createdBy;?></strong></div>
          <div class="ml-auto p-2 bd-highlight"><i class="ti-calendar mr-1"></i>: <strong><?php echo $lastUpdated	;?></strong></div>
        </div>
      </div>
    </div>
  </div>
  <?php  }
          }
            ?>

</div>
</div>
</section>
<section>
	<div class="container">
		<div class="col-lg-4 col-md-12 col-sm-12">
			<div class="card card-subj shadow p-3 mb-5 bg-white rounded "> <a class="btn btn-primary" href="<?php echo $homepagelink ;?>" role="button">Go To HOME page</a> </div>
		</div>
	</div>
</section>
<!-- Footer start -->
<?php include('./_foot.php'); // include footer markup ?>