<?php
$status = $_POST['status'];

switch ($status) {
        case 'balachap':
            $command = "http://pure:qazQAZ12@172.20.42.76/cgi-bin/ptz.cgi?action=start&channel=0&code=Position&arg1=-600&arg2=-600&arg3=0";
        break;

        case 'bala':
            $command = "http://pure:qazQAZ12@172.20.42.76/cgi-bin/ptz.cgi?action=start&channel=0&code=Position&arg1=0&arg2=-600&arg3=0";
        break;

        case 'balarast':
            $command = "http://pure:qazQAZ12@172.20.42.76/cgi-bin/ptz.cgi?action=start&channel=0&code=Position&arg1=600&arg2=-600&arg3=0";
        break;

        case 'chap':
            $command = "http://pure:qazQAZ12@172.20.42.76/cgi-bin/ptz.cgi?action=start&channel=0&code=Position&arg1=-600&arg2=0&arg3=0";
        break;

        case 'vasat':
            $command = "http://pure:qazQAZ12@172.20.42.76/cgi-bin/ptz.cgi?action=start&channel=0&code=Position&arg1=600&arg2=-600&arg3=0";
        break;

        case 'rast':
            $command = "http://pure:qazQAZ12@172.20.42.76/cgi-bin/ptz.cgi?action=start&channel=0&code=Position&arg1=600&arg2=0&arg3=0";
        break;

        case 'paeenchap':
            $command = "http://pure:qazQAZ12@172.20.42.76/cgi-bin/ptz.cgi?action=start&channel=0&code=Position&arg1=-600&arg2=600&arg3=0";
        break;

        case 'paeen':
            $command = "http://pure:qazQAZ12@172.20.42.76/cgi-bin/ptz.cgi?action=start&channel=0&code=Position&arg1=0&arg2=600&arg3=0";
        break;

        case 'paeenrast':
            $command = "http://pure:qazQAZ12@172.20.42.76/cgi-bin/ptz.cgi?action=start&channel=0&code=Position&arg1=600&arg2=600&arg3=0";
        break;

    default:
        # code...
        break;
}

exec("wget \"$command\"");