<?php
$banner = $_GET['banner'];
// Enlaces que queremos disimular
$link[1] = "https://cxpbridge.com/";
$link[2] = "https://v1.force.com/";
header("HTTP/1.1 301 Moved Permanently");
header("Location: $link[$banner]");
header("Connection: close");
?>