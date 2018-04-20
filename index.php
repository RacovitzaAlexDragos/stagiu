<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Stagiu</title>
        <link rel="stylesheet" type="text/css" href="public/reset.css"/>
        <link rel="stylesheet" type="text/css" href="public/style.css"/>
    </head>
    <body>
        <div class="wrapper">
            <div class="line center bold">
                <h1>PHPentaStagiu 2018</h1>
                <h2>M01.03 <span class="fun"> The Fun One</span></h2>
                <h3>
                    <a href="https://docs.google.com/presentation/d/19YulX3DUaNkP9aT8-jX9g4mPdwY6-F-rt8BOv8xQ1VA/" target="_blank">M01.02</a>
                </h3>
            </div>
            <div class="line">
                <ol class="ml20">
                    <li>Generati un array de numere
                        <ul>
                            <li>cuprins intre <span class="bold">Numar de pornire</span> si <span class="bold">Numar de sfarsit</span> excluzand cele doua numere</li>
                            <li>numarul maxim de elemente este <span class="bold">Numar de elemente</span></li>
                        </ul>
                    </li>
                    <li>Afisati toate numerele multiplu de 3</li>
                    <li>Numar de numere multiplu de 4</li>
                    <li>Suma numerelor multiplu de 5</li>
                </ol>
            </div>
            <div class="line">
                <form method="POST" class="center">
                    <p class="label">Numar de pornire</p>
                    <input type="text" name="startPoint"/>

                    <p class="label">Numar de sfarsit</p>
                    <input type="text" name="endPoint"/>

                    <p class="label">Numar de elemente</p>
                    <input type="text" name="iterations"/>

                    <p class="label">Numar de comparat</p>
                    <input type="text" name="compare"/>

                    <br/><br/>
                    <input type="submit"/>
                </form>
            </div>

            <div class="clear"></div>
        </div>
    </body>
</html>

<?php
if (!$_POST) {
    exit;
}
if(empty($_POST['startPoint'])|| empty($_POST['endPoint']))
{
    echo "Completati campurile";
    exit;
}

if(!empty($_POST['iterations'])&& $_POST['iterations']<1){
    echo "Introduceti numere pozitive";
    exit;
}
//Compara suma numerelor divizibile cu 5 cu un numar introdus de un uitilizator
function comparare($x,$y){
    if($x>=$y){
        echo "Suma este mai mare ca numarul de comparat";
    }
    else
        echo "Numarul de comparat este mai mare ca suma";
}

echo "<pre>";
$nr1=0;
$suma=0;
$comparare=$_POST['compare'];
$myArray=range($_POST['startPoint']+1,$_POST['endPoint']-1);
rsort($myArray);
if(!empty($_POST['iterations'])){
    $myArray=array_slice($myArray,0,$_POST['iterations']);
}
//$myArraarray_slice(range($_POST['startPoint']+1,$_POST['endPoint']-1),0,$_POST['iterations']);
print_r($myArray);
//parcurge un array aduna numerele si le imparte la numarul de iteratii
function media($myArray=[]){
    $media=0;
    foreach ($myArray as $key=>$value) {
        $numar = $_POST['iterations'];
        $media += $value / $numar;
    }
    return $media;
}
/*function modul($myArray=[],$modul){
    $nr=0;
    $suma=0;
    foreach ($myArray as $key=>$value){
        if($value%$modul==0){
            $nr++;
            $suma+= $value;
        }
        echo $nr;
        echo $suma;
    }
}*/
foreach ($myArray as $key=>$value){
    if($value%3==0){
        echo "numarul  ".  $value. " este divizibil cu 3\n";

        }

        if($value%4==0){
      $nr1++;
 }
    if  ($value%5==0) {
        $suma+= $value;
    }

}

/*for($i=$_POST['startPoint']+1; $i<$_POST['endPoint'];$i++)
{
    $myArray[] = $i;
    if($_POST['iterations']==count($myArray)){
        break;
    }

}*/
echo "avem " .$nr1. " divizibile cu 4\n";
echo "suma ". $suma. " este divizibila cu 5";

echo " ". comparare($suma,$comparare);

echo  " Media numerelor din Array este". media($myArray=range($_POST['startPoint']+1,$_POST['endPoint']-1));

//echo "Rezultatele sunt" .modul($myArray=range($_POST['startPoint']+1,$_POST['endPoint']-1),5);

