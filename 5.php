<?php
$string = "hari apa saja saya bisa";
$string2 = "cepat kerjakan!!!";

 echo $string;
 echo "<br>";
foreach (count_chars($string, 1) as $i => $val)
{
	if ($val > 2) {
  	 echo "Output \"" , chr($i) , "\" : $val<br>";
   }
}
 echo "<br>";
 echo "<br>";

 echo $string2;
 echo "<br>";
foreach (count_chars($string2, 1) as $i => $val)
{
	if ($val > 1) {
  	 echo "Output \"" , chr($i) , "\" : $val<br>";
   }
}
?>