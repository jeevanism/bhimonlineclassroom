<?php
/**
 * Author : Jeevan 
 * Url : https://jeevanism.com
 * Project : https://www.bhimonlineclassroom.in 
 * Period : May 2020 
 * File : Home page Display
*  files included in the page are - header.php, foot.php, nofvideos.php,
*/
include('./_head.php'); // include header markup 
include('./nofvideos.php');//find  page subjects by ID and get all pages below and display the title with images
$subjPage = $pages->get(1037);// subjects list page by ID
$subjpages = $pages->find("template=subject,sort=modified"); // get the pages sorted on modified date with a template as subject
$latestvids = $pages->find("template=singlevideo,sort=-created, limit=8");// get the pages sorted on latest creared with template as singlevideo
?>
<!-- section portfolio start -->
<section class="portfolior">
    <div class="row">
        <div class="col-lg-6  col-md-12  col-sm-12 ">
            <div class="card  cardeffect card-subj shadow p-3 mb-5 bg-white rounded fadeInDown " data-aos="fade-down"
                data-aos-easing="linear" data-aos-duration="1000">
                <iframe width="100%" height="368" src="https://www.youtube.com/embed/fsmHBCi-b7g?rel=0" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-lg-6  col-md-12  col-sm-12 ">
            <div class="card  cardeffect card-subj shadow p-3 mb-5 bg-white rounded fadeInDown " data-aos="fade-down"
                data-aos-easing="linear" data-aos-duration="1000">
                <div class="alert alert-danger" role="alert">
                    <marquee onmouseover="this.stop();" onmouseout="this.start();">News :

                        <i class="fa fa-bullhorn" aria-hidden="true"></i><a
                            href="https://www.asianetnews.com/kerala-news/bhim-online-class-rooms-for-students-from-backward-community-qbcjy0">
                            ഓൺലൈൻ പഠന സൗകര്യങ്ങളില്ലാത്ത കുട്ടികൾക്ക് കൈത്താങ്ങായി ഭീം ഓൺലൈൻ ക്ലാസ് റൂമുകൾ...
                            <i class="fa fa-bullhorn" aria-hidden="true"></i><a
                                href="https://www.thecue.in/rights/2020/05/30/bhim-online-class-room-initiative-by-rights">
                                ഭീം ഓണ്‍ലൈന്‍ ക്ലാസ് റൂം, സാമ്പത്തികമായും സാമുദായികമായും പിന്നോക്കാവസ്ഥയിലുള്ളവര്‍ക്ക്
                                പഠനമാതൃക</a>

                            <a
                                href="https://timesofindia.indiatimes.com/city/kochi/breaking-digital-divide-with-devices-and-data/articleshow/76124855.cms">
                                <i class="fa fa-bullhorn" aria-hidden="true"></i> Breaking digital divide with devices
                                and data</a>

                            <a
                                href="https://www.thenewsminute.com/article/ngo-taking-internet-and-classrooms-dalit-and-adivasi-colonies-kerala-127763">
                                <i class="fa fa-bullhorn" aria-hidden="true"></i> This NGO is taking internet and
                                classrooms to Dalit and Adivasi colonies in Kerala</a>
                            <a
                                href="https://americankahani.com/perspectives/ngo-brings-dalit-and-adivasi-children-into-the-internet-age-with-online-learning/">
                                <i class="fa fa-bullhorn" aria-hidden="true"></i> NGO Brings Dalit and Adivasi Children
                                Into the Internet Age With Online Learning</a>


                    </marquee>
                </div>


                <div class="alert alert-primary" role="alert">Dear Students, Please <button type="button"
                        class="btn1 btn-info"> <a
                            href="https://docs.google.com/forms/d/e/1FAIpQLScl1TowOU8udTdDnmjLODTGy2SnbKZy3XsuFGbGYpYTHfjpKQ/viewform?usp=sf_link"><span
                                class="blink_me"><i class="fa fa-rss" aria-hidden="true"></i>
                                Subscribe</span></a></button> this form to get more updates
                </div>

                <div class="alert alert-primary" role="alert">If you like to join as a Resource person, please <button
                        type="button" class="btn1 btn-info"> <a
                            href="https://docs.google.com/forms/d/1nQaE_bHFtbsmOMWVTUFvMmiV8vEUnnu3mOMvOITlGzs/edit"><span
                                class="blink_me"><i class="fa fa-rss" aria-hidden="true"></i>
                                register</span></a></button> and contribute videos.
                </div>

                <div class="alert alert-primary" role="alert">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="p-2 bd-highlight cardsmall">
                            <li class="list-inline-item"><a href="https://www.facebook.com/rightsasia/"
                                    target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                            </li>

                            <li class="list-inline-item"><a href="https://www.instagram.com/bhimonlineclassroom/?hl=en"
                                    target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                            </li>

                            <li class="list-inline-item"><a href="https://twitter.com/bhimroom" target="_blank"><i
                                        class="fa fa-twitter-square fa-2x"></i></a>
                            </li>

                            <li class="list-inline-item"><a href="https://wa.me/914712326455" target="_blank"> <i
                                        class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a>
                            </li>
                        </div>
                        <div class="ml-auto p-2 bd-highlight cardsmall">
                            <li class="list-inline-item"><a href="mailto:bhimonlineclassroom@gmail.com"
                                    target="_blank">bhimonlineclassroom@gmail.com</a>
                            </li>
                            <li class="list-inline-item"><a href="tel:04712326455" target="_blank"> 0471-232-6455</a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section portfolio ends -->
