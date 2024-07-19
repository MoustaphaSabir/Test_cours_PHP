 <?php

//Ip utilisateur 
echo $_SERVER['REMOTE_ADDR'] . "\n";
echo'<br/>';
// Date courante
$ip = $_SERVER['REMOTE_ADDR'];
$date = date ("Y-m-d H:i:s"); 
echo $date;
$file = fopen("journal.txt", "a");
$txt = $ip  .''.  $date . "\n";
fwrite($file, $txt);
fclose($file);

?>