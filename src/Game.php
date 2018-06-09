<?php

class Game
{
    private $score2;
    private $score1;

    public function __construct($score1, $score2)
    {
        $this->score1 = $score1;
        $this->score2 = $score2;
    }

    function score() {
        if ($this->score1 == 1) {
            return "Fifteen Love";
        }

        return 'Love All';
    }
}
