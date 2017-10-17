<?php

function testLeeftijd($age){
    if ($age < 16){
        return $age . " jaar is te jong voor deze film.";
    }

    else if ($age >= 16 && $age <= 18){
        return $age . " jaar, je hebt ouderlijk toezicht nodig.";
    }

    else {
        return "Je bent al $age jaar. Geniet van de film";
    }
}

echo testLeeftijd(1000);