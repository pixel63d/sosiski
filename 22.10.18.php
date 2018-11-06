
<?php
echo 'POST: <br />';
var_dump($_POST);
echo '<br />GET: <br />';
var_dump($_GET);
echo '<br />';

$age = $_POST['age'] ;
if (empty($age)) {
    $age = 28;
}
$name = $_POST ['name'] ;
if (empty($name)){
    $name = 'Виталий';
}
$surname = $_POST ['surname'];
if (empty($surname)){
    $surname = 'Буйко' ;
}


$isStudent = true;//radiobutton или select
$postCode = 446666;
$gender = 'male';//html radiobutton или select

echo 'Меня зовут ' .  $name . ' моя фамилия ' . $surname . ' мне ' . $age . ' лет мой почтовый код ' . $postCode . '<br />';
if ($isStudent==true){
    echo 'Я студент. ';
}
else {
    echo 'Я не стдент. ';
}

if ($age>30 && $gender=='male'){
    echo 'Я дед ';
}
elseif ($age==30 && $gender=='male'){
    echo 'Я почти дед ';
}
else {
    echo 'хз';
}

?>
<html>
<body>
<form method="post" action="#">
    <input type="text" name="name" placeholder="enter name" >
    <input type="text" name="surname" placeholder="enter surname" >
    <input type="text" name="age" placeholder="enter age" >

    <input type="submit" value="enter">
</form>
</body>
</html>
