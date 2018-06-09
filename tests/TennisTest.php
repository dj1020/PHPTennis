<?php
require __DIR__ . '/../src/Tennis.php';

use PHPUnit\Framework\TestCase;

final class TennisTest extends TestCase
{
    /**
      * @test
      * @dataProvider scoreProvider
      */
    public function it_should_get_tennis_score($player1Score, $player2Score, $expected)
    {
        // Arrange
        $game = new Tennis();
        $player1 = new Player('Joey', $player1Score);
        $player2 = new Player('Tom', $player2Score);

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
            [0, 1, 'Love Fifteen'],
            [0, 2, 'Love Thirty'],
            [1, 1, 'Fifteen All'],
            [2, 2, 'Thirty All'],
            [3, 3, 'Deuce'],
            [4, 3, 'Joey Adv'],
            [3, 4, 'Tom Adv'],
            [4, 4, 'Deuce'],
            [5, 3, 'Joey Win'],
            [3, 5, 'Tom Win'],

            // Other test case
            [2, 1, 'Thirty Fifteen'],
//            [3, 1, 'Forty Fifteen'],
//            [4, 1, 'Joey Win'],
//
//            [1, 2, 'Fifteen Thirty'],
//            [1, 3, 'Fifteen Forty'],
//            [1, 4, 'Tom Win'],
//
//            [3, 2, 'Forty Thirty'],
//            [2, 3, 'Thirty Forty'],
        ];
    }

}