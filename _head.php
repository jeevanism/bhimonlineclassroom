<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php   
        /**
         * Prepare the OpenGraph values to share with social media
         */
         $ogurl= $page->httpUrl(); // to get the URL of the current  page
         if( $page->template->name =='singlevideo' )
            {
                   $ogimg = $page->images->first()->httpUrl(); // OG image  supports 1200 x 630 img, so make sure the image fits in the size
                   $ogdesc=$page->summary;// get the page summary
             }
              else{
                  $ogimg= 'http://bhimonlineclassroom.in/site/templates/images/bhimog.jpg'; // if there is no page image, fall back to default image
                   $ogdesc= 'bhim online classroom - '.$page->summary;// append the this message to page summary 
                  } 
         ?>
        <!--Meta Info  -->
        <title><?php echo $page->summary. ' - ';?>Bhim Online Classroom - ഭീം ഓണ്‍ലൈന്‍ ക്ലാസ് റൂം</title>
        <meta name="title" content="<?php echo $page->summary. ' - ';?>Bhim Online Classroom - ഭീം ഓണ്‍ലൈന്‍ ക്ലാസ് റൂം" />
        <meta name="description" content="<?php echo $ogdesc;?>" />
        <meta name="keywords" content="Bhim Online Classroom, Kerala Online Education, Bhim Online Education,ഭിം  ഓൺലൈൻ  ക്ളാസ്സ്‌റൂം, ഭീം ഓണ്‍ലൈന്‍ ക്ലാസ് റൂം, ഭീം  ഓൺലൈൻ  ക്ലാസ്സ്‌റൂം  " />
        <meta name="robots" content="index, follow" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="English" />
        <meta name="revisit-after" content="3 days" />
        <meta name="author" content="Jeevanism" />
        <!--favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $config->urls->templates?>images/favicon/apple-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $config->urls->templates?>images/favicon/apple-icon-60x60.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $config->urls->templates?>images/favicon/apple-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $config->urls->templates?>images/favicon/apple-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $config->urls->templates?>images/favicon/apple-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $config->urls->templates?>images/favicon/apple-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $config->urls->templates?>images/favicon/apple-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $config->urls->templates?>images/favicon/apple-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $config->urls->templates?>images/favicon/apple-icon-180x180.png" />
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $config->urls->templates?>images/favicon/android-icon-192x192.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $config->urls->templates?>images/favicon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $config->urls->templates?>images/favicon/favicon-96x96.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $config->urls->templates?>images/favicon/favicon-16x16.png" />
        <link rel="manifest" href="<?php echo $config->urls->templates?>images/favicon/manifest.json" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="<?php echo $config->urls->templates?>images/favicon/ms-icon-144x144.png" />
        <meta name="theme-color" content="#ffffff" />
        <!--facebook Open Graph -->
        <!-- Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
        <!--https://developers.facebook.com/tools/debug/-->
        <meta property="og:url" content="<?php echo $ogurl;?>" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Bhim Online Class Room" />
        <meta property="og:description" content="<?php echo $ogdesc;?>" />
        <meta property="og:image" content="<?php echo $ogimg;?>" />
        <!-- Twitter Card Graph https://developer.twitter.com/en/docs/tweets/optimize-with-cards/overview/summary -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@bhimonlineclassroom" />
        <meta name="twitter:creator" content="@bhimonlineclassroom" />
        <meta name="twitter:title" content="Bhim Online Class Room" />
        <meta name="twitter:description" content="<?php echo $ogimg;?>" />
        <meta name="twitter:image" content="<?php echo $ogimg;?>" />
        <meta name="twitter:url" content="http://bhimonlineclassroom.in" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo $config->urls->templates?>plugins/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo $config->urls->templates?>plugins/counto/animate.css" />
        <link rel="stylesheet" href="<?php echo $config->urls->templates?>plugins/aos/aos.css" />
        <link rel="stylesheet" href="<?php echo $config->urls->templates?>plugins/owl-carousel/owl.carousel.min.css" />
        <link rel="stylesheet" href="<?php echo $config->urls->templates?>plugins/owl-carousel/owl.theme.default.min.css" />
        <link rel="stylesheet" href="<?php echo $config->urls->templates?>plugins/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="<?php echo $config->urls->templates?>plugins/animated-text/animated-text.css" />
        <link rel="stylesheet" href="<?php echo $config->urls->templates?>css/aos.css" />
        <link rel="stylesheet" href="<?php echo $config->urls->templates?>css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Manjari&family=Nunito&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo $config->urls->FieldtypeComments?>comments.css" />
        <!-- Main Stylesheet -->
        <link href="<?php echo $config->urls->templates?>css/style.css" rel="stylesheet" />
        <!-- jQuery -->
        <script src="<?php echo $config->urls->templates?>js/jquery351.js"></script>
        <!-- Bootstrap JS -->
        <script src="<?php echo $config->urls->templates?>plugins/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $config->urls->FieldtypeComments?>comments.min.js"></script>
        <script type="text/javascript" src="<?php echo $config->urls->FieldtypeComments?>comments.js"></script>
        <script src="<?php echo $config->urls->templates?>plugins/aos/aos.js"></script>
        <script src="<?php echo $config->urls->templates?>plugins/animated-text/animated-text.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167457201-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "UA-167457201-1");
        </script>
    </head>
    <?php
    /**
 * Author : Jeevan 
 * Url : https://jeevanism.com
 * Project : https://www.bhimonlineclassroom.in 
 * Period : March 2020 - May 2020 
 * File : Home page 
 */
      include ('pagelinks.php');// get the inner page links
       ?>
    <body>
        <!-- Navigation Start -->
        <!-- Header Start -->
        <nav class="navbar navbar-expand-lg main-nav" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $homepagelink;?>">
                    <img src="<?php echo $config->urls->templates?>images/logo-final.png" alt="" class="img-fluid" />
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample09">
                    <ul class="navbar-nav ml-auto">
                        <?php include('mainmenu.php');// get the navbar menu prepared  ?>
                    </ul>
                </div>
                <div class="pm-button">
                    <a href="<?php echo $donatepagelink;?>"><img src="https://www.bhimonlineclassroom.in/images/donate.jpg" /></a>
                </div>
            </div>
        </nav>
        <!-- Header Close -->
        <!-- Navigation ENd -->
     
    </body>
</html>
