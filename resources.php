<?php
/**
 * Author : Jeevan 
 * Url : https://jeevanism.com
 * Project : https://www.bhimonlineclassroom.in 
 * Period : May 2020 
 * File : To display video resources
 */
   include('./_head.php'); // include header markup ?>
<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-subj shadow p-3 mb-5 bg-white rounded" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="300">
               <h5 class="text-center"><?php echo $page->title;?></h5>
               <hr class="my-4">
               <p>Hello All Volunteer Teachers,</p>
               <p>The teacher texts of class 9 and 10 malayalam medium are available here for the reference purpose,you can download and use them in the pdf form.</p>
               <hr class="my-4">
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="row">
                        <?php
                           foreach($page->pdf as $pdf){
                           ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                           <div class="card">
                              <a href="<?php echo $pdf->httpUrl;?>"> <img class="card-img-top" src="<?php echo $config->urls->templates?>/images/pdf.png" style="width: 50%;" alt="Card image cap"></a>
                              <div class="card-body">
                                 <h5 class="card-title"><a href="<?php echo $pdf->httpUrl;?>"><?php echo $pdf->description;?></h5>
                              </div>
                           </div>
                        </div>
                        <?php }
                           ?>
                     </div>
                  </div>
               </div>
               <hr class="my-4">
               <?php echo $page->body;?>  
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<?php include('./_foot.php'); // include footer markup ?>
