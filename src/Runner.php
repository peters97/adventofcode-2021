<?php

declare(strict_types=1);

namespace Advent;

use Advent\Day01\Main;

class Runner
{
    private array $arguments;
    private string $day;
    
    public function __construct(array $arguments)
    {
        $this->arguments = $arguments;
        
        if (!$this->validate()) {
            exit;
        }
    }
    
    public function run(): void
    {
        echo "Running day {$this->day}" . PHP_EOL;
        
        $day = $this->getDayClass();
        
        $day = new $day;
        $day->run();
    }
    
    private function validate(): bool
    {
        if (empty($this->arguments[1])) {
            return false;
        }
        
        $this->day = $this->arguments[1];
        
        return $this->dayExists();
    }
    
    private function dayExists(): bool
    {
        return class_exists($this->getDayClass());
    }
    
    private function getDayClass(): string
    {
        $dayString = str_pad($this->day, 2, '0', STR_PAD_LEFT);
        return "Advent\\Day{$dayString}\\Main";
    }
}
