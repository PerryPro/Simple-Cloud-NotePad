<?php
 //echo $_POST["textarea"]; 
 if($_POST["FilePath"]=="")
 {
 	$buffer="\n******************************\n".$_POST["textarea"]."\n";
 	$myfile = fopen("note.txt", "a") or die("Unable to open file!");
 	fwrite($myfile, $buffer);
 	fclose($myfile);
 	echo "Add Note Scucessfully!<br>";
 	echo "Now Going To NotePad";
 	header("Refresh:1;url=index.html");
 }
 else
 {
 	$buffer="\n******************************\n".$_POST["textarea"]."\n";
 	if(!file_exists($_POST["FilePath"]))
 	{
 		mkdir($_POST["FilePath"]);
 	}
 	$filepath=$_POST["FilePath"]."\\note.txt";
 	$myfile = fopen($filepath, "a") or die("Unable to open file!");
 	fwrite($myfile, $buffer);
 	fclose($myfile);
 	$filepath=$_POST["FilePath"]."\\index.html";
 	if(!file_exists($filepath))
 	{
 		copy("index.html",$_POST["FilePath"]."\\index.html");
 		copy("get_note.php",$_POST["FilePath"]."\\get_note.php");
 		copy("modify.html",$_POST["FilePath"]."\\modify.html");
 		copy("notepad_action.php",$_POST["FilePath"]."\\notepad_action.php");
 		copy("notepad_modify.php",$_POST["FilePath"]."\\notepad_modify.php");
 	}
 	echo "Add Note Scucessfully!<br>";
 	echo "Now Going To NotePad";
 	$code="Refresh:1;url=".$_POST["FilePath"]."\\index.html";
 	header($code);
 }
?>