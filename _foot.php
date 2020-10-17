<?php
/**
 * Author : Jeevan 
 * Url : https://jeevanism.com
 * Project : https://www.bhimonlineclassroom.in 
 * Period : March 2020 - May 2020 
 * File : Footer contents 
 */
?>
 <section class="section sectionbg brands">
         <div class="container">
            <div class="row">
            
               <div class="col-lg-12">
                  <h5 class="text-center">Our Supporters</h5>
                  </div>
                    <div class="col-lg-3">
                           <div class="brands_slider_container">
                     
                         <div class="owl-item">
                             <div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo $config->urls->templates?>images/supp1.jpg" alt=""></div>
                         </div>
                         
                    
                     <!-- <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                     <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div> -->
                 </div>
               
               </div>
				</div>
					 </section> <!-- Brands Slider Navigation -->
<!-- Footer start -->
<section class="footer">
	 <div class="container">
			<div class="row ">
		 
				 <div class="col-lg-6">
						<div class="widget footer-widget text-right">
							 <ul class="list-inline mb-0">
																
									
									<li class="list-inline-item"><a href="mailto:bhimonlineclassroom@gmail.com" target="_blank">bhimonlineclassroom@gmail.com</a>
									</li><i class="fa fa-caret-right" aria-hidden="true"></i>
									<li class="list-inline-item"><a href="tel:04712326455" target="_blank"> 0471-232-6455</a>
									</li>
							
							 </ul>
							 
						</div>
				 </div>
				 
				 <div class="col-lg-6 widget footer-widget text-left">
						<p class="widget footer-widget"><a class="text-white" href="https://www.bhimonlineclassroom.in/guide-lines/"> Guidelines </a> <i class="fa fa-caret-right" aria-hidden="true"></i> <a href="http://jeevanism.com" target="_blank" class="text-white">  </a><a class="text-white" href="https://www.bhimonlineclassroom.in/news/" target="_blank"> Updates</a>
						<a href="http://jeevanism.com" target="_blank" class="text-white">  </a> <i class="fa fa-caret-right" aria-hidden="true"></i> <a class="text-white" href="https://www.bhimonlineclassroom.in/resources/" target="_blank"> TextBooks </a>
						
						<i class="fa fa-caret-right" aria-hidden="true"></i> <a class="text-white" href="https://www.bhimonlineclassroom.in/press/" target="_blank"> Press </a>
						
						</p>
				 </div>
				 
				
				   <div class="col-lg-12 mb-0 footertext text-center">
				   <p>
                                    <li class="list-inline-item"><a href="https://www.facebook.com/rightsasia/" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
									</li>
									 
									<li class="list-inline-item"><a href="https://www.instagram.com/bhimonlineclassroom/?hl=en" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
									</li>
									
									<li class="list-inline-item"><a href="https://twitter.com/bhimroom" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
									</li>
									<li class="list-inline-item"><a href="https://wa.me/914712326455" target="_blank"> <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a>
									</li>
                    </p>
                      <p class="mb-0 footertext text-center">
                     <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons Licence" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a><br />The contents in this website  are licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a> 
                     </p>
						<p class="mb-0 footertext text-center">&copy;<?php echo date("Y"); ?> An inititative of <a class="text-white" href="http://rights.asia/"> RIGHTS</a> <i class="fa fa-caret-right" aria-hidden="true"></i> 
						Developed by<a href="http://jeevanism.com" target="_blank" class="text-white"> Jeevz</a> <i class="fa fa-caret-right" aria-hidden="true"></i> Art by <a class="text-white" href="https://www.behance.net/shafeekblacktea" target="_blank">Shafeek H</a></p>
				 </div>
				  <div class="col-lg-12">
						<p class="mb-0 footertextsmall text-center">Powered By <a class="text-white" href="https://processwire.com/">ProcessWire</a>
						 
				 </div>
				 
			</div>
			
	 </div>
</section>
<!-- Footer End -->


<!-- Main Script -->
 
 <script>
AOS.init();
 
</script>

 <script>
   $(document).ready(function(){

if($('.brands_slider').length)
{
var brandsSlider = $('.brands_slider');

brandsSlider.owlCarousel(
{
loop:true,
autoplay:true,
autoplayTimeout:2000,
nav:false,
dots:false,
autoWidth:true,
items:8,
margin:42
});

if($('.brands_prev').length)
{
var prev = $('.brands_prev');
prev.on('click', function()
{
brandsSlider.trigger('prev.owl.carousel');
});
}

if($('.brands_next').length)
{
var next = $('.brands_next');
next.on('click', function()
{
brandsSlider.trigger('next.owl.carousel');
});
}
}


});
 </script>

</body>
</html>
