<html>
    <body>
    <link rel="stylesheet" href="./rlstyle.css">
<?php
session_start();
$fname=$_POST["vote"];
$contact=$_SESSION['contact'];
$f=fopen('voted.txt',"a+");
$s=fread($f , filesize("voted.txt"));
$pos=strpos($s,$contact);
if(!$pos){
    fwrite($f,$contact."\r\n");
    fclose($f);
$file=fopen($fname, "r");
$val=fread($file, filesize($fname));
fclose($file);
$file=fopen($fname, "w");
$val=$val+1;
fwrite($file, $val);
fclose($file);
header("Location:success.php");
}
else{
    header("Location:alreadyvoted.php");
}
?>
</body>
</html>