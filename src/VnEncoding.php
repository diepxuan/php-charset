<?php

declare(strict_types=1);

/*
 * @copyright  © 2019 Dxvn, Inc.
 *
 * @author     Tran Ngoc Duc <ductn@diepxuan.com>
 * @author     Tran Ngoc Duc <caothu91@gmail.com>
 *
 * @lastupdate 2024-05-09 11:24:26
 */

namespace Diepxuan\Charset;

/**
 * test.
 */
class VnEcoding extends \stdClass
{
    protected vn_charset_conversion $converter;

    /**
     * __construct.
     *
     * @param mixed $string
     */
    public function __construct(string $string)
    {
        $this->converter = new \vn_charset_conversion($string);
    }

    /**
     * to String.
     */
    public function __toString()
    {
        return $this->converter->convert();
    }
}