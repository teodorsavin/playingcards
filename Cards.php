<?php

namespace PlayingCards;

class Cards
{

    /**
     * H -> Hearts
     * C -> Clubs
     * D -> Diamonds
     * S -> Spades
     *
     * @return array
     */
    public static function getSuits(): array
    {
        return [
            'H' => '<span style="color: red;">&#9829;</span>',
            'C' => '<span style="color: red;">&#9827;</span>',
            'D' => '&#9830;',
            'S' => '&#9824;'
        ];
    }

    /**
     * @return array
     */
    public static function getValues(): array
    {
        return [
            'A' => 'Ace',
            '2' => 'Two',
            '3' => 'Three',
            '4' => 'Four',
            '5' => 'Five',
            '6' => 'Six',
            '7' => 'Seven',
            '8' => 'Eight',
            '9' => 'Nine',
            '10' => 'Ten',
            'J' => 'Jack',
            'Q' => 'Queen',
            'K' => 'King'
        ];
    }

    /**
     * @return array
     */
    public static function getShortSuits(): array
    {
        return [
            'H','C','D','S'
        ];

    }

    /**
     * @return array
     */
    public static function getShortValues(): array
    {
        return [
            'A','2','3','4','5','6','7','8','9','10','J','Q','K'
        ];
    }
}

?>
