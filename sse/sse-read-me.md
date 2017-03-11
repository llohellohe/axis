###启动
php -S localhost:8080

浏览器打开：http://localhost:8080/sse-client.html

其中sse-real-server.php 为真实的，只建立一次连接的服务端推送（里面使用了死循环）

否则，像sse-server.php 那样，浏览器会每隔3-4秒重新建立连接。
