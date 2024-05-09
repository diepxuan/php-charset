<?php

// module_path("diepxuan/php-charset")."/vn_charset_conversion.php"

$libPath = module_path("diepxuan/php-charset", 'vn_charset_conversion.php');
if ((new \SplFileInfo(module_path("diepxuan/php-charset", 'vn_charset_conversion.php')))->isFile()) {
    include_once "$libPath";
}

if (!function_exists('vn_convert_encoding')) {
    /**
     * List packages.
     */
    function vn_convert_encoding($string): string
    {
        return new \Diepxuan\Charset\VnEcoding($string);
    }
}
