<?php

namespace AltairAki\EasyPay\Exceptions;

class InvalidConfigException extends Exception
{
    /**
     * Bootstrap.
     *
     * @author altair <me@yansonga.cn>
     *
     * @param string       $message
     * @param array|string $raw
     */
    public function __construct($message, $raw = [])
    {
        parent::__construct('INVALID_CONFIG: '.$message, $raw, self::INVALID_CONFIG);
    }
}
