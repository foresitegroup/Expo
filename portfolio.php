<?php
$PageTitle = "Portfolio";
$SideMenu = "m5";
include "header.php";
?>

<h1>Portfolio</h1>


<script type="text/javascript" src="images/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="images/fancybox/jquery.easing-1.4.pack.js"></script>
<script type="text/javascript" src="images/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<link rel="stylesheet" href="images/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script language="javascript">
  $(document).ready(function(){
    $("a.fancybox").fancybox();
  });
</script>

<?php
$dir = "images/portfolio/";
$imagedir = scandir($dir);

foreach($imagedir as $file) {
  if (end(explode(".", $file)) == "png" || end(explode(".", $file)) == "jpg" || end(explode(".", $file)) == "gif") $images[] = $file;
}

natcasesort($images);

foreach($images as $image) {
  echo "<a href=\"$dir/$image\" class=\"fancybox\" rel=\"portfolio\"><img src =\"$dir/$image\" alt=\"\"></a>";
}
?>

<?php include "footer.php"; ?>