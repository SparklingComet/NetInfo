<?php

$new_ln = "\n  ";
print "{";
print $new_ln . '"remote_addr": "' . $_SERVER['REMOTE_ADDR'] . '",';
print $new_ln . '"remote_host": "' . $_SERVER['REMOTE_HOST'] . '",';
print $new_ln . '"remote_port": "' . $_SERVER['REMOTE_PORT'] . '",';
print $new_ln . '"request_method": "' . $_SERVER['REQUEST_METHOD'] . '",';
print $new_ln . '"request_time": "' . $_SERVER['REQUEST_TIME'] . '",';
print $new_ln . '"request_uri": "' . $_SERVER['REQUEST_URI'] . '"';
print "\n}";
