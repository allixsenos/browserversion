<?php
function getChrome(){
    // winning
    $link = "http://omahaproxy.appspot.com/";
    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $page = curl_exec($ch);
    $data = str_getcsv($page);

    // possibly use fgetcsv and a loop for more rubustness?

    return $data[29];
}
