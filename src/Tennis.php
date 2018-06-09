<?php

require __DIR__ . '/Player.php';

class Tennis
{
    public function getScore(Player $player1, Player $player2)
    {
        $scoreMap = [
            0 => 'Love',
            1 => 'Fifteen',
            2 => 'Thirty',
            3 => 'Forty',
        ];

        if ($player1->getScore() > $player2->getScore()) {
            if ($player1->getScore() >= 4 && ($player1->getScore() - $player2->getScore()) >= 2) {
                return "Joey Win";
            }

            if ($player2->getScore() >= 3) {
                return "Joey Adv";
            }

            return $scoreMap[$player1->getScore()] . ' ' . $scoreMap[$player2->getScore()];
        }

        if ($player2->getScore() > $player1->getScore()) {
            if ($player2->getScore() >= 4 && ($player2->getScore() - $player1->getScore()) >= 2) {
                return "Tom Win";
            }

            if ($player1->getScore() >= 3) {
                return "Tom Adv";
            }

            switch ($player2->getScore()) {
                case 1:
                    return 'Love Fifteen';
                case 2:
                    return 'Love Thirty';
                case 3:
                    return 'Love Forty';
            }
        }

        if ($player2->getScore() == $player1->getScore()) {
            switch ($player1->getScore()) {
                case 0:
                    return 'Love All';
                case 1:
                    return 'Fifteen All';
                case 2:
                    return 'Thirty All';
                default:
                    return 'Deuce';
            }
        }
    }
}