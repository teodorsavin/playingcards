<?php

namespace PlayingCards;

class CrazyEights
{
    /**
     * @return int
     */
    public static function getNoOfFirstHandCards(): int
    {
        return 5;
    }

    /**
     * This will make all the steps a player
     * will do in the game when will be his turn
     *
     * @param Player $player
     * @param array  $discardPile
     * @param array  $deck
     */
    public static function nextPlayerMove(Player &$player, array &$discardPile, array &$deck)
    {
        $cardDropped = false;
        $lastCard = end($discardPile);

        // Check if there is a suit or number suitable to drop
        foreach ($player->getCards() as $card) {
            if ($card->getValue() == $lastCard->getValue() || $card->getSuit() == $lastCard->getSuit()) {
                $player->removeCard($card);
                array_push($discardPile, $card);
                $cardDropped = true;

                // Log action
                Log::cardDropped($player, $card);
                break;
            }
        }

        if (!$cardDropped && !empty($deck)) {
            // Player gets a card
            $newCard = array_shift($deck);
            $player->addCard($newCard);
            Log::cardTook($player, $newCard);
        }
    }
}

?>
