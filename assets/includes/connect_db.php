<?php


include 'db_config.php';


if ($db->connect_error) {
    die("connect failed " . $db->connect_error);
} else {


    $sql = "SELECT count(*) FROM customer ";
    $result = mysqli_query($db, $sql);
    $rowcount = mysqli_fetch_row($result) or die(mysqli_error($db));
    $array = array();
    global $array_hoby;
    echo "testtest";
    echo $rowcount[0];
    $random = rand(1, $rowcount[0]);
    echo "random=";
    echo $random;





    function check_diff($array1, $random1)
    {

        if (sizeof($array1) == 0) {

            return TRUE;

        } else {

            for ($i = 0; $i < sizeof($array1); $i++) {

                if ($array1[$i] == $random1) {
                    echo "imfunction";
                    return FALSE;
                }
            }

            return TRUE;
        }
    }

    for ($i = 0; $i < $rowcount[0]; $i++) {

        while (check_diff($array, $random) == FALSE) {
            $random = rand(1, $rowcount[0]);


        }
        array_push($array, $random);
        $random = rand(1, $rowcount[0]);
    }

    foreach ($array as $output) {

        echo "$output<br>";
    }

//    function auto_match()
//    {

//        $array_hoby = array();
//        $sql_auto = "SELECT username,hobby FROM customer WHERE hobby = '$this->username' ";
//        for ($i = 0; $i < sizeof($sql_auto); $i++){
//            array_push($array_hoby, '$sql_auto');
//        }


//    }
//    foreach ($sql_auto as $output1) {
//
//        echo "$output1<br>";
//    }

    function get_row($num)
    {
        global $array;
        $sql2 = "SELECT * FROM customer WHERE user_id = $array[$num]";
        global $db;
        $result = mysqli_query($db, $sql2) or die(mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

}

?>

