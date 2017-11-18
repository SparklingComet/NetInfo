<?php

print '{';
print '"remote_addr": "' . $_SERVER['REMOTE_ADDR'] . '",';
print '"remote_host": "' . $_SERVER['REMOTE_HOST'] . '",';
print '"remote_port": "' . $_SERVER['REMOTE_PORT'] . '",';
print '"request_method": "' . $_SERVER['REQUEST_METHOD'] . '",';
print '"request_time": "' . $_SERVER['REQUEST_TIME'] . '",';
print '"request_uri": "' . $_SERVER['REQUEST_URI'] . '"';
print '}';
