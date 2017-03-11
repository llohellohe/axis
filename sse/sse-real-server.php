<?php
date_default_timezone_set('PRC');
$counter = rand(1, 10);

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache'); // 建议不要缓存SSE数据

while (1) {
  // Every second, sent a "ping" event.
  
  echo "event: ping\n";
  $curDate = date(DATE_ISO8601);
  echo 'data: {"time": "' . $curDate . '"}';
  echo "\n\n";
  
  // Send a simple message at random intervals.
  
  $counter--;
  
  if (!$counter) {
    echo 'data: This is a message at time ' . $curDate . "\n\n";
    $counter = rand(1, 10);
  }
  
  ob_end_flush();
  flush();
  sleep(1);
}
?>
