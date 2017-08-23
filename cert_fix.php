<?php
header ( 'Content-type:text/html;charset=utf-8' );

//原始证书路径
$filename = './tongliancert/TLCert-test.cer';
$cert = file($filename);
$pub_cert = trim(chunk_split($cert[1],64,"\n"))."\n";
$pubStr = $cert[0].$pub_cert.$cert[2];
$path = pathinfo($filename);
$newfile = $path['dirname'].'/'.$path['filename'].'_fix.cer';
file_put_contents($newfile, $pubStr);
echo file_get_contents($newfile);