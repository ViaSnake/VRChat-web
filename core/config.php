<?php
    $configurl = "https://api.vrchat.cloud/api/1/config";
    $configjson = file_get_contents($configurl);
    $configobj = json_decode($configjson);
?>