<?php

namespace PlayingCards;

class Table
{
    protected $players;
    protected $cards;
    protected $discardPile;
    protected $deck;

    public function __construct(array $players)
    {
        $this->deck = new Deck();
        $this->players = [];
        $this->discardPile = [];
        foreach($players as $player)
        {
            $this->addPlayer($player);
        }
    }

    /**
     * @param Player $player
     */
    public function addPlayer(Player $player)
    {
        array_push($this->players, $player);
    }

    /**
     * Deal cards to all the players on the table
     */
    public function dealCards()
    {
        $this->deck->shuffleDeck();

        for ($i = 0; $i<CrazyEights::getNoOfFirstHandCards(); $i++) {
            foreach ($this->players as $player) {
                $player->addCard(array_shift($this->deck->cards));
            }
        }
    }

    public function playCrazyEights()
    {
        Log::startedPlaying("Crazy Eights");
        $this->dealCards();
        Log::playersCards($this->players);

        // First card on the deal pile should be in the discard pile
        $firstCard = array_shift($this->deck->cards);
        array_push($this->discardPile, $firstCard);
        Log::firstCardOnTheTable($firstCard);

        $winner = null;
        while ($winner == null) {
            foreach ($this->players as $player) {
                CrazyEights::nextPlayerMove($player, $this->discardPile, $this->deck->cards);

                if (empty($player->getCards())) {
                    $winner = $player;
                    break;
                }
            }
            Log::nextRound();
        }

        Log::winner($winner);
    }
}

?>
