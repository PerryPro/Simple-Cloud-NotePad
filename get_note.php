<head>
<meta charset="utf-8">
<title>View Note</title>
<style type="text/css">
.head {
	font-size: 24px;
	font-family: "Microsoft YaHei";
}
.content{
	font-size: 20px;
	font-family: "Microsoft YaHei";
}
#form1 {
	height: 400px;
}
.txtfield {
	height: 400px;
	width: 100%;
	font-family: "Microsoft YaHei";
	font-size: 24px;
}
.button {
	text-align: center;
	font-family: "Microsoft YaHei";
}
.head p a {
	text-decoration: none;
}
.head p a:visited {
	text-decoration: none;
	color: #00F;
}
</style>
</head>

<body class="head">
<p>This is a <a href="index.html">NotePad </a>|&nbsp;Now you are viewing notes.</p>
</body>
<div class="content">
<?php
$myfile = fopen("note.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
</div>