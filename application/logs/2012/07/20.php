<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-20 17:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-20 17:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/limeligh/public_html/fairfaxify/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-20 17:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-20 17:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/limeligh/public_html/fairfaxify/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-20 17:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-20 17:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/limeligh/public_html/fairfaxify/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-20 17:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-20 17:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/limeligh/public_html/fairfaxify/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-20 18:01:53 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/controller/rest.php [ 92 ]
2012-07-20 18:01:53 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/controller/rest.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-20 18:02:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: articles_array ~ APPPATH/classes/controller/rest.php [ 91 ]
2012-07-20 18:02:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: articles_array ~ APPPATH/classes/controller/rest.php [ 91 ]
--
#0 /home/limeligh/public_html/fairfaxify/application/classes/controller/rest.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/limeligh/...', 91, Array)
#1 [internal function]: Controller_Rest->action_articles()
#2 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rest))
#3 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/limeligh/public_html/fairfaxify/index.php(109): Kohana_Request->execute()
#6 {main}