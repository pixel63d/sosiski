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
    elseif ($tempTudey <= 13) {

            if ($tempYesterday >= 11 && $tempTomorrow >= 11){
                echo 'Одень шапкку';
            }
            if ($tempYesterday < 11 || $tempTomorrow < 11){
                echo 'одень зимнюю шапку';
            }
            elseif ($isDown || $count >= 1) {
                echo 'ты хорошо оделся?';
            }
        }

}

mommyCheck(10, 9,5 , true, 'замерзла');



?>
