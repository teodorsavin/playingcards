<?php

namespace PlayingCards;

class Player
{
    protected $cards;
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->cards = [];
    }

    public function getCards(): array
    {
        return $this->cards;
    }

    public function addCard(Card $card)
    {
        array_push($this->cards, $card);
    }

    public function removeCard(Card $card)
    {
        if(($key = array_search($card, $this->cards, TRUE)) !== FALSE) {
            unset($this->cards[$key]);
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNoCardsInHand(): int
    {
        return count($this->cards);
    }
}

?>
