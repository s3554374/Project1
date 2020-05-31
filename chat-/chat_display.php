<html>
<head>
<meta http-equiv="refresh" content="1;url=chat_display.php">

</head>
<body>
<?php
  if($db==null)
  {
   include'db_config.php';
  }
  
  $sql = "select * from chat order by chattime;";
  $result = mysqli_query( $db,$sql);
  $rows = mysqli_num_rows($result);
  mysqli_data_seek($result, $rows-15); //取最近插入的15条数据 get 15 newest data
  if ($rows<15)
    $l = $rows;
  else  
    $l = 15;
  for ($i = 1; $i <= $l; $i++) {    //输出这15条数据 out put 15 newest data
    list($chattime, $nick, $words) = mysqli_fetch_row($result);
   
    echo " ".$nick.": ";
    echo $words;
    echo "<br>";
  }
?>
</body>

</html>