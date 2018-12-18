#!/usr/bin/php
<?php
$in  = file_get_contents('php://stdin');

$in = trim($in);
$in = preg_replace('/,$/', '', $in);

if( strpos($in, ',') !== false ) {
    $pieces = explode(',', $in);
    
} else if( strpos($in, "\t") !== false ) {
    $pieces = explode("\t", $in);
    
} else {
    $pieces = explode("\n", $in);
}


foreach($pieces as &$part) {
    $part = trim($part);
    if($part) {
	   $part = str_replace(' ', '', ucwords(str_replace('_', ' ', $part)));
	   $part[0] = strtolower($part[0]); // prima lettera
    }
}

$out = implode(" ", $pieces);
echo $out;
