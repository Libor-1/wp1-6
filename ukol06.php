<?php
$rope = true;
$knife = true;
$woodchunk = false;
$nails = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Inventář</h1>
<?php

if ($rope == true) { echo "Máš provaz.<br>";
} else { 
    echo "Nemáš provaz.<br>";
}

if ($woodchunk == true) { echo "Máš dřevo.<br>";

} else { <image src="drevo.jpg">
    echo "Nemáš dřevo.<br>";
}

if ($knife == true) { echo "Máš nůž.<br>";

} else {
    echo "Nemáš nůž.<br>";
}

if ($nails == true) { echo "Máš hřebíky.<br>";

} else {
    echo "Nemáš hřebíky.<br>";
}

?>

<h2>Můžeš vyrobit</h2>

<?php

if ($rope && $knife && $woodchunk) {
    echo "Luk<br>";
}
if ($nails && $woodchunk) {
    echo "Pálka s hřebíky<br>";
}
if ($rope && $woodchunk) {
    echo "Nunchaky<br>";
}
if ($knife && $woodchunk) {
    echo "Kopí<br>";
}

?>

</body>
</html>