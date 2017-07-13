<?php
/**
 * Des : AES加密（支持PHP7.1）
 * Created by PhpStorm.
 * User: lufeng501206@gmail.com
 * Date: 2017/7/13
 * Time: 10:14
 */

$data = 'phpbest';
$key = 'oScGU3fj8m/tDCyvsbEhwI91M1FcwvQqWuFpPoDHlFk='; //echo base64_encode(openssl_random_pseudo_bytes(32));
$iv = 'w2wJCnctEG09danPPI7SxQ=='; //echo base64_encode(openssl_random_pseudo_bytes(16));

echo '内容: '.$data.PHP_EOL;

$encrypted = openssl_encrypt($data, 'aes-256-cbc', base64_decode($key), OPENSSL_RAW_DATA, base64_decode($iv));
echo '加密: '.base64_encode($encrypted)."\n";

$encrypted = base64_decode('To3QFfvGJNm84KbKG1PLzA==');
$decrypted = openssl_decrypt($encrypted, 'aes-256-cbc', base64_decode($key), OPENSSL_RAW_DATA, base64_decode($iv));
echo '解密: '.$decrypted.PHP_EOL;