<?php

function mommyCheck($tempYesterday, $tempTudey, $tempTomorrow, $isRain, $aniPhrase ){
    $count=0;
    if(stripos($aniPhrase,'холодно' )!== false){
        $count+=1;
    }
    if(stripos($aniPhrase,'замерзла' )!== false){
        $count+=1;
    }
    if(stripos($aniPhrase,'заморозки' )!== false){
        $count+=1;
    }

    $isDown = ($tempYesterday > $tempTudey && $tempTudey > $tempTomorrow);
    if ($count>=2 && $isDown && ($tempTudey-$tempTomorrow)>5){
        echo 'ты не пройдешь Равиль!!!';
    }
    else{
        goWithRestrictions($tempYesterday, $tempTudey, $tempTomorrow, $isRain, $isDown, $count);
    }
}

function goWithRestrictions($tempYesterday, $tempTudey, $tempTomorrow, $isRain, $isDown, $count)
{
    if ($tempTudey < 13) {
        if ($tempYesterday >= 11 && $tempTomorrow >= 11) {
            echo 'Одень шапкку ';
        } elseif ($tempYesterday < 11 || $tempTomorrow < 11) {
            echo 'одень зимнюю шапку ';
        }
    }

    if ($isRain == true) {
        echo ' и возьми с собой зонтик';
        if (($tempTudey - $tempTomorrow) > 3) {
            echo ' и шарф.';
        }
    }

    if ($isDown || $count >= 1) {
        echo ' Ты хорошо оделся?';
    }
}

mommyCheck(10, 9, 6, true, 'заморозки, замерзла');



?>
