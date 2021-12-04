<?php

declare(strict_types=1);

namespace Advent\Day01;

use Advent\Day;
use Advent\IDay;

class Main extends Day implements IDay
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function run(): void
    {
        echo $this->first() . PHP_EOL;
        echo $this->second() . PHP_EOL;
    }
    
    public function first(): int
    {
        $count = 0;
        $last = '';
        
        foreach ($this->input as $item) {
            if (!empty($last)) {
                if ($item > $last) {
                    $count++;
                }
            }
            
            $last = $item;
        }
        
        return $count;
    }
    
    private function second(): int
    {
        $count = 0;
        
        foreach ($this->input as $i => $item) {
            if ($i === 0) {
                continue;
            }
            
            $last = (int)$this->input[$i - 1] + (int)$item + (int)($this->input[$i + 1] ?? 0);
            $current = (int)$item + (int)($this->input[$i + 1] ?? 0) + (int)($this->input[$i + 2] ?? 0);
            
            if ($current > $last) {
                $count++;
            }
        }
        
        return $count;
    }
}
