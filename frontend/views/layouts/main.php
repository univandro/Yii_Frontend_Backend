<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
 <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

   <title><?php  echo CHtml::encode($this->pageTitle); ?></title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php echo bu(); ?>/css/style.css">
       <link rel="stylesheet" href="<?php  echo bu(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo bu(); ?>/css/responsive.css">
   <link rel="stylesheet" href="<?php echo bu(); ?>/css/responsive_custom.css">

      <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
<link rel="shortcut icon" href="<?php echo bu(); ?>/favicon.ico" type="image/x-icon" />
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="<?php echo bu(); ?>/../common/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
   
    <?php echo $content; ?>

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo bu(); ?>/../common/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script  or some other way-->
  <script src="<?php echo bu(); ?>/js/plugins.js"></script>
  <script src="<?php echo bu(); ?>/js/script.js"></script>
   <!-- <script src="<?php echo bu(); ?>/js/libs/jquery.mobilemenu.min.js"></script>only if you don't use bootstrap navbar and  want to make a basic menu responsive -->
  <script src="<?php echo bu(); ?>/../common/bs/js/bootstrap-alert.js"></script>
    <script src="<?php echo bu(); ?>/../common/bs/js/bootstrap-dropdown.js"></script>
     <script src="<?php echo bu(); ?>/../common/bs/js/bootstrap-collapse.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>