<!-- Uppercase letter  -->
<?php
echo "UPPERCASE"." "."LETTER"."<br>";
$str = "Hello class b";
$str = strtoupper($str);
echo $str;
echo "<hr>";
//////////////////////////////////////////////////////////////////
echo "LOWERCASE"." "."LETTER"."<br>";
$str = "Hello Class B";
$str = strtolower($str);
echo $str;
echo "<hr>";
/////////////////////////////////////////////////////////////
echo "UPPERCASE"." "."FIRST"." "."LETTER"."<br>";
echo ucwords("hello class b");
echo "<hr>";
//////////////////////////////////////////////////////////////////
echo "UPPERCASE"." "."FIRST"."<br>";
echo ucfirst("hello class b");
echo "<hr>";
///////////////////////////////////////////////////////////////////
echo "SPLIT"." "."STRING"."<br>";
$str2 = "082307";
$array=(str_split($str2,2));
echo implode(":",$array);
echo "<hr>";
//////////////////////////////////////////////////////////////////
echo "CHECK"." "."STRING"."<br>";
$str3 = "The quick brown fox jumps over the lazy dog";
$checkword="jumps";
if(strpos($str3, $checkword) == true){
    echo $checkword;
} else {
    echo "Not"." "."found";
}
echo "<hr>";
///////////////////////////////////////////////////////////////////
echo "VARIABLE"." "."TO"." "."STRING"."<br>";
$var1 = 167.3200;
echo strval($var1);
//echo gettype($var1);
echo "<hr>";
/////////////////////////////////////////////////////////////////////
echo "EXTRACT"." "."The"." "."USERNAME"."<br>";
$str4 = "WWW.Example..com/public_html/index.php";
echo strstr($str4,"in");
echo "<hr>";

// $url = 'www.example.com/public_html/index.php';
// $file_name = substr(strrchr($url, "/"), 1);
// echo $file_name."\n"; 
// echo '<br>';
// echo '<hr>';

///////////////////////////////////////////////////////////////////
echo "EXTRACT"." "."The"." "."E-mailID"."<br>";
$str5 = "Tala@example.com";
echo strstr($str5, '@', true);
echo "<hr>";
/////////////////////////////////////////////////////////////////
echo "EXTRACT"." "."LAST"." "."3-CHAR"."<br>";
$str5 = "Ayham@example.com";
echo substr($str5,-3);
echo "<hr>";
///////////////////////////////////////////////////////////////////

echo "FORMAT"." "."VALUE"."<br>";
$value1=65.45;
$value2=104.35;
echo number_format(($value1+$value2),2);
echo "<hr>";
//////////////////////////////////////////////////////////////////
echo "RANDOM"." "."VALUE"."<br>";
$str6="1234567890ABCDEFGHKLMNOPQRSEUVWXYZabcdefghijklmnopqrstuvwxyz";
echo substr(str_shuffle($str6),0,8);
echo "<hr>";
///////////////////////////////////////////////////////////////////
echo "REPLACE"." "."THE"."<br>";
$str7="The quick brown fox jumps over the lazy dog";
echo str_replace("The","That",$str7);
echo "<hr>";
//////////////////////////////////////////////////////////////////
echo "DIFFERENCE"."<br>";
$str8 = 'football';
$str9 = 'footboll';
$str_pos = strspn($str8 ^ $str9, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str8[$str_pos], $str9[$str_pos]);
echo "<hr>";
/////////////////////////////////////////////////////////////////
echo "STRING "."TO "."ARRAY"."<br>";
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp  above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("\n", $str);
var_dump($arra1);
echo "<hr>";
//////////////////////////////////////////////////////////////
echo "GET "."FILENAME "."COMPONENT"."<br>";
$fileName="https://www.orange.com/index.php";
$exten=pathinfo('https://www.orange.com/index.php');
echo basename($fileName,'.'.$exten['extension']);
echo "<hr>";
/////////////////////////////////////////////////////////////
echo "PRINT "."THE NEXT "."CHARECTER"."<br>";
// $stra="a";
// echo ++$stra ."<br>";
// $strz="z";
// echo ++$strz;

$cha = 'a';
$next_cha = ++$cha; 
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";

echo "<hr>";
/////////////////////////////////////////////////////////////
echo "REMOVE "."A PART OF "."STRING"."<br>";
$strrem="rayy@example.com";
echo trim ($strrem,"rayy@");
echo "<hr>";
////////////////////////////////////////////////////////////
echo "GET "."HEX "."DUMP"."<br>";
$str = 'rayy@example.com';
echo bin2hex($str)."\n";
echo "<hr>";
///////////////////////////////////////////////////////////
echo "INSERTT "."A STRING ". "<br>";
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
echo "<hr>";
//////////////////////////////////////////////////////////
echo "QUESTION 18". "<br>";
$s = 'The quick brown fox';
$arr2 = explode(' ',trim($s));
echo $arr2[0]."\n";
echo "<hr>";
// ///////////////////////////////////////////////////////
echo "QUESTION 19". "<br>";
$x = '000547023.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
echo "<hr>";
// ///////////////////////////////////////////////////////
echo "QUESTION 20". "<br>";
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";
echo "<hr>";
// ////////////////////////////////////////////////////////
echo "QUESTION 21". "<br>";
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/')."\n";
echo "<hr>";
// ///////////////////////////////////////////////////////
echo "QUESTION 22". "<br>";
$my_url = 'http://www.example.com/5478631';
echo substr($my_url, strrpos($my_url, '/' )+1)."\n";
echo "<hr>";
// ///////////////////////////////////
echo "QUESTION 23". "<br>";
$my_str1 = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str1)."\n";
echo "<hr>";
// ////////////////////////////////////////////////////////////
echo "QUESTION 24". "<br>";
$my_string2 = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string2), 0, 5))."\n";
echo "<hr>";
// ///////////////////////////////////////////////////////////
echo "QUESTION 25". "<br>";
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
  echo ' <br> ';
  echo '<hr>';

// //////////////////////////////////////////////////////////
echo "QUESTION 26". "<br>";
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"


?>


