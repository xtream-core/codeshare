<?php
$ids = uniqid();
$fixu = "\"".$ids."\"";
$link = " http://paste.xsys.tk/tmp/".$ids.".txt";

require 'include/connect.php';
// Connecting to the MySQL database with PDO
$conn = new PDO($dsn, $user, $password);
$username = $_POST['textbox'];
$ead = $_POST['email'];

// Create text file
$F = fopen("./tmp/".$ids.".txt" , 'w');   // open for write
$delim = "\t";   // set delim, eg tab
fwrite($F, $username."\n"."\n"."Email Address: ".$ead."\n"."UID: ".$ids."\n"."Created at: http://paste.xsys.tk". "\n");
fclose($F); 

//Insert the text
$sqlInsert = "INSERT INTO `xdev` (`id`, `text`, `uid` ) VALUES (NULL, '$username', '$ids' );";
$preparedStatement = $conn->prepare($sqlInsert);
$preparedStatement->execute();
 
// Mail
#Mail Script
$subject = "Codeshare Paste: ".$ids;
$message = "Here is a direct link to your Codeshare:"."\n".$link."\n"."\n"."Created at: http://paste.xsys.tk". "\n" ;


$headers = "From: paste@xsys.tk" . "\r\n" .
    "Reply-To: paste@xsys.tk" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

mail($ead, $subject, $message, $headers);

echo "Entered data successfully\n"."<br />";
printf("Your Unique id: %s\r\n", $ids);
echo "<br />"."A direct link to the raw text has been send to: ".$ead;

?>
<html>
<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="icon" type="image/png" href="/logo_base.png" sizes="16x16">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>YOURNAME - CodeShare</title>
</head>
<br />
<br />
<br />
<br />
<h2>YOURNAME - CodeShare - Stored</h2>
<br />
<br />
<br />
<br />
<p class="wsite"><a href="/find.php">View a Unique ID </a>
<br />
<br />
<p class="wsite"><a href="/index.php">Create another CodeShare?</a>
</body>
</html>
