<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    留言内容：
    <textarea name="txt1" rows="2" cols="15"></textarea>
    <input type="submit" name="sub1" value="提交">
  </form>
  <?php
    function Match_Str($str){
      $arr=array('苏丹红','瘦肉精','地沟油');
      for($i=0;$i<count($arr);$i++){
        $str=str_replace($arr[$i],"不安全食品",$str);
      }
      echo $str;
    }
    if($_POST['sub1']){
      Match_Str($_POST['txt1']);
    }
  ?>
</body>
</html>
