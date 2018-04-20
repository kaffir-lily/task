<?
date_default_timezone_set("Asia/shanghai");
$date1=strtotime("now");
$date2=strtotime("22 December 2018");
echo "考研日期：".date("Y-m-d",$date2);
echo "<br/>今天日期：".date("Y-m-d",$date1);
$num=ceil(($date2-$date1)/(60*60*24));
echo "<br/>距考研还有".$num."天";
?>
