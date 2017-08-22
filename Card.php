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

    private function initializeSuits(): void
    {
        $this->suits = Cards::getSuits();
    }

    private function initializeValues(): void
    {
        $this->values = Cards::getValues();
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getSuit(): string
    {
        return $this->suit;
    }

    /**
     * @return string
     */
    public function getAsText(): string
    {
        return $this->value . $this->suit_text;
    }
}

?>
