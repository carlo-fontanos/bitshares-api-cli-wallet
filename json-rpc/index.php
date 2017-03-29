<?php
/**
 * Bitshares Wallet API connection using jsonRPCClient
 *
 * @author:			
 * @author_url: 	
 */
	 
require_once 'jsonRPCClient.php';

$bts = new jsonRPCClient('http://127.0.0.1:8090');

echo "<pre>";
print_r( $bts->get_account_history('nathan', 10) );
echo "</pre>";