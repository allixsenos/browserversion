<?php
/**
 * By Andre Bluehs <hello@andrebluehs.net>
 * and Luka Kladaric <luka@kladaric.net>
 *
 * For some browsers that I couldn't find a reliably updated page, used wikipedia ::cringe::
 */

$versions = array();

require_once("firefox.php");
$versions['firefox'] = getFirefox();

require_once("safari.php");
$versions['safari'] = getSafari();

require_once("chrome.php");
$versions['chrome'] = getChrome();

require_once("opera.php");
$versions['opera'] = getOpera();

$versions['msie'] = "9.0"; // lol

$f = fopen("versions", "w");
fwrite($f, serialize($versions));