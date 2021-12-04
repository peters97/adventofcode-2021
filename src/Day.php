<?php

declare(strict_types=1);

namespace Advent;

class Day
{
    protected array $input;
    
    public function __construct()
    {
        $this->input = $this->getInput();
    }
    
    protected function getInput(): array
    {
        $reflector = new \ReflectionClass(get_called_class());
        $classLocation = $reflector->getFileName();
        $filename = dirname($classLocation) . '/input.txt';
        
        if (file_exists($filename)) {
            return Helper::getInput($filename);
        }
        
        return [];
    }
    
    protected function line(mixed $line): void
    {
        echo $line . PHP_EOL;
    }
}
