<?php

declare(strict_types=1);

/*
 * @copyright  © 2019 Dxvn, Inc.
 *
 * @author     Tran Ngoc Duc <ductn@diepxuan.com>
 * @author     Tran Ngoc Duc <caothu91@gmail.com>
 *
 * @lastupdate 2024-05-09 14:56:16
 */

use Diepxuan\Charset\VnEncoding;

if (!function_exists('vn_convert_encoding')) {
    /**
     * List packages.
     *
     * @param mixed $string
     */
    function vn_convert_encoding($string): string
    {
        return (string) new VnEncoding($string);
    }
}
