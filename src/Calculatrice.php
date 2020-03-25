<?php declare(strict_types=1);
final class Calculatrice
{

    public static function sub(int $a, int $b): int
    {
        return $result = $a - $b;
    }

    public static function mul(int $a, int $b): int
    {
        return $result = $a * $b;
    }

    public static function div(int $a, int $b): int
    {
        return $result = $a / $b;
    }

    public static function add(int $a, int $b): int
    {
        return $result = $a + $b;  
    }

    public static function avg($tab): float
    {
        $results = 0;
        foreach($tab as $value){
            $results = $results + $value;
        }
        return $results / count($tab);
    }
}