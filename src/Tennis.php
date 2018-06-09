<?php

class Tennis
{
    public function getScore($player1, $player2)
    {
        if ($player1 > $player2) {
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
            switch ($player2) {
                case 1:
                    return 'Love Fifteen';
                case 2:
                    return 'Love Thirty';
                case 3:
                    return 'Love Forty';
            }
        }

        return 'Love All';
    }
}