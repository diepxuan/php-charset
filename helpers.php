<?php

// require_one "./vn_charset_conversion.php";

if (!function_exists('vn_convert_encoding')) {
    /**
     * List packages.
     */
    function vn_convert_encoding($string): string
    {
        return new \Diepxuan\Charset\VnEcoding($string);
    }
}
