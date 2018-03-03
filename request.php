<?php

print '{';
print '\n  "remote_addr": "' . $_SERVER['REMOTE_ADDR'] . '",';
print '\n  "remote_host": "' . $_SERVER['REMOTE_HOST'] . '",';
print '\n  "remote_port": "' . $_SERVER['REMOTE_PORT'] . '",';
print '\n  "request_method": "' . $_SERVER['REQUEST_METHOD'] . '",';
print '\n  "request_time": "' . $_SERVER['REQUEST_TIME'] . '",';
print '\n  "request_uri": "' . $_SERVER['REQUEST_URI'] . '"';
print '}';
