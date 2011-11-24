<?php
// maybe throw this guy in a memcache OPTIMIZE ALL THE THINGS
echo json_encode(unserialize(file_get_contents("versions"))); // lol
