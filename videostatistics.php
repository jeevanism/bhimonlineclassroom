<?php
/**
 * Author : Jeevan 
 * Url : https://jeevanism.com
 * Project : https://www.bhimonlineclassroom.in 
 * Period : May 2020 
 * File : To diplsay statistics ( total video classes, teachers, date, hits etc)
 */

include('./_head.php'); // include header markup 

$phits = array(); // need to add the total number of page hits of videos
$teacherlist = array(); // create array of teachers 
$vids = $pages->find("template=singlevideo,sort=-phits"); // get single video type pages 
foreach ($vids as $v){
	   $i= $v->phits;
	   $t=$v->createdby->title;
	   $phits[$i]=$i;
	   $teacherlist[$t]=$t;
	  }
	 $totalpageviews =  array_sum($phits);  // total number of views 
	 $teacherno = count($teacherlist ); // total teachers
     $totalvideos = count($vids); // total videos
     $teacherlist= array_unique($teacherlist); // remove any duplicat entries  
     $countofteachers=count($teacherlist); // total number of teachers
  $teachervideoslink=  $teachervideoslink.'?teacher=';
?>

<section class=" portfolio ">
	<div class="row ">
		 <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="alert alert-primary footertext" role="alert"  >
             
              <?php echo  $totalvideos;?> Videos added <i class="fa fa-caret-right" aria-hidden="true"></i>
                <?php echo  $totalpageviews;?> times viewed <i class="fa fa-caret-right" aria-hidden="true"></i>
                <?php echo $countofteachers;?> Tutors  
             <span class="text-right"> <i class="fa fa-area-chart" aria-hidden="true"></i>  The analytics shown here based on Website Visits : Actual figures may vary </span>
              </div></div>
              
		
			<div class="col-lg-8  col-md-12  col-sm-12 ">
				<div class="card card-subj footertext rounded  ">
					<h4 class="text-center">Video Statitics</h4>

<!--tabular display of video statitics  -->					
		<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
     
      <th scope="col">Video Name</th>
       <th scope="col">Tutor Name </th>
      <th scope="col">View Count</th>
      <th scope="col">Added Date</th>
    </tr>
  </thead>
  <tbody>
	  	<?php
	  	$i=1;
			
				foreach($vids as $v)
			{
				 $lastupdated=date("Y-m-d",$v->modified);
				
				 
				?>
    <tr>
      <th scope="row"><?php echo  $i;?></th>
      <td><i class="fa fa-youtube" aria-hidden="true"></i> <a href="<?php echo $v->httpUrl;?>"><?php echo $v->title;?></a></td>
      <td><i class="fa fa-user-circle-o" aria-hidden="true"></i> <a href="<?php echo $teachervideoslink.$v->createdby->title;?>"><?php echo $v->createdby->title;?></a></td>      
      <td><i class="fa fa-eye" aria-hidden="true"></i>  <?php echo $v->phits;?></td>
      <td><i class="fa fa-calendar" aria-hidden="true"></i>  <?php echo $lastupdated;?></td>
    </tr>
   
    <?php  $i++;}?>
  </tbody>
</table>

<!--tabular display of video statitics ends -->		
		</div></div>
		<div class="col-lg-4  col-md-6  col-sm-12 ">
	<div class="card card-subj footertext rounded  ">
		<h4 class="text-center">Tutors Statitics</h4>

<!--tabular display of Tutors statitics ends -->	
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Tutor Name</th>
					<th scope="col">Videos Added</th>
				</tr>
			</thead>
			<tbody>
			<?php
	  		/**
			* get the number of videos posted various tutors and 
			*/
		   $field = $fields->get('createdby');
		 $all_options = $field->type->getOptions($field);
		 $videoarray = array();
			  
				 foreach($all_options as $v)
			 {
				 $nofvideos= $pages->find("template=singlevideo,createdby=$v->title");
				 $videoaaddedby=$v->title; // the tutor who added the video 
				 $nofvideoss=count($nofvideos);
				  $videoarray[] = array(
								 'nofvid'=>$nofvideoss,
								 'nameof'=>$videoaaddedby
								 ); // array for video info w.r.t the tutor and the videos belongd to that tutor
				  
				  
			 }
			 $nofvideosss=rsort($videoarray); // sort the descending order
	  
	 $q=1;
	  foreach($videoarray as $v){ 
		  
		 $nofvid = $v['nofvid'];
		 $nameoff= $v['nameof'];
		 
		 ?>
		
		
		  <tr>
      <th scope="row"><?php echo  $q;?></th>
       <td><i class="fa fa-user-circle-o" aria-hidden="true"></i> <a href="<?php echo $teachervideoslink.$nameoff;?>"><?php echo $nameoff;?></a></td>  
      <td><i class="fa fa-youtube" aria-hidden="true"></i>  <?php echo $nofvid;?> </td>
         
     
    </tr>
		<?php $q++;} 
	
	
	?>
	 
  
   
 
  </tbody>
</table>
		</div></div> 
                
 
				 
              
              
               
              
	 		 
	 
		 </div>
		 
		 
				
				
			
 

</section>


<?php include('./_foot.php'); // include footer markup ?>
