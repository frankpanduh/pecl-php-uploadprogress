<?php

/*
  +----------------------------------------------------------------------+
  | Uploadprogress extension                                             |
  +----------------------------------------------------------------------+
  | Copyright (c) The PHP Group                                          |
  +----------------------------------------------------------------------+
  | This source file is subject to version 3.01 of the PHP license,      |
  | that is bundled with this package in the file LICENSE, and is        |
  | available through the world-wide-web at the following url:           |
  | http://www.php.net/license/3_01.txt.                                 |
  | If you did not receive a copy of the PHP license and are unable to   |
  | obtain it through the world-wide-web, please send a note to          |
  | license@php.net so we can mail you a copy immediately.               |
  +----------------------------------------------------------------------+
  | Author: Christian Stocker (chregu@php.net)                           |
  +----------------------------------------------------------------------+
*/

if (function_exists("uploadprogress_get_info")) {

    $info = uploadprogress_get_info($_GET['ID']);
} else {
    $info = false;
}

?>
<html>
<head>
<script type="text/javascript">
<?php


if ($info !== null) {

    print "parent.UP.updateInfo(".$info['bytes_uploaded'].",".$info['bytes_total'].",".$info['est_sec'].")";
} else {
    print "parent.UP.updateInfo()";
}
?>
</script>

</head>

<body>
<pre>
<?php
print "Date : " . date("c",time())."\n";
print "ID   : ". $_GET['ID'] ."\n";
print 'var_dump($info): '. "\n";
var_dump($info);
?>
</pre>
</body>
