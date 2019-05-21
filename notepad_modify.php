<?php
 //echo $_POST["textarea"]; 
 $buffer=$_POST["textarea"];
 $myfile = fopen("note.txt", "w") or die("Unable to open file!");
 fwrite($myfile, $buffer);
 fclose($myfile);
 echo "Submit Scucessfully!"
?>