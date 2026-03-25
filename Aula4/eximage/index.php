<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('images/meninas.jpg');

$image->resize(null, 300, function ($constraint) {
    $constraint->aspectRatio(); 
    $constraint->upsize(); 
});

$image->save('images/nova-imagem.jpg');

echo "<img src='images/nova-imagem.jpg'><br>";
echo "<br>Imagem processada!<br>";