<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-19 18:10:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test_get was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-19 18:10:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test_get was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/limeligh/public_html/fairfaxify/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-19 18:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test_get was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-19 18:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test_get was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/limeligh/public_html/fairfaxify/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/limeligh/public_html/fairfaxify/index.php(109): Kohana_Request->execute()
#3 {main}