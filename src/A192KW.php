<?php

declare (strict_types=1);
namespace AESKW;

final class A192KW implements Wrapper
{
    use AESKW;
    protected static function get_method(): string
    {
        return 'aes-192-ecb';
    }
}