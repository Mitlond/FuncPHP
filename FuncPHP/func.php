<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
<title></title>
</head>
<body>
<?php
for ($i=0,$x=0; $x<16; $x++){
for ($y=0; $y<16;$y++){
	$chars[$x] [$y] = array($i,chr($i));
	$i++;
}	
}
?>
<table border=1 cellpadding=1 cellspacing=0>
<?foreach($chars as $row) { ?>
<tr>
<?foreach($row as $cell) {?>
<td>
<?=$cell[0] ?>:
<b><tt><?=$cell[1]?></tt></b>
</td>
<?}?>
</tr>
<?}?>
</table>
<?php

echo str_repeat("Elros", 10);
?>
 <?php

$text = "\t\t I am fell sexy and free :)   ";

echo trim($text);           
echo trim($text, " \t."); 
$clean = trim($binary, "\x00..\x1F");

?> 
 <?php
$str = "\n";
if (ord($str) == 10) {
    echo "Первый символ \$str - перевод строки.\n";
}
?> 
 <?php


?> 

</body>
</html>