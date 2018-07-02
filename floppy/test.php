<?php

$source = file_get_contents('www.com');
$source = 'CTF{I_luv_buggy_sOFtware}';
$key = 30;
while( $key < 127 ) {

    $out = '';

    for ( $i = 0; $i < strlen($source); $i++ ) { $out .= $source[$i] ^ chr($key); }

    file_put_contents( 'out/' . $key, $out );
    $key++;
}
