<?php
$name = 'Виталий' ;
$surname = 'Буйко' ;
$age = 25 ;
$isPregnant = false;
$isStudent = true;
$postCode = 446666;
$gender = 'male';

echo 'Меня зовут ' .  $name . ' моя фамилия ' . $surname . ' мне ' . $age . ' лет мой почтовый код ' . $postCode . '<br />';
if ($isStudent==true){
    echo 'Я студент. ';
}
else {
    echo 'Я не стдент. ';
}

$age1 = $age+5;
if ($age1>30 && $gender=='male'){
    echo 'Я дед ';
}
elseif ($age1==30 && $gender=='male'){
    echo 'Я почти дед ';
}
else {
    echo 'хз';
}

if ($age1 != $age){
    $age1=$age;
}
echo '.<br /> Измененное значение $age1: ' . $age1 . '<br />';
echo 'Результат явного приведения bool к int: ' . (int)$isStudent . '<br />';



?>