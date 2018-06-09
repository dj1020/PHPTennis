<?php
declare(strict_types=1);

require __DIR__ . '/../src/Game.php';

use PHPUnit\Framework\TestCase;

final class GameTest extends TestCase
{
    /**
     * @test
     * @dataProvider scoreProvider
     */
    public function testScoreResult($score1, $score2, $expected)
    {
        /** Arrange */
        $target = new Game($score1, $score2);

        /** Act */
        $actual = $target->score();

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

    public function scoreProvider()
    {
        return [
            [0, 0, 'Love All'],
            [1, 0, 'Fifteen Love'],
            [2, 0, 'Thirty Love'],
        ];
    }

}
