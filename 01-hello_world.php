<?php
//  nicolas doppia nicolas
pffp
function ls($user)
{
    echo "hello Wolrd <\n>";
}



function ls1($user1)
{
    echo "hello $user1<\n>";
}

ls("user");


function add($nb1, $nb2)
{
    echo $nb1 + $nb2 . "\n";
}

add(5, 8);


function mty($v)
{

    if (empty($v)) {
        echo "vide <\n>";
    } else {
        echo "non vide <\n>";
    }
}

mty("");

function lm($n2, $n3)
{

    if ($n2 > $n3) {
        echo "$n2 <\n>";
    } else {
        echo "$n3 <\n>";
    }
}

lm(4, 8);

function lose($num)
{

    if ($num === 1) {
        echo "positif<\n>";
    } elseif ($num === 0) {
        echo "negatif <\n>";
    } else {
        echo "null<\n>";
    }
}

lose(5);




function crs($str)
{
    if (strlen($str) > 10) {
        echo "longue<\n>";
    } else {
        echo "courte<\n>";
    }
}
crs('la mélancolie');

function fhello($for = 10){
        for ($for++){
            

        }

            return 


}

function fh_under($for1){
    for ($for1++ === 10) 

        echo"hello $for1<\n>";
        break;
}

        if($for1 % 3){
            echo"hello $for1'___'<\n>";
            break;
        }
//     }

// }

function dat()
{
    echo "la date du jour' '\n" .  date('d / m / y');
    return;
}

echo dat();


$var[] = "banane";
$var[] = "pomme";
$var[] = "tomate";
$var[] = "orange";
$var[] = "abricot";

function Fruit($var)
{
    echo " $var\n";

    return;
}








function occu($var4, $var3)
{
    echo strlen($var4) . "\n";
    echo strlen($var3) . "\n";
}

occu('le nombre', 'a');


function inv($var7)
{

    echo strrev($var7);
}

inv('le menu');

$tab = [1, 2, 3, 4];

function ivtab($tab)
{
    echo "$tab";
}

ivtab(array($tab));

function invtab($tab)
{
    echo "$tab";
}

invtab(array($tab));



$arrayName  = [20, 50, 30, 44, 78, 22];

function tableM($arrayName = array(20, 50, 30, 44, 78, 22))
{
 if($arrayName <= 100 && $arrayName >= 55){
    echo"c'est le nombre max";
 }

}
tableM();

function v($n)
{
    echo var_dump($n);
}

v($tab);


function r($m)
{
    echo print_r($m);
}

r($tab);

function compterVoyelles($chaine)
{
    $voyelles = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $nombreDeVoyelles = 0;
    for ($i = 0; $i < strlen($chaine); $i++) {
        if (in_array($chaine[$i], $voyelles)) {
            $nombreDeVoyelles++;
        }
    }
    return $nombreDeVoyelles;
}


compterVoyelles("dans la vallet du nevada un homme roulait sur un sentier");

function out()
{

    include is_writable("./01-write.php");
}
