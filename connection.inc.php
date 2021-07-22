<?php
session_start();
$con=mysqli_connect("localhost","root","","ecomm");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/ecommerce/');
define('SITE_PATH','http://127.0.0.1/php/ecommerce/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'media/product_images/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'media/product_images/');

define('BANNER_SERVER_PATH',SERVER_PATH.'media/banner/');
define('BANNER_SITE_PATH',SITE_PATH.'media/banner/');

define('INSTAMOJO_KEY','07e0a34c21110f671757df45d09e9649');
define('INSTAMOJO_TOKEN','9cb88589f13423f707bd3b86a034b2a9');
//https://www.youtube.com/watch?v=zWLKQ_loJqI&list=PLWCLxMult9xfYlDRir2OGRZFK397f3Yeb&index=24


define('SMTP_EMAIL','ranadheerreddy721@gmail.com');
define('SMTP_PASSWORD','@ranadheer1');
//https://www.youtube.com/watch?v=aBbmo1pi5B0&list=PLWCLxMult9xfY_dsYicKGcCLhlZ6YXFMh&index=1


define('SMS_KEY','cWUzl2yduso5Ypn6tmXP8fJCN1jKg0iwTLMAED93kGFQOSr4B7URKdr7no5CyOZv3GjDLTNhzeuFAicg');
//https://www.youtube.com/watch?v=_XaaIJlkNV4&list=PLWCLxMult9xfYlDRir2OGRZFK397f3Yeb&index=27
?>