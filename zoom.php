<?php
$status = $_POST['status'];

if($status === 'zoomin') {
    exec('wget "http://pure:qazQAZ12@172.20.42.76/cgi-bin/ptz.cgi?action=start&channel=0&code=Position&arg1=0&arg2=0&arg3=10"');   
} else if($status === 'zoomout') {
    exec('wget "http://pure:qazQAZ12@172.20.42.76/cgi-bin/ptz.cgi?action=start&channel=0&code=Position&arg1=0&arg2=0&arg3=-10"');   
}
