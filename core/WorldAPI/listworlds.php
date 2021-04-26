<?php
    $listworldsurl = "https://api.vrchat.cloud/api/1/worlds?apiKey=".$configobj->apiKey."&n=16";
    $listworldsjson = file_get_contents($listworldsurl);
    $listworldsobj = json_decode($listworldsjson);
?>