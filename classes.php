<?php
/**
 * Author : Jeevan 
 * Url : https://jeevanism.com
 * Project : https://www.bhimonlineclassroom.in 
 * Period : March 2020 - May 2020 
 * File : To display the list of Video Classes - subject wise 
 */
include('./_head.php'); // include header markup 

/**get the filed classes find  page classes  by ID 
 *  and get all pages below and display field value of classes 
*/

// Retrieve a "q" GET variable, sanitize and output
// Example request URL: domain.com/path/to/page/?q=TEST
$sub = $input->get('sub'); // GET value  for subject
$sub = $sanitizer->text($sub); // sanitize input as 1-line text
 $cl=$input->get('cl'); // GET value for class
  $subjPage = $pages->get(1035); // get page for subjects list
$subjPagefield = $fields->get('class'); // get the field value ' class ' for subject
 $all_options = $subjPagefield->type->getOptions($subjPagefield); // get all values for the subject field
 
 ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="alert alert-primary" role="alert"> Classes >> <strong><?php echo $sub ;?></strong> </div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class=" text-right alert alert-primary" role="alert"> <a href="<?php echo $homepagelink;?>" class="alert-link">Go back to previous Page</a></div>
			</div>
		</div>
	</div>
</section>

       <section>
         <div class="container">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div data-aos="zoom-in" class="aos-init aos-animate">
               <div class="alert alert-warning" role="alert">
                  <h5>
                  <span class="blinking">Instruction:</span> Click or Tap on the Class, then select the Medium </h5></div>
            </div>
         </div>
      </div></section>

      <section>
        <div class="container">
        <div class="bs-example">
        <div class="accordion" id="accordionExample">
            <?php
              /*loop the acccordion with cards contents*/
              $k=1; // use the counter to iterate the collapsed and heading ID elements for accordionExample
               foreach($subjPage->children() as $classes) { // get the child pages and loop 
				  $cl= $classes->class->title;
                  ?>


                  <div class="card">
                     <!--Card <?php echo $k;?> -->
                     <div class="card-header shadow p-2 mb-2 bg-white rounded" id="<?php  echo 'heading'.$k;?>">
                        <h2 class="mb-0 classeshead collapsed" data-toggle="collapse" data-target="#<?php   echo 'collapse'.$k;?>" aria-expanded="false"><i class="fa fa-plus-circle" aria-hidden="true"></i> <?php echo $classes->class->title;?>
                        </h2>
                     </div>
                     <div id="<?php echo 'collapse'.$k;?>" class="collapse" aria-labelledby="<?php  echo 'collapse'.$k;?>" data-parent="#accordionExample" style="">
                      <div class="card-body bg-grey">

                                 <div class="row">

                                    <div class="col-lg-6 col-sm-12  col-md-12   ">
                                       <div class="card  cardeffect card-subj shadow p-3 mb-5 bg-white rounded ">
                                       <a href="<?php echo $chaptersListLink.'?med=english&sub='.$sub.'&cl='.$cl;?>">   <img class="card-img-top" src="<?php echo $config->urls->templates?>images/english.png" alt="Card image cap"></a>
                                          <div class="card-body">
                                             <h3 class="card-title">
                                               <a href="<?php echo $chaptersListLink.'?med=english&sub='.$sub.'&cl='.$cl;?>">English MEDIUM</a>
                                             </h3>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12  col-md-12   ">
                                       <div class="card  cardeffect card-subj shadow p-3 mb-5 bg-white rounded ">
                                          <a href="<?php echo $chaptersListLink.'?med=malayalam&sub='.$sub.'&cl='.$cl;?>"> <img class="card-img-top" src="<?php echo $config->urls->templates?>images/malayalam.png" alt="Card image cap"></a>
                                          <div class="card-body">
                                             <h3 class="card-title">
                                              <a href="<?php echo $chaptersListLink.'?med=malayalam&sub='.$sub.'&cl='.$cl;?>">Malayalam MEDIUM</a>
                                             </h3>
                                          </div>
                                       </div>
                                    </div>



                                 </div>

                              </div>
                        </div>
                     </div>


                <?php
                  $k++;


              }

             ?>





              </div>
           </div>
        </div>
      </section>


   <?php include('./_foot.php'); // include footer markup ?>