<!-- New Added Videos starts -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="alert alert-primary" role="alert" style="text-transform: capitalize;">
                    പുതിയതായി ചേർക്കപ്പെട്ട പാഠങ്ങളുടെ വീഡിയോസ് താഴെ കൊടുത്തിരിക്കുന്നു
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="alert alert-primary" role="alert" style="text-transform: capitalize;"> <a href="#subjects">Click here for Subjects
                         Videos </a></div>
            </div>
        </div>
    </div>
</section>
<!-- New Added Videos ends -->
 <section class="portfolior">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        </div>
        <?php
        /**
        * out of each latestvideos, get video page attributes as we need
        * such as headline, url, images, tiem, createdby, subjectname of the video, title of class, chapter number, title of medidum
        * title of the subject that video features
        */
				 foreach ($latestvids as $v) {
                $vidtitle= $v->headline;
                 $vidurl= $v->url;
                  $vidimage= $v->images->first()->httpUrl;
                  $updatedtime= date("Y-m-d",$v->modified); 
                  $createdby=$v->createdby;
                  $subj=$v->subjectname;
                  $class=$v->class->title;
                  $chapter=$v->chapter;
                  $medium=$v->medium->title;
                  $vidsubj = $v->subjectname->title;
                  
              ?>
<!--Once we have the details, then loop the div block to display the contents  -->
        <div class="col-lg-3 col-sm-12  col-md-12  ">
            <div class="card  cardeffect card-subj shadow p-3 mb-5 bg-white rounded  aos-init aos-animate"
                data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="800">
                <a href="<?php echo $vidurl;?>"> <img class="card-img-top" src="<?php   echo $vidimage;?>"
                        alt="Card image cap"></a>
                <div class="card-body">
                    <a href="<?php echo $vidurl;?>" style="text-transform: capitalize;"> <?php echo $vidtitle;?></a>
                    <div class="d-flex bd-highlight mb-3">
                        <div class="p-2 bd-highlight cardsmall"> <a href="<?php echo $vidurl;?>"
                                style="text-transform: capitalize;">Chapter <?php echo $chapter;?></a> </div>


                        <div class="ml-auto p-2 bd-highlight cardsmall "> <a href="<?php echo $vidurl;?>"
                                style="text-transform: capitalize;"><?php echo $class;?></a> </div>
                    </div>


                    <div class="d-flex bd-highlight mb-3">
                        <div class="p-2 bd-highlight cardsmall" style="text-transform: capitalize;">Medium :
                            <?php  echo  $medium;?> </div>


                        <div class="ml-auto p-2 bd-highlight cardsmall" style="text-transform: capitalize;">
                            <?php echo $vidsubj	;?> </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
             ?>

<!-- display the contents ends -->

    </div>
</section>
 
<section id="subjects">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="alert alert-primary" role="alert" style="text-transform: capitalize;">
                    ഓരോ subject ലും click ചെയ്തു കൂടുതൽ വീഡിയോസ് കാണാവുന്നതാണ്
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class=" text-right alert alert-primary" role="alert"> <a href="#" class="alert-link">Click subject
                        card to see more. </a></div>
            </div>

        </div>

    </div>
</section>

<!-- Portfolio start -->
<section class=" portfolio ">
    <div class="row">
        <?php
            /**
             * display the subject names in the cards
             */
            foreach ($subjpages as $k) {
                $subjtitle= $k->title;
                $sub=$k->subjectname->title;
				$noofvideossub=$pages->count("template=singlevideo, subjectname=$sub");
        ?>
        <div class="col-lg-3 col-sm-12  col-md-12  ">
            <div class="card  cardeffect card-subj shadow p-3 mb-5 bg-white rounded  aos-init aos-animate"
                data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="500">
                <a href="<?php echo $classesListPageLink.'?sub='.$subjtitle;?>"> <img class="card-img-top"
                        src="<?php   echo $k->images->first()->url;?>" alt="Card image cap"></a>
                <div class="card-body">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="p-2 bd-highlight cardsmall" style="text-transform: capitalize;">Videos Added :
                            <?php  echo  $noofvideossub;?> </div>
                        <div class="ml-auto p-2 bd-highlight cardsmall" style="text-transform: capitalize;"> </div>
                    </div>


                </div>
            </div>
        </div>
        <?php
            }
             ?>

    </div> <!-- end of row -->

</section>
<!-- Portfolio End -->
<!-- a bot display to display the latest activity from the team -->
<bhimbot>
    <div id="gabywa"></div>
    <div class="profile_div" id="dragItem">
        <div class="row">
            <div class="bhimbotstage" id="bhimbotstage">
                <div class="bhimbotcubespinner">
                    <?php
                        $newsitem=$pages->find("template=newssingle,sort=-created,limit=6");
                        $i=1;
                     foreach($newsitem as $item){?>
                    <div class="bhimbotface<?php echo $i;?> bhimbotface">
                        <div class="bhimbotTopBar"> <span class="bhimbotPoweredBy">Bhim Online</span> </div>
                        <div class="bhimbotContent">
                            <div class="bhimbotSummary">
                                <span class="bhimbotLocation" id="bhimbotWorldCases"><a href="<?php echo $item->url;?>">
                                        <?php echo $item->title;?></a> </span>

                            </div>
                        </div>
                        <div class="bhimbotBottomBar bhimbotBottomBarLive"> <span class="">Update</span> </div>
                    </div>
                    <?php $i++; }
                     ?>

                </div>
                <div class="bhimbotclose" id="bhimbotClose"> </div>
            </div>

        </div>
    </div>
</bhimbot>
<!-- a bot display to display the latest activity from the team ends -->

<?php include('./_foot.php'); // include footer markup ?>