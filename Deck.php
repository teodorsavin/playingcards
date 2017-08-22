<?php

namespace PlayingCards;

class Deck
{
    public $cards;

    public function __construct()
    {
        $this->cards = [];
        $suits = Cards::getShortSuits();
        $values = Cards::getShortValues();

        foreach($suits as $suit) {
            foreach($values as $value) {
                $card = new Card($suit,$value);
                array_push($this->cards,$card);
            }
        }
    }

    /**
     * Shuffle array of cards
     */
    public function shuffleDeck(): void
    {
        shuffle($this->cards);
    }

    /**
     * Return deck of cards
     *
     * @return array
     */
    public function getCards(): array
    {
        return $this->cards;
    }
}


?>
