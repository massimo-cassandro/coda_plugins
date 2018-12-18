#!/usr/bin/php
<?php
$in  = file_get_contents('php://stdin');
$out = urlencode($in);
echo $out;