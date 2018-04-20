<?php
$a="一二三四五六七八九十";
$b1=mb_substr($a,2);
$b2=mb_substr($a,2,4);
$b3=mb_substr($a,-4);
$b4=mb_substr($a,-4,8);

echo "<br/>".$b1;
echo "<br/>".$b2;
echo "<br/>".$b3;
echo "<br/>".$b4;
?>
