<?php 

	function encryptIt($q) {
        $cryptKey = 'rw-8s-PJA-pr8xSP7M0V__y6E6Aql7T_xrHDeCAPCOI';
        $qEncoded = rtrim(strtr(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), $q, MCRYPT_MODE_CBC, md5(md5($cryptKey)))), '+/', '-_'), '=');
        return( $qEncoded );
    }

    function decryptIt($q) {
        $cryptKey = 'rw-8s-PJA-pr8xSP7M0V__y6E6Aql7T_xrHDeCAPCOI';
        $qDecoded = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), base64_decode(strtr($q, '-_', '+/')), MCRYPT_MODE_CBC, md5(md5($cryptKey))), "\0");
        return( $qDecoded );
    }

 ?>