<?php

declare(strict_types=1);

namespace Advent\Day02;

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
        $this->first();;
    }
    
    public function first(): void
    {
        $x = 0;
        $y = 0;
        
        foreach ($this->input as $step) {
            if (empty($step)) {
                continue;
            }
            
            $step = explode(' ', $step);
            
            $command = $step[0];
            $value = (int)$step[1];
            
            if ($command === 'forward') {
                $x += $value;
            }
            
            if ($command === 'up') {
                $y -= $value;
            }
            
            if ($command === 'down') {
                $y += $value;
            }
        }
        
        $this->line($x * $y);
    }
}
