<!DOCTYPE html>
<meta charset="utf-8" />
<title>Bitshares Wallet API connection using WebSocket</title>
<script language="javascript" type="text/javascript">
	/**
	 * Bitshares Wallet API connection using WebSocket
	 *
	 * @author:			Carl Victor C. Fontanos
	 * @author_url: 	www.carlofontanos.com
	 */
	
	var wsUri = "ws://127.0.0.1:8090/";
	var output;
	
	function toSend(method, params)
	{
		return '{"jsonrpc":"2.0","method":"' + method + '","params":' + params + ',"id":1}';
	}
	
	function init()
	{
		output = document.getElementById("output");
		testWebSocket();
	}

	function testWebSocket()
	{
		websocket = new WebSocket(wsUri);
		websocket.onopen = function(evt) { onOpen(evt) };
		websocket.onclose = function(evt) { onClose(evt) };
		websocket.onmessage = function(evt) { onMessage(evt) };
		websocket.onerror = function(evt) { onError(evt) };
	}

	function onOpen(evt)
	{
		writeToScreen("CONNECTED");
		doSend(toSend('get_account_history', '["nathan",10]'));
	}

	function onClose(evt)
	{
		writeToScreen("DISCONNECTED");
	}

	function onMessage(evt)
	{
		writeToScreen('<span style="color: blue;">RESPONSE: ' + evt.data+'</span>');
		websocket.close();
	}

	function onError(evt)
	{
		writeToScreen('<span style="color: red;">ERROR:</span> ' + evt.data);
	}

	function doSend(message)
	{
		writeToScreen("SENT: " + message);
		websocket.send(message);
	}

	function writeToScreen(message)
	{
		var pre = document.createElement("p");
		pre.style.wordWrap = "break-word";
		pre.innerHTML = message;
		output.appendChild(pre);
	}

	window.addEventListener("load", init, false);
</script>

<h2>Bitshares Wallet API connection using Websocket</h2>

<div id="output"></div>