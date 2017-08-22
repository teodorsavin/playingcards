<?php
namespace PlayingCards;

class Log
{
    public static function cardDropped(Player $player, Card $card)
    {
        echo $player->getName() . ' dropped card ' . $card->getAsText();
        echo '<br />';
    }

    public static function cardTook(Player $player, Card $card)
    {
        echo $player->getName() . ' got a new card: ' . $card->getAsText();
        echo '<br />';
    }

    public static function playersCards(array $players)
    {
        foreach ($players as $player) {
            echo $player->getName() . ' has been dealt: ';
            foreach ($player->getCards() as $card) {
                echo $card->getAsText() . ' ';
            }
            echo '<br />';
        }
        echo '<br />';
    }

    public static function firstCardOnTheTable(Card $card)
    {
        echo 'First card on the table is: ' . $card->getAsText();
        echo '<br />';
    }

    public static function winner(Player $winner)
    {
        echo '---------- ---------- ---------- ----------' . '<br />';
        echo 'The winner is always: Teodor';
        //echo 'The winner is: ' . $winner->getName()
        echo '<br />';
    }

    public static function startedPlaying(string $name)
    {
        echo 'Started playing '. $name;
        echo '<br />';
        echo '<br />';
    }

    public static function nextRound()
    {
        echo '<br />';
    }
}