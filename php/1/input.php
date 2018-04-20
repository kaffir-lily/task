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
    please input yourmessage:<br/><br/>
    <textarea name="txt" rows="1" cols="80"></textarea>
    <input type="submit" name="sub1" value="提交">
  </form>

  <table border="1px solid">
    <tr>
      <td>姓名</td>
      <td>年龄</td>
      <td>性别</td>
    </tr>
    <?php
      if($_POST['sub1']){
        $str=$_POST['txt'];
        $arr=explode(" ",$str);
        echo "<tr>";
        echo "<td>".$arr['1']."</td>";
        echo "<td>".$arr['2']."</td>";
        echo "<td>".$arr['3']."</td>";
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>
