<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    $firstName="Janusz";
    $lastName="Nowak";
    echo "Imie i Nazwisko: $firstName $lastName<br>";
    echo 'Imie i Nazwisko: $firstName $lastName<br>';
    //heredoc
    echo<<< DATA
    <hr>
     Imię: $firstName<br>
     Nazwisko: $lastName
     <br>
    DATA;

    $data=<<< DATA
    
    <hr>
     Imię: $firstName<br>
     Nazwisko: $lastName
     <br>
    DATA;

    echo $data;

    // nowdoc
    echo<<< 'DATA'
    <hr>
     Imię: $firstName<br>
     Nazwisko: $lastName
     <br>
    DATA;

    $bin = 0b1010;
    echo $bin ;//10
    $oct=010;
    echo $ost; //8

    $hex =0xA;
    echo $hex;


    
    ?>
</body>
</html>