<?php
date_default_timezone_set('PRC');
ini_set('date.timezone','Asia/Shanghai');

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache'); // 建议不要缓存SSE数据

/**
 * Constructs the SSE data format and flushes that data to the client.
 *
 * @param string $id Timestamp/id of this connection.
 * @param string $msg Line of text that should be transmitted.
 */

$i=0;
function sendMsg($id, $msg) {
  $i++;
  echo "id: $id" . PHP_EOL;
  echo "data: $msg $i" . PHP_EOL;
  echo PHP_EOL;
  ob_flush();
  flush();
}

$serverTime = time();

sendMsg($serverTime, 'server time: ' . date("h:i:s", time()));
?>
