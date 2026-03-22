<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('images/square-image.webp');

$image->resize(null, 300);

$image->save('images/nova-imagem.jpg');

echo "Imagem processada!";