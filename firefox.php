<?php
function getFirefox(){
    // location of easily parsable text containing latest version
    $link = "http://releases.mozilla.org/pub/mozilla.org/firefox/releases/latest/source/";
    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $page = curl_exec($ch);

    // first link should be in form "firefox-x.x.bundle"
    preg_match("/firefox-([0-9][\.0-9]+)\./", $page, $matches);
    return $matches[1];
}
