<?php
$myfile = fopen("textFile.txt", "a") or die("Unable to open file!");
//$txt = "John Doe\n";
fwrite($myfile, $YourName);
//fwrite($myfile, ' ,  ');
// $txt = "Jane Doe\n";
fwrite($myfile, $WordToDisplay);
fclose($myfile);
// echo("<script>alert('Save Completed');</script>");
?>