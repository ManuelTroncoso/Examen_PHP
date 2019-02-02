<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>DisFruta con PHP</h1>

<?php
$ale = (rand(7,20));
echo '<h2>'.$ale.' frutas</h2>';
$todalafruta = array();
echo '<p style="font-size: 7rem">';
for($i = 0;$i<$ale;$i++){
    $frutale = rand( 127815, 127827);
    $todalafruta[] =$frutale;
    echo '&#'.$frutale;
}
echo '</p>';

echo '<h2>Resultados</h2>';
for($i=127815;$i<=127827;$i++){
    $temp = 0;
    for($j=0;$j<=$ale;$j++){
        if($i == $todalafruta[$j]){
            $temp++;
        }
    }
    if($temp!=0){
        if($temp == 1){
            echo'<p>La fruta <span style="font-size: 2rem">&#'.$i.';</span> está <strong>'.$temp.'</strong> vez en la lista.</p>';
        }
        else{
            echo'<p>La fruta <span style="font-size: 2rem">&#'.$i.';</span> está <strong>'.$temp.'</strong> veces en la lista.</p>';
        }
        
    }
    
}
?>

<br>
  <button onclick="location.reload()">¡¡¡ DisFruta otra vez !!!</button>
<br>

</body>
</html>