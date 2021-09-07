<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>This is an HTML code</h1>
    <?php

    //This is a PHP comment
    #This is another inline comment
    /*
    This is a multiline PHP comment
    */
    $num1 = 5.5655656565655656554;
    $num2 = 6;
    $Num1 = 12;
    $firstName = 'Ramy';
    $last_name = 'Mohamed';
    $firstName = $firstName.$last_name;
    $firstName.=$last_name;
    echo $num1 + $num2 + $Num1;
    echo '<br />';
    echo $firstName . ' ' . $last_name;
    echo '<br />';
    echo 0.1 + 0.2;
    echo '<br />';
    var_dump($num1);
    /*
    obj1.name;
    obj->name;
    Class::name;

    +
    -
    *
    /
    %
    ++
    --
    =
    +=
    -=
    *=
    /=
    .=
%=
==
!=
>
<
>=
<=

&&
||
!


    */

    echo str_replace('Ramy','Rami',$firstName);
    ?>
</body>

</html>