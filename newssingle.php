<?php
/**
 * Author : Jeevan 
 * Url : https://jeevanism.com
 * Project : https://www.bhimonlineclassroom.in 
 * Period : March 2020 - May 2020 
 * Page : To display Single News Item Page 
 */

include('./_head.php'); // include header markup ?> 
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card card-subj shadow p-3 mb-5 bg-white rounded " data-aos="fade-up" data-aos-easing="linear" data-aos-duration="300">
					<h5>
						<?php echo $page->title;?> </h5>
					<hr class="my-4">
					<?php echo $page->body;?> </div>
			</div>
		</div>
	</div>
	</div>
</section>

<?php include('./_foot.php'); // include footer markup ?>
 
