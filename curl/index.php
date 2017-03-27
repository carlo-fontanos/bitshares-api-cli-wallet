<?php 
/**
 * Bitshares Wallet API connection using cURL
 *
 * @author:			Carl Victor C. Fontanos
 * @author_url: 	www.carlofontanos.com
 */
 
 
$url = 'http://127.0.0.1:8090';
$array = array(
    'jsonrpc'   => '2.0',
    'method'    => 'get_account_history',
    'params'    => ['nathan', 10],
    'id'        => 1
);


$ch = curl_init();
curl_setopt($ch, CURLOPT_USERAGENT, 'GraphenePHP/1.0');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($array));
$response = curl_exec($ch);
curl_close($ch);

echo '<pre>';
print_r(json_encode($array));
echo '</pre>'; 