<?php
declare(strict_types=1);

require __DIR__ . '/../src/Game.php';

use PHPUnit\Framework\TestCase;

final class GameTest extends TestCase
{
    /**
     * @test
     */
    public function testLoveAll()
    {
        /** Arrange */
        $target = new Game(0, 0);

        /** Assume */
        $expected = "Love All";

        /** Act */
        $actual = $target->score();

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function testFifteenAll()
    {
        /** Arrange */
        $target = new Game(1, 0);

        /** Assume */
        $expected = "Fifteen Love";

        /** Act */
        $actual = $target->score();

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

}
