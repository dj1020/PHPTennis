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

        $scoreLookup = [
            0 => 'Love',
            1 => 'Fifteen',
            2 => 'Thirty',
            3 => 'Forty',
        ];


        if ($this->score1 != $this->score2) {
            return $scoreLookup[$this->score1] . ' ' . $scoreLookup[$this->score2];
        }

        if ($this->score1 >= 3) {
            return "Deuce";
        }

        return $scoreLookup[$this->score1] . " All";
    }
}
