<?php
$debug=TRUE;
session_start();
$user_info=$_SESSION["user_info"];
function get_hobby_arr($hobby)
{
$arr = explode(" ", (string)$hobby);
$arr = array_filter($arr); 

return $arr;


}
get_hobby_arr($user_info["hobby"]);

if(!$db)
{
include "../assets/includes/db_config.php";


}
echo "test output".$user_info["hobby"]."</br>";
$temp=get_hobby_arr($user_info["hobby"]);
echo "test ot".$temp[0];
//$sql = "SELECT * FROM customer WHERE hobby like '%{$temp}%' ";
$sql = "SELECT * FROM customer WHERE hobby like '%$temp[0]%' ";

$result=$db->query($sql);
if (!$result)die ($db->error);

$rows=$result->num_rows;
if($debug==TRUE){
echo "debug rows=".$rows."</br>";
}
for ($j=0;$j<$rows ; ++$j)
{
$result->data_seek($j);

$row=$result->fetch_array(MYSQLI_ASSOC);
if($debug==TRUE)
{
echo "debug test row:".$row["hobby"]."</br>";
}
$match_results[$j]=$row;

}

echo "test match result:".$match_results[0]."</br>";


?>