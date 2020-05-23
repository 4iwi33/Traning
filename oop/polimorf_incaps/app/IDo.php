<?php

namespace app;

class IDo
{
    public  $mood = "Хорошее";

    public function walk($rain = false)
    {
        if ($rain) {
            echo "Мы не идём гулять , там дождь\n";
        } else {
            echo "Мы идём гулять , погода хорошая\n";
        }
    }
}
