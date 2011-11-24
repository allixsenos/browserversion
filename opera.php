<?php
function getOpera(){
    // le sigh
    $link = "http://en.wikipedia.org/w/index.php?title=Template:Latest_stable_software_release/Opera";
    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, "Browserversion.info");
    $page = curl_exec($ch);

    preg_match("/action\=edit\"\>([0-9][\.0-9]+)/", $page, $matches);
    return $matches[1];
}
