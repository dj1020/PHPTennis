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
            [1, 0, 'Fifteen Love'],
            [2, 0, 'Thirty Love'],
            [3, 0, 'Forty Love'],
//            [0, 1, 'Love Fifteen'],
//            [0, 2, 'Love Thirty'],
//            [1, 1, 'Fifteen All'],
//            [2, 2, 'Thirty All'],
//            [3, 3, 'Deuce'],
//            [4, 3, 'Joey Adv'],
//            [3, 4, 'Tom Adv'],
//            [4, 4, 'Deuce'],
//            [5, 3, 'Joey Win'],
//            [3, 5, 'Tom Win'],
        ];
    }

}