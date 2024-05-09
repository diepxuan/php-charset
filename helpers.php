<?php

declare(strict_types=1);

/*
 * @copyright  © 2019 Dxvn, Inc.
 *
 * @author     Tran Ngoc Duc <ductn@diepxuan.com>
 * @author     Tran Ngoc Duc <caothu91@gmail.com>
 *
 * @lastupdate 2024-05-09 15:02:58
 */

use Diepxuan\Charset\VnEncoding;

if (!function_exists('vn_convert_encoding')) {
    /**
     * Convert Vietnamese encoding to another.
     *
     * @param mixed $string
     * @param mixed $from
     * @param mixed $to
     */
    function vn_convert_encoding($string, $from = 'unicode', $to = 'ascii'): string
    {
        return (string) new VnEncoding($string, $from, $to);
    }
}
