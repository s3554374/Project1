
<?php
  if(!$db)
  {
   include'db_config.php';
  }
 $sql = "select * from chat order by chattime;";
  $result = mysqli_query( $db,$sql);
  $rows = mysqli_num_rows($result);
  mysqli_data_seek($result, $rows-15); //取最近插入的15条数据 get 15 newest data
  if ($rows < 15) 
    $l = $rows;
  else
    $l = 15; 
  $string = ""; 
  for ($i = 1; $i <= $l; $i++) {
    list($chattime, $nick, $words) = mysqli_fetch_row($result);
   
    $string.=" ";
    $string.=$nick;
    $string.=" ";
    $string.=$words;
    $string.="<br>";
  }
  echo $string; 
?>
