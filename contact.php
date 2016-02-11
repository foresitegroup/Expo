<?php
$PageTitle = "Contact";
$SideMenu = "m7";
include "header.php";
?>

<h1>Contact</h1>

<?php
if (isset($_POST['submit'])) {
  $SendTo = "expomilwaukee@gmail.com";
  $Subject = "Contact";
  $From = "From: Contact From Website <noreply@expomilwaukee.com>\r\n";
  
  $Message = $_POST['name'] . "\n";
  if (!empty($_POST['company'])) $Message .= $_POST['company'] . "\n";
  if (!empty($_POST['email'])) $Message .= $_POST['email'] . "\n";
  if (!empty($_POST['phone'])) $Message .= $_POST['phone'] . "\n";
  if (!empty($_POST['contact'])) $Message .= "Preferred method of contact: " . $_POST['contact'] . "\n";
  
  $Message .= "\n";
  
  if (!empty($_POST['comment'])) $Message .= "Comment or Question:\n" . $_POST['comment'] . "\n";
  
  $Message = stripslashes($Message);
  
  mail($SendTo, $Subject, $Message, $From);
  //echo "<pre>".$Message."</pre>";
  
  echo "Your information has been sent!  Thank you for your interest in Expo Milwaukee.  If you need immediate service please call 414-727-9456.<br>";
} else {
?>

Call or email us for any of your Trade Show needs.  Use our convenient <a href="quote-request.php">RFQ form</a> if you would like to give us a detailed account of your needs.<br>
<br>
<br>

<div style="float: left;">
  <strong>Mark Hokanson</strong><br>
  President<br>
  Phone: 414-727-9456<br>
  E-mail: <?php email("mark@expomilwaukee.com"); ?><br>
  <br>

  <strong>Kris Hokanson</strong><br>
  Phone: 414-727-9456<br>
  E-mail: <?php email("expomilwaukee@gmail.com", "kris@expomilwaukee.com"); ?><br>
  <br>

  <strong>Expo Milwaukee</strong><br>
  Suite 304<br>
  2018 S 1st Street<br>
  Milwaukee, Wisconsin 53207<br>
  <br>
  
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11670.484868271855!2d-87.91277068388409!3d43.00730990197141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880519dc5b0a56fb%3A0x8c18f50ce6065f24!2s2018+S+1st+St%2C+Milwaukee%2C+WI+53207!5e0!3m2!1sen!2sus!4v1455212421470" width="280" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<script type="text/javascript">
  <!--
  function checkRadio(field) { for(var i=0; i < field.length; i++) { if(field[i].checked) return field[i].value; } return false; }
  
  function checkform (form) {
    if (form.name.value == "") { alert('Name required.'); form.name.focus(); return false; }
    if ((checkRadio(form.contact) == "email") && (form.email.value == "")) { alert('Email required.'); form.email.focus(); return false; }
    if ((checkRadio(form.contact) == "phone") && (form.phone.value == "")) { alert('Phone required.'); form.phone.focus(); return false; }
    return true;
  }
  //-->
</script>

<form action="contact.php" method="POST" onSubmit="return checkform(this)" style="float: right;">
  <div>
    <h4>Contact Us</h4><br>
    
    <div style="float: left; width: 60px;"><strong>Name</strong></div>
    <input type="text" name="name" style="width: 200px;"><br>
    <br>
    
    <div style="float: left; width: 60px;"><strong>Company</strong></div>
    <input type="text" name="company" style="width: 200px;"><br>
    <br>
    
    <div style="float: left; width: 60px;"><strong>Email</strong></div>
    <input type="text" name="email" style="width: 200px;"><br>
    <br>
    
    <div style="float: left; width: 60px;"><strong>Phone</strong></div>
    <input type="text" name="phone" style="width: 200px;"><br>
    <br>
    
    <strong>Preferred method of contact</strong><br>
    <input type="radio" name="contact" value="phone"> Phone
    <input type="radio" name="contact" value="email" style="margin-left: 40px;"> Email<br>
    <br>
    
    <strong>Comment or Question</strong><br>
    <textarea name="comment" rows="8" cols="30" style="width: 260px; height: 232px;"></textarea><br>
    <br>
    
    <input type="submit" name="submit" value="Submit" style="display: block; margin: 0 auto; font-weight: bold;">
  </div>
</form>

<div style="clear: both; height: 30px;"></div>

<div style="float: left; width: 33%; text-align: center; font-size: 20px; font-weight: bold;">
  Member of the<br>
  <img src="images/mmac.jpg" alt="MMAC">
</div>

<div style="float: left; width: 33%; text-align: center;">
  <img src="images/made-in-usa.jpg" alt="Made in USA">
</div>

<div style="float: right; width: 33%; text-align: center;">
  <img src="images/credit-cards.jpg" alt="">
</div>

<?php } ?>

<?php include "footer.php"; ?>