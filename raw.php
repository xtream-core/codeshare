<?php

#Raw Text

// Check Post
if (isset($_POST['fndcode']) && !empty($_POST['fndcode'])) { 



// Get the uid
$uid = $_POST['fndcode'];

header("Location: http://paste.xsys.tk/tmp/".$uid.".txt");
}else{  
die("Error Fetching File!");
}

?>
