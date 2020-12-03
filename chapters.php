<?php
/**
 * Author : Jeevan 
 * Url : https://jeevanism.com
 * Project : https://www.bhimonlineclassroom.in 
 * Period : March 2020 - May 2020 
 * File : To display the list of Video Classes - Chapter wise 
 */
include('./_head.php'); // include header markup 
/**
 * Retrieve a "q" GET variable, sanitize and output
 * Example request URL: domain.com/path/to/page/?q=TEST
 */

$med = $input->get('med'); // retrieve  GET value for  Medium
$med = $sanitizer->text($med); // sanitize input as 1-line text
$med =$sanitizer->entities($med); // sanitize for output
$sub=$input->get('sub'); // GET subject value
$sub=$sanitizer->text($sub);
$cl=$input->get('cl'); // GET class value 
$cl=$sanitizer->text($cl);
$previousPageLink = $classesListPageLink.'?med='.$med.'&sub='.$sub.'&cl='.$cl;  // previous Page link created

/**
 * find videos w.r.t the medium value retrieved from the  GET method variables
 */
$videos = $pages->find("template=singlevideo, medium=$med, subjectname=$sub,class=$cl");


 ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="alert alert-primary" role="alert"> Chapters >> <strong><?php echo $sub ;?></strong> >> <strong><?php echo $cl;?></strong> >> Medium <strong><?php echo $med;?></strong> </div>
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
						<h5><span class="blinking">Instruction:</span> Click or Tap on the CHAPTER Number, It will show you the videos added.</<h5>
					</div>
				</div>
			</div>
		</div>
</section>

<div class="container instruction">
	<div class="row">
		<?php
        if (count($videos)==0) {
          ?>
			<div class="col-lg-qw col-md-12 col-sm-12">
				<div class="card card-subj shadow p-3 mb-5 bg-white rounded ">
					<div class="card-body"> <img class="img-fluid" src="<?php echo $config->urls->templates?>images/404.jpg" />
						<h5 class="card-title"> No videos added for Subject
							<?php echo $sub;?> in
							<?php echo $med;?> MEDIUM </h5>
					</div>
				</div>

      <?php
      }
        else {
  $noofvideos = count($videos);
  $dynamicarray = array(); // we need to pick the chapter numbers assigned to each videos, mutliple videos may have same chapter number
          foreach ($videos as $key) {
             $createddate=$datetime->date($page->modified);
             $createddate=date("Y-m-d",$page->modified); 
				$chpaterno=$key->chapter;
               $createdBy=$key->createdBy;
               $chapimage=$key->images->first()->size(300,200)->httpUrl;
               $vidName= $key->title;
               $dynamicarray[$chpaterno]=$chpaterno; // add to the array of chapter, to prevent dupilcity listing of chapters
            ?>
 

            
          <?php
         }
 
  
  count($dynamicarray); // pick the number of chapters assigned to videos 
  //$dynamicarray=sort($dynamicarray);
 
  sort($dynamicarray);


foreach($dynamicarray as $i){
	 
	
	?>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="card card-subj shadow p-3 mb-5 bg-white rounded " data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">

                    <div class="card-body">
						 <h5 class="card-title text-left">
                  <a href="<?php echo $videoListLink.'?med='.$med.'&sub='.$sub.'&c='.$i.'&cl='.$cl;?>">Chapter <?php echo $i;?></a>
                  </h5>
                  <button type="button" class="btn1 btn-info"> <a href="<?php echo $videoListLink.'?med='.$med.'&sub='.$sub.'&c='.$i.'&cl='.$cl;?>"><span class="blink_me"><i class="fa fa-rss" aria-hidden="true"></i> Click Here </span></a></button>
		 
		</div></div></div>
	 
				<?php }


        }

         ?>





      </div>
      </div>
      </section>
            <!-- Footer start -->
    <?php include('./_foot.php'); // include footer markup ?>
