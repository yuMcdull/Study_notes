<?php

namespace DesignPatterns\Behavioral\Strategy;

interface Strategy
{
    public function AlgorithmInterface();
}

class StrategyA implements Strategy
{
    public function AlgorithmInterface()
    {
        echo "算法A \r\n";
    }
}

class StrategyB implements Strategy
{
    public function AlgorithmInterface()
    {
        echo "算法B \r\n";
    }
}

class StrategyC implements Strategy
{
    public function AlgorithmInterface()
    {
        echo "算法C \r\n";
    }
}