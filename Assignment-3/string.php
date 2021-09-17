<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//question 1
//1
$str="Hello World";
echo strtoupper($str);
//2
$str1="gauri";
echo strtolower($str1);
//3
$str2="how are you";
echo ucfirst($str2);
// 4
$str3="php is intresting ";
echo ucwords($str3) ;
//question2
$str4="082307";
echo substr(chunk_split($str4,"2",":"),0,-1);
//question 3
$str5 = 'The quick brown fox jumps over the lazy dog';
if (strpos($str5,'over') !== false) 
 {
    echo 'The specific word is present';
 }
else
 {
    echo 'The specific word is not present';
 }
//question 4
 $var_value=1234.890;
 echo var_dump(strval($var_value));
//question 5
 $str6="gauri@.com";
 echo substr($str6,-3);
//question 6
 $value1 = 65.45;
$value2 = 104.35;
echo sprintf("%1.2f", $value1+$value2);
//question7
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)

  

//question 9
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);

//question 10
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);




 
?>
</body>