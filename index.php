<?php
// maybe throw this guy in a memcache OPTIMIZE ALL THE THINGS
$versions = unserialize(file_get_contents("versions"));

if (isset($_REQUEST['browsers'])){
    $browsers = explode(',', $_REQUEST['browsers']);
    $include = array();
    foreach ($browsers as $browser){
        if (array_key_exists($browser, $versions)) $include[$browser] = $versions[$browser];
    }
    $include;
} else {
    $include = $versions;
}
header('Content-type: application/json');
echo json_encode($include);
