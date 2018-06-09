<?php

class Tennis
{
    public function getScore($player1, $player2)
    {
        if ($player1 > $player2) {
            return 'Fifteen Love';
        }

        return 'Love All';
    }
}