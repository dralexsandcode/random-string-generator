<?php

declare(strict_types=1);

namespace DrAlexSandCode\RandomStringGenerator;

class RandomStringGenerator
{
    public static function generate($length = 10): string
    {
        return substr(
            str_shuffle(
                str_repeat(
                    '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                    $length
                )
            ),
            0,
            $length
        );
    }
}