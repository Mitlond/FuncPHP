<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
<title></title>
</head>
<body>
<?php
$str     = "Строка 1\nСтрока 2\rСтрока 3\r\nСтрока 4\n";
$order   = array("\r\n", "\n", "\r");
$replace = '<br />';
echo $newstr = str_replace($order, $replace, $str);
$search  = array('A', 'B', 'C', 'D', 'E');
$replace = array('B', 'C', 'D', 'E', 'F');
$subject = 'A';
echo str_replace($search, $replace, $subject);
$letters = array('я', 'о');
$fruit   = array('яблоко', 'орех');
$text    = 'я о';
$output  = str_replace($letters, $fruit, $text);
echo $output;
?>

 <?php
$str = 'abcdef';
echo strlen($str); 
$str = ' ab cd ';
echo strlen($str); 
?> 

<?php
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

if ($pos !== false) {
     echo "Строка '$findme' найдена в строке '$mystring'";
         echo " в позиции $pos";
} else {
     echo "Строка '$findme' не найдена в строке '$mystring'";
}
?>

<?php
    
echo substr('abcdef', 1, 3);  // bcd
echo substr('abcdef', 0, 8);  // abcdef
echo substr('abcdef', -1, 1); // f

$string = 'abcdef';
echo $string[0];                 // a
echo $string[3];              // d
echo $string[strlen($string)-1]; // f
?>

<?php
echo '<a href="mycgi?foo=', urlencode($userinput), '">';
?>

<?php
$query = "my=apples&are=green+and+red";

foreach (explode('&', $query) as $chunk) {
    $param = explode("=", $chunk);

    if ($param) {
        printf("Value for parameter \"%s\" is \"%s\"<br/>\n", urldecode($param[0]), urldecode($param[1]));
    }
}
?>
 <?php
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
?> 
</body>
</html>