<?php
function email($address, $name="") {
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  
  <title>Expo Milwaukee<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
  <meta name="description" content="Expo Milwaukee, a proud dealer of portable and modular displays. We specialize in the design, manufacturing and servicing of trade show displays, mall kiosks, sales centers and more. We are dedicated to placing your company's image first.">
  <meta name="keywords" content="trade show displays, trade show display, trade show exhibits, trade show exhibit, trade show booths, trade show booth, trade show,  stands, trade show stand, banner stands, banner stand, custom exhibits, custom fabricated exhibit, rental exhibits, rent an exhibit, display rentals, innovative exhibit design, custom designs, exhibit graphics, graphic design services, sales, exhibit management, exhibit management services, pack and ship, portable displays, island displays, custom interiors, exhibit marketing, , show booth displays, Banner stands, pop-up displays, modular displays, convention exhibits, podiums, exhibit accessories, dealer support, industry leader, trade show advice, exhibit services,  Milwaukee, expo Milwaukee">
  <meta name="author" content="Foresite Group">
  
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="inc/em2012.css" type="text/css" media="screen,print">
  <link rel="stylesheet" href="inc/jquery.datepicker.css" type="text/css" media="screen,print">
  <?php if ($SideMenu != "") { ?>
  <style type="text/css">
    #sidebar UL LI.<?php echo $SideMenu; ?>,
    #sidebar UL LI.<?php echo $SideMenu; ?> UL LI {
      display: block;
    }
  </style>
  <?php } ?>
  
  <script type="text/javascript" src="inc/jquery-1.5.1.js"></script>
  <script type="text/javascript" src="inc/jquery.cycle.all.js"></script>
  <script type="text/javascript" src="inc/jquery.datepicker.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      $("#slideshow").cycle({ fx: 'fade', speed: 'fast', timeout: 0, next: '#navright', prev: '#navleft' });
      $("#needdate").datepicker({ dateFormat: 'mm-dd-yy', showOn: "button", buttonImage: "images/datepicker/calendar.png", buttonImageOnly: false });
      if ($('#sidebar UL LI.<?php echo $SideMenu; ?> UL').length == "0") { $('#sidebar UL').css("display", "none"); }
    });
  </script>
  <!--[if lt IE 8 ]>
  <script type="text/javascript" src="inc/IE8.js"></script>
  <![endif]-->
  <!--[if lt IE 7 ]>
  <script type="text/javascript" src="inc/dd_belatedpng.js"></script>
  <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
  <![endif]-->
  
  <!-- BEGIN Google Analytics -->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-31337245-1']);
    _gaq.push(['_trackPageview']);
  
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <!-- END Google Analytics -->
</head>
<body>

<div id="wrap">
  <a href="."><img src="images/logo.jpg" alt="Expo Milwaukee" id="logo"></a>
  
  <div id="top-menu-wrap">
    <div id="top-menu">
      <ul>
        <li><a href="contact.php">Contact</a></li>
        <li><a href=".">Home</a></li>
      </ul>
      
      <a href="https://www.facebook.com/pages/Expo-Milwaukee/219396671426203" id="facebook"></a>
    </div> <!-- END top-menu -->
  </div> <!-- END top-menu-wrap -->
  
  <div style="clear: both;"></div>
  
  <div id="main-menu">
    <?php include "menu.php"; ?>
    <div style="clear: both;"></div>
  </div> <!-- END main-menu -->
  
  <?php if ($PageTitle != "") { ?>
    <img src="images/header<?php if ($SideMenu != "") echo "-" . $SideMenu; ?>.jpg" alt="">
    <div id="content">
  <?php } ?>
      