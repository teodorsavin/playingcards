<?php

namespace PlayingCards;

class Debug
{
    public static function dd($v)
    {
        echo '<pre>';
        var_dump($v);
        echo '</pre>';
        die();
    }
}

?>
