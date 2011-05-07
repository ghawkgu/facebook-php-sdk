<?php
if (!defined('CURLPROXY_SOCKS5_HOSTNAME')) {
    define('CURLPROXY_SOCKS5_HOSTNAME', 7);
}
$proxy_opts = array(
    CURLOPT_PROXY => 'localhost',
    CURLOPT_PROXYPORT => 7070,
    CURLOPT_PROXYTYPE => CURLPROXY_SOCKS5_HOSTNAME,
);
?>
