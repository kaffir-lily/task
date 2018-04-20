<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <table border="1px solid">
    <tr>
      <td>姓名</td>
      <td>年龄</td>
      <td>性别</td>
      <td>工作</td>
      <td>头像</td>
    </tr>

    <?php
      $name="风小小 沐沐 贝尔 尼克服 阜宁";
      $age="24 22 35 40 18";
      $sex="女 女 男 男 男";
      $job="teacher teacher Worker farmer teacher";
      $photo="images/1.jpg images/2.jpg images/3.jpg images/4.jpg images/5.jpg";

      $arrn=explode(" ",$name);
      $arra=explode(" ",$age);
      $arrs=explode(" ",$sex);
      $arrj=explode(" ",$job);
      $arrp=explode(" ",$photo);

      for($i=0;$i<count($arrn);$i++){
        if($i%2==0){
          echo "<tr style='background-color:cyan'>";
        }else{
          echo "<tr>";
        }
        echo "<td>".$arrn[$i]."</td>";
        echo "<td>".$arra[$i]."</td>";
        echo "<td>".$arrs[$i]."</td>";
        echo "<td>".$arrj[$i]."</td>";
        echo "<td><img src=".$arrp[$i]." width='20px' height='20px'></td>";
        echo "</tr>";
      }
    ?>

  </table>



</body>
</html>
