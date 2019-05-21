<?php
 //echo $_POST["textarea"]; 
 $buffer=$_POST["textarea"];
 $myfile = fopen("note.txt", "w") or die("Unable to open file!");
 fwrite($myfile, $buffer);
 fclose($myfile);
 echo "Modify Scucessfully!<br>";
 echo "Now Going To NotePad";
 header("Refresh:1;url=index.html")
?>