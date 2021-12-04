<?php

declare(strict_types=1);

namespace Advent;

class Helper
{
    public static function getInput(string $file): array
    {
        return explode(PHP_EOL ,file_get_contents($file));
    }
}
