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
            }
        }

        return 'Love All';
    }
}