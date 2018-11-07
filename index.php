<?php

include 'Abstract_Character.php';
include 'Session.php';
include 'Game.php';
include 'Bot.php';
include 'Player.php';

/** intiliaze **/
$game = new Game();

/** Game Play **/
$game->create('player', 'ted');
$game->player['ted']->setHP('200');
$game->player['ted']->setDmg('200');
$game->player['ted']->show();

$game->create('bot', 'boss');
$game->bot['boss']->setHP('500');
$game->bot['boss']->setDmg('100');    
$game->bot['boss']->show();

$game->player['ted']->battle($game->bot['boss']);
$game->player['ted']->battle($game->bot['boss']);
