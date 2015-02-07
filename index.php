<?php

?>

<html>
<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="icon" type="image/png" href="/logo_base.png" sizes="16x16">
<head>
<link rel="stylesheet" type="text/css" href="cs.css">
<title>YOURNAME - CodeShare</title>
</head>
<h2>Xdev - CodeShare</h2>
<form method="post" action="cslink.php">
<input disabled  maxlength="3" size="3" value="1000" id="counter">
<div class="divs">
<textarea onkeyup="textCounter(this,'counter',1000);" id="message" cols="100" rows="20" align="right" name="textbox" maxlength="1000" class="boxt" style="width:100%">
</textarea>
Email Address:<input type="text" name="email">
</div>
<script>
function textCounter(field,field2,maxlimit)
{
 var countfield = document.getElementById(field2);
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit );
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}
</script>
<br />
<br />
<br />
<input type="submit" value="Share your Code" class="button" />
</form>
<footer>
<br />
<p class="fot">Xdev - CodeShare: Powered by <a href="http://xsys.tk">Xsystems</a></p>
<p class="wsite"><a href="http://xsys.tk">Xsystems © 2014 </a>
</footer>
</html>
</html>
