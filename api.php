<?php
$format = @$_GET['format'];
$result = file_get_contents("http://api.lq520.club/api/mjx.php");
$arr=json_decode($result,true);
$url=$arr['imgurl'];
if($format=='images'){
    echo $url;
} else {
  $fk  =  json_encode(array(
        'code'  =>  1,
        'imgurl'  =>  ''.$url.''
    ), 320);
    print_r($fk);
}
?>