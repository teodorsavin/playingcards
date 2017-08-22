<?php

namespace PlayingCards;

class Cards
{

    public static function getSuits()
    {
        return [
            'H' => '<span style="color: red;">&#9829;</span>',
            'C' => '<span style="color: red;">&#9827;</span>',
            'D' => '&#9830;',
            'S' => '&#9824;'
        ];
    }

    public static function getValues()
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

    public static function getShortSuits()
    {
        return [
            'H','C','D','S'
        ];

    }

    public static function getShortValues()
    {
        return [
            'A','2','3','4','5','6','7','8','9','10','J','Q','K'
        ];
    }
}

?>
