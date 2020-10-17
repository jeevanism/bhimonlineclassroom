<?php
/**
 * Author : Jeevan 
 * Url : https://jeevanism.com
 * Project : https://www.bhimonlineclassroom.in 
 * Period : March 2020 - May 2020 
 * File : To display  News Item GRIDs 
 */
include('./_head.php');// include header

$newsPages= $pages->get("template=news,include=all"); // get all pages for newd
$newsPageChildren = $newsPages->children(); // inner pages for the News Stub
    
?>
<section class="portfolio ">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="alert alert-primary" role="alert">
				<h6 class="text-center">News & Updates</h6>
			</div>
		</div>
		<?php 
                        foreach($newsPageChildren as $child): ?>
		<div class="col-lg-4 col-sm-12  col-md-12  ">
			<div class="card cardeffect card-subj shadow p-3 mb-5 bg-white rounded " data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500"> <a href="<?php echo $child->url;?>">    <img class="card-img-top" src="<?php echo $child->images->first()->size(300,200)->httpUrl;?>" alt="Card image cap"></a>
				<div class="card-body">
					<h6 class="card-title"> <a href="<?php echo $child->url;?>"><?php echo $child->title;?></a> </h6>
				</div>
			</div>
		</div>
		<?php endforeach; ?> </div>
	<!-- end of row -->
</section>


<?php include('./_foot.php'); // include footer markup ?>
