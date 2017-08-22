<?php

require_once('Card.php');
require_once('Cards.php');
require_once('Deck.php');
require_once('Table.php');
require_once('Player.php');
require_once('CrazyEights.php');
require_once('Log.php');

// Debug
require_once('Debug.php');

// Get the cards
$deck = new PlayingCards\Deck();
$deck->shuffleDeck();

// Find players
$players = [];
$teodor = new PlayingCards\PLayer("Teodor");
$elena = new PlayingCards\PLayer("Elena");
$mihai = new PlayingCards\PLayer("Doru");
$andrei = new PlayingCards\PLayer("Iulia");

// Adding players to the table
array_push($players, $teodor);
array_push($players, $elena);
array_push($players, $mihai);
array_push($players, $andrei);

$table = new PlayingCards\Table($players);

// Playing Crazy Eights
$table->playCrazyEights();

// PlayingCards\Debug::dd($players);
