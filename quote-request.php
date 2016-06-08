<?php
$PageTitle = "Quote Request";
$SideMenu = "m6";
include "header.php";
?>

<h1>Quote Request</h1>

<?php
if (isset($_POST['submit'])) {
  $SendTo = "mark@expomilwaukee.com";
  $Subject = "Quote Request";
  $Headers = "Bcc: mark@foresitegrp.com\r\n";
  $Headers .= "From: " . $_POST['name'] . " <" . $_POST['email'] . ">\r\n";
  
  $Message = $_POST['name'] . "\n";
  if (!empty($_POST['email'])) $Message .= $_POST['email'] . "\n";
  if (!empty($_POST['phone'])) $Message .= $_POST['phone'] . "\n";
  if (!empty($_POST['contact'])) $Message .= "Preferred method of contact: " . $_POST['contact'] . "\n";
  
  $Message .= "\n";
  
  if (!empty($_POST['address'])) $Message .= $_POST['address'] . "\n";
  if (!empty($_POST['city'])) $Message .= $_POST['city'];
  if (!empty($_POST['city']) && !empty($_POST['state'])) $Message .= ", ";
  if (!empty($_POST['state'])) $Message .= $_POST['state'];
  if (!empty($_POST['city']) || !empty($_POST['state']) && !empty($_POST['zip'])) $Message .= " ";
  if (!empty($_POST['zip'])) $Message .= $_POST['zip'];
  if (!empty($_POST['city']) || !empty($_POST['state']) || !empty($_POST['zip'])) $Message .= "\n";
  
  $Message .= "\n";
  
  if (!empty($_POST['budget'])) $Message .= "Budget: " . $_POST['budget'] . "\n";
  if (!empty($_POST['boothsize'])) $Message .= "Booth Size: " . $_POST['boothsize'] . "\n";
  if (!empty($_POST['shows'])) $Message .= "Number of shows per year: " . $_POST['shows'] . "\n";
  if (!empty($_POST['needdate'])) $Message .= "Need Date: " . $_POST['needdate'] . "\n";
  
  $Message .= "\n";
  
  if (!empty($_POST['poi'])) $Message .= "Products of Interest: " . implode(", ",$_POST['poi']) . "\n";
  if (!empty($_POST['bc'])) $Message .= "Booth Characteristics: " . implode(", ",$_POST['bc']) . "\n";
  
  $Message .= "\n";
  
  if (!empty($_POST['details'])) $Message .= "Additional Details: \n" . $_POST['details'] . "\n";
  
  $Message = stripslashes($Message);
  
  mail($SendTo, $Subject, $Message, $Headers);
  //echo "<pre>".$Message."</pre>";
  
  echo "Your information has been sent!  Thank you for your interest in Expo Milwaukee.  You will be contacted within two business days. If you need immediate service please call 414-727-9456.<br>";
} else {

$states_arr = array('AL'=>"Alabama",'AK'=>"Alaska",'AZ'=>"Arizona",'AR'=>"Arkansas",'CA'=>"California",'CO'=>"Colorado",'CT'=>"Connecticut",'DE'=>"Delaware",'DC'=>"District of Columbia",'FL'=>"Florida",'GA'=>"Georgia",'HI'=>"Hawaii",'ID'=>"Idaho",'IL'=>"Illinois", 'IN'=>"Indiana", 'IA'=>"Iowa",  'KS'=>"Kansas",'KY'=>"Kentucky",'LA'=>"Louisiana",'ME'=>"Maine",'MD'=>"Maryland", 'MA'=>"Massachusetts",'MI'=>"Michigan",'MN'=>"Minnesota",'MS'=>"Mississippi",'MO'=>"Missouri",'MT'=>"Montana",'NE'=>"Nebraska",'NV'=>"Nevada",'NH'=>"New Hampshire",'NJ'=>"New Jersey",'NM'=>"New Mexico",'NY'=>"New York",'NC'=>"North Carolina",'ND'=>"North Dakota",'OH'=>"Ohio",'OK'=>"Oklahoma", 'OR'=>"Oregon",'PA'=>"Pennsylvania",'RI'=>"Rhode Island",'SC'=>"South Carolina",'SD'=>"South Dakota",'TN'=>"Tennessee",'TX'=>"Texas",'UT'=>"Utah",'VT'=>"Vermont",'VA'=>"Virginia",'WA'=>"Washington",'WV'=>"West Virginia",'WI'=>"Wisconsin",'WY'=>"Wyoming");

function showOptionsDrop($array) {
  $string = "";
  foreach($array as $k => $v) {
    $string .= "<option value=\"" . $k . "\"" . $s . ">" . $v . "</option>\n";
  }
  return $string;
}
?>

Please fill in the requested information in our Quote Request form. You will be contacted within two business days. If you need immediate service please call 414-727-9456.<br>
<br>
<br>

<script type="text/javascript">
  <!--
  function checkRadio(field) { for(var i=0; i < field.length; i++) { if(field[i].checked) return field[i].value; } return false; }
  
  function checkform (form) {
    if (form.name.value == "") { alert('Name required.'); form.name.focus(); return false; }
    if (form.email.value == "") { alert('E-mail required.'); form.email.focus(); return false; }
    if ((checkRadio(form.contact) == "phone") && (form.phone.value == "")) { alert('Phone required.'); form.phone.focus(); return false; }
    return true;
  }
  //-->
</script>

<form action="quote-request.php" method="POST" onSubmit="return checkform(this)">
  <div style="float: left;">
    <div style="float: left; width: 60px;"><strong>Name</strong></div>
    <input type="text" name="name" style="width: 200px;"><br>
    <br>
    
    <div style="float: left; width: 60px;"><strong>Email</strong></div>
    <input type="text" name="email" style="width: 200px;"><br>
    <br>
    
    <div style="float: left; width: 60px;"><strong>Company</strong></div>
    <input type="text" name="company" style="width: 200px;"><br>
    <br>
    
    <div style="float: left; width: 60px;"><strong>Address</strong></div>
    <input type="text" name="address" style="width: 200px;"><br>
    <br>
    
    <div style="float: left; width: 60px;"><strong>City</strong></div>
    <input type="text" name="city" style="width: 200px;"><br>
    <br>
    
    <div style="float: left; width: 60px;"><strong>State</strong></div>
    <select name="state">
      <option value="">Select...</option>
      <?php echo showOptionsDrop($states_arr); ?>
    </select><br>
    <br>
    
    <div style="float: left; width: 60px;"><strong>Zip Code</strong></div>
    <input type="text" name="zip" style="width: 50px;"><br>
    <br>
    
    <div style="float: left; width: 60px;"><strong>Phone</strong></div>
    <input type="text" name="phone" style="width: 200px;"><br>
    <br>
    
    <strong>Preferred method of contact</strong><br>
    <input type="radio" name="contact" value="phone"> Phone
    <input type="radio" name="contact" value="email" style="margin-left: 40px;"> Email
  </div>
    
  <div style="float: right;">
    <strong>Budget</strong>
    <select name="budget" style="margin: 0 0 2px 5px;">
      <option value="">Select...</option>
      <option value="$0 - $500.00">$0 - $500.00</option>
      <option value="$500.00 - $1,000.00">$500.00 - $1,000.00</option>
      <option value="$1,000.00 - $5,000.00">$1,000.00 - $5,000.00</option>
      <option value="$5,000.00 - $10,000.00">$5,000.00 - $10,000.00</option>
      <option value="$10,000.00 - $15,000.00">$10,000.00 - $15,000.00</option>
      <option value="$15,000.00 - $20,000.00">$15,000.00 - $20,000.00</option>
      <option value="$20,000.00 plus">$20,000.00 plus</option>
    </select><br>
    <br>
    
    <strong>Booth Size</strong>
    <select name="boothsize" style="margin: 0 0 2px 5px;">
      <option value="">Select...</option>
      <option value="10'x10'">10'x10'</option>
      <option value="10'x20'">10'x20'</option>
      <option value="10'x30'">10'x30'</option>
      <option value="20'x20'">20'x20'</option>
      <option value="Larger">Larger</option>
    </select><br>
    <br>
    
    <strong>Number of shows per year</strong>
    <input type="text" name="shows" style="margin-left: 5px; width: 30px;"><br>
    <br>
    
    <div style="float: left;"><strong>Need Date</strong></div>
    <input type="text" name="needdate" id="needdate" style="float: left; margin: 0 0 2px 5px; width: 70px;"><br>
    <br>
    
    <strong>Products of Interest</strong><br>
    <div style="float: left; padding-right: 25px;">
      <input type="checkbox" name="poi[]" value="Portables"> Portables<br>
      <input type="checkbox" name="poi[]" value="Modulars"> Modulars<br>
      <input type="checkbox" name="poi[]" value="Banner Stands"> Banner Stands
    </div>
    <div style="float: left;">
      <input type="checkbox" name="poi[]" value="Truss Works"> Truss Works<br>
      <input type="checkbox" name="poi[]" value="Table Tops"> Table Tops<br>
      <input type="checkbox" name="poi[]" value="Other"> Other
    </div>
    
    <div style="clear: both;"></div><br>
    
    <strong>Booth Characteristics</strong><br>
    <div style="float: left; padding-right: 25px;">
      <input type="checkbox" name="bc[]" value="Computer Stations"> Computer Stations<br>
      <input type="checkbox" name="bc[]" value="Flat Screens"> Flat Screens<br>
      <input type="checkbox" name="bc[]" value="A/V"> A/V<br>
      <input type="checkbox" name="bc[]" value="Literature Racks"> Literature Racks
    </div>
    <div style="float: left;">
      <input type="checkbox" name="bc[]" value="Furnishings"> Furnishings<br>
      <input type="checkbox" name="bc[]" value="Kiosks"> Kiosks<br>
      <input type="checkbox" name="bc[]" value="Flooring"> Flooring
    </div>
    
    <div style="clear: both;"></div>
  </div>
  
  <div style="clear: both;"></div><br>
  
  <div>
    <strong>Additional Details</strong><br>
    <textarea name="details" rows="8" cols="30" style="width: 580px; height: 115px;"></textarea><br>
    <br>
    
    <input type="submit" name="submit" value="Submit" style="display: block; margin: 0 auto; font-weight: bold;">
  </div>
</form>

<?php } ?>

<?php include "footer.php"; ?>