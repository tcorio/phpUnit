<?php declare(strict_types=1);
require 'src/Calculatrice.php';
use PHPUnit\Framework\TestCase;


final class CalculatriceTest extends TestCase
{
    public function testAdd(): void
    {
        $this->assertEquals(
            8,
            Calculatrice::add(4,4)
        );
    }

    public function testCannotBeCreatedFromInvalidArgument(): void
    {
        $this->assertEquals(
            8,
            Calculatrice::add(4,4)
        );
    }
}