<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minu php Roomet A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">

<div class="row">
        <div class="col-sm-4">
        <?php
        echo "<h1> Harjutus 01 <h1>";
echo "(\(\\" . '<br>';
echo "( -.-)" . '<br>';
echo "o_(\")(\")" . '<br>';

echo "<h1>Harjutus 02</h1>";
$a = 6;
$b = 4;

printf("%d + %d = %d <br>" , $a, $b, $a+$b );
printf("%d - %d = %d <br>", $a, $b, $a-$b); 
printf("%d * %d = %d <br>", $a, $b, $a*$b); 
printf("%d / %d = %.2f <br>", $a, $b, $a/$b); 

echo "<h4>Millimeetrite teisendamine cm</h4>";

$mm = 1234;
$cm = $mm / 10;
$m = $mm / 1000;

echo "$mm mm = " . number_format($cm, 2) . " cm<br>";
echo "$mm mm = " . number_format($m, 2) . " m<br><br>";

// Täisnurkse kolmnurga ümbermõõt ja pindala
$k1 = 3;
$k2 = 4;
$h = sqrt(pow($k1, 2) + pow($k2, 2)); // Pythagorase teoreem
$ymbermoot = round($k1 + $k2 + $h);
$pindala = round(($k1 * $k2) / 2);

echo "Täisnurkse kolmnurga ümbermõõt on $ymbermoot ühikut.<br>";
echo "Täisnurkse kolmnurga pindala on $pindala ühikut.<br>";

/*
	04 - PHP - Muutujad
	Roomet Altmäe
	Haapsalu Kutsehariduskeskus
	11.02.2025
*/
// "Joonista" järgmine pilt






?>
        
        </div>
        <div class="col-sm-4">
            <h1>Harujutus 3</h1>
            <form>
                a <input type="number" name="a"><br>
                b <input type="number" name="b"><br>
                h <input type="number" name="h"><br>
                <input type="submit" value="Arvuta"><br>
            </form>
            <?php
            if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['h'])) {
            $a = $_GET['a'];
            $b = $_GET['b'];
            $h = $_GET['h'];

            $s = ($a+$b)/2*$h;

            printf("Trapetsi pindala on %.1f", $s);

        }

        ?>

<h1>Ülesanne 4</h1>
<form>
        nr1 <input type="number" name="nr1"><br>
        nr2 <input type="number" name="nr2"><br>
        <input type="submit" value="Arvuta"><br>
    </form>
<?php
if(isset($_GET['nr1']) && isset($_GET['nr2'])){
    $nr1 = $_GET['nr1'];
    $nr2 = $_GET['nr2'];
if ($nr2==0) {
    echo "Nulliga ei saa jagada";
} else {
    printf("%d / %d = %.2f", $nr1, $nr2, $nr1/$nr2);
}

echo "<br>";
// Vanuste värk
if ($nr1>$nr2) {
    echo "Esimene tüüp on vanem";
}
if ($nr1<$nr2) {
    echo "Teine tüüp on vanem";
}
else{
    echo "Ühevanused";
}
echo "<br>";
// Kujund, kas ristkülik või ruut
if ($nr1>$nr2) {
    echo "Ristkülik";
    echo '<img src="https://www.real.edu.ee/matemaatika/sisu/0148/joonis1.gif" alt="Ristkülik">';
}

else{
    echo "Ruut";
    echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDesunjsubIFj_dXbPKh1xTvkBFCrDV162-92rlDGpswbpEuk4orMNoXwbuyYLAtBDlHw&usqp=CAU" alt="Ruut">';
}



}

        ?>
        </div>
</div>
</div>
</body>
</html>