<?php
require __DIR__ . '/../src/Tennis.php';

use PHPUnit\Framework\TestCase;

final class TennisTest extends TestCase
{
    /**
      * @test
      * @dataProvider scoreProvider
      */
    public function it_should_get_tennis_score($player1, $player2, $expected)
    {
        // Arrange
        $game = new Tennis();

        // Act
        $actual = $game->getScore($player1, $player2);

        // Assert
        // printf("\n%d\t%d\t%s", $player1, $player2, $expected);
        $this->assertEquals($expected, $actual);
    }

    public function scoreProvider()
    {
        return [
            [0, 0, 'Love All'],
        ];
    }

}