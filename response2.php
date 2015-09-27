<?php
header('Content-Type: text/html; charset=UTF8');

$one_new = $_POST['one_new'];
$two_new = $_POST['two_new'];
$three_new = $_POST['three_new'];

$json_obj;
$json_obj->{"one"} = $one_new;
$json_obj->{"two"} = $two_new;
$json_obj->{"three"} = $three_new;
$res = json_encode($json_obj);
file_put_contents("parametr2.json",$res);
echo $res;
?>
