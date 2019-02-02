<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $ale;
    $acierto = false;
    $resp = "";
    if(isset($_GET['numero'])){
        if($_GET['numero']!= ""){
            if($_GET['numero']>$_GET['aleatorio']){
                $resp =  'El numero es mas pequeño';
            }
            else{
                if($_GET['numero']<$_GET['aleatorio']){
                    $resp =  'El numero es mas grande';
                }
                else{
                    $acierto = true;
                }
            }
        }
        
    }
    if(!isset($_GET['aleatorio']) || $acierto == true){
        $ale = (rand(1,100));
        if($acierto == true){
            echo '<form action="SegundoEjercicio.php">
            <p>Has acertado</p>
            <input type="text" name="numero" id="">
            <input type="submit" value="Reintentar">
            <input type="hidden" name="aleatorio" value="'.$ale.'">
            </form>';
        }
        else{
            echo '<form action="SegundoEjercicio.php">
            <p>Introduce un número</p>
            <input type="text" name="numero" id="">
            <input type="submit" value="Enviar">
            <input type="hidden" name="aleatorio" value="'.$ale.'">
            </form>';
        }
        
    }
    else if($acierto == false){
        echo '<form action="SegundoEjercicio.php">
        <p>'.$resp.'</p>
        <input type="text" name="numero" id="">
        <input type="submit" value="Enviar">
        <input type="hidden" name="aleatorio" value="'.$_GET['aleatorio'].'">
        </form>';
    }
    ?>
    
</body>
</html>