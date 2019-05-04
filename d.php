<?php
if(isset($_GET['id']))
{
    $url="http://thm.market.xiaomi.com/thm/download/v2/".$_GET['id'];
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;
}
?>