<?php
 //echo $_POST["textarea"]; 
 $buffer="\n******************************\n".$_POST["textarea"]."\n";
 $myfile = fopen("note.txt", "a") or die("Unable to open file!");
 fwrite($myfile, $buffer);
 fclose($myfile);
 echo "Submit Scucessfully!"
?>