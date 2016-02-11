  
  <?php if ($PageTitle != "") { ?>
    </div> <!-- END content -->
    
    <div id="sidebar">
      <?php if ($SideMenu != "") include "menu.php"; ?>
      
      <?php include "side-spiffs.php"; ?>
    </div>
    
    <div style="clear: both;"></div>
    
    <a href="portfolio.php"><img src="images/banner.jpg" alt="" style="display: block; margin: 42px auto 0;"></a>
  <?php } ?>
</div> <!-- END wrap -->

<div id="footer-wrap">
  <div id="footer">
    <?php include "menu.php"; ?>
    
    <div id="contact">
      Expo Milwaukee<br>
      414-727-9456<br>
      <?php email("expomilwaukee@gmail.com", "kris@expomilwaukee.com"); ?><br>
      <br>
      2018 S 1st Street<br>
      Milwaukee, WI 53207<br>
    </div> <!-- END contact -->
    
    <div style="clear: both;"></div>
    
    <div style="text-align: center; font-size: 75%;">
      Copyright &copy <?php echo date("Y"); ?> Expo Milwaukee
    </div>
  </div> <!-- END footer -->
</div> <!-- END footer-wrap -->

<script type="text/javascript">
  $(window).bind("load", function() {
    if ($("#content").height() < $("#sidebar").height()) {
      $("#content").css({ height: $("#sidebar").height() });
    }
    if ($("#wrap").height() + $("#footer-wrap").height() < $(window).height()) {
      $("#footer-wrap").css({ position: "absolute", bottom: "0", width: "100%" });
    }
  });
</script>

</body>
</html>