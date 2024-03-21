<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>show: muestra el post <?php echo $post;?></h1>
    <h2>show: muestra el post <?= $post ?></h2>
        <!--en la plantilla de laravel podemos-->
    <h2>show: muestra el post {{$post}}</h2>

    @if (true) <!--directivas "@" ELSE, @SWITH($TIPE), @php, @FOREACH($COLECCION AS $ITEM)-->
        <p>Contenido true</p>
    @endif



</body>
</body>
</html>