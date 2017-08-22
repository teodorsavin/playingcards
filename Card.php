<?php

namespace PlayingCards;

class Card
{

    private $suits;
    private $values;

    protected $suit;
    protected $value;
    protected $suit_text;
    protected $value_text;

    public function __construct($suit, $value)
    {
        $this->initializeSuits();
        $this->initializeValues();

        $this->suit = $suit;
        $this->value = $value;
        $this->suit_text = $this->suits[$suit];
        $this->value_text = $this->values[$value];
    }

    private function initializeSuits()
    {
        $this->suits = Cards::getSuits();
    }

    private function initializeValues()
    {
        $this->values = Cards::getValues();
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getSuit()
    {
        return $this->suit;
    }

    public function getAsText()
    {
        return $this->value . $this->suit_text;
    }
}

?>
