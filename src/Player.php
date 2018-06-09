<?php

class Player
{
    private $name;

    /**
     * Player constructor.
     * @param string $name
     */
    public function __construct($name, $score)
    {
        $this->name = $name;
        $this->score = $score;
    }

    public function getScore()
    {
        return $this->score;
    }
}