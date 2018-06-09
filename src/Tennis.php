<?php

class Tennis
{
    public function getScore($player1, $player2)
    {
        if ($player1 > $player2) {
            if ($player1 >= 4 && ($player1 - $player2) >= 2) {
                return "Joey Win";
            }

            if ($player2 >= 3) {
                return "Joey Adv";
            }

            switch ($player1) {
                case 1:
                    return 'Fifteen Love';
                case 2:
                    return 'Thirty Love';
                case 3:
                    return 'Forty Love';
            }
        }

        if ($player2 > $player1) {
            if ($player2 >= 4 && ($player2 - $player1) >= 2) {
                return "Tom Win";
            }

            if ($player1 >= 3) {
                return "Tom Adv";
            }

            switch ($player2) {
                case 1:
                    return 'Love Fifteen';
                case 2:
                    return 'Love Thirty';
                case 3:
                    return 'Love Forty';
            }
        }

        if ($player2 == $player1) {
            switch ($player1) {
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