<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
  <?php 
  $a = "가나다라 $^&((*&하하";
  echo $a;
  echo "<br/>";
  echo urlencode($a);
  $b = urlencode($a);
  echo $b;
  echo "<br/>";
  echo urldecode($b);
  ?>
  a11aaaaaaaaaa23
 </body>
</html>
