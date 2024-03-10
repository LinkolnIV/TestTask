<?php


namespace App\Services;

use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use Imagine\Image\Point;
use Imagine\Image\ImageInterface;
class ImgService
{
    private Imagine $Imagine;

    public function __construct()
    {
        $this->Imagine = new Imagine();
    }

    public function changeSize(string $name,$x,$y,$Width,$height): bool
    {
        try {
            $box = new Box($Width, $height);
            $this->Imagine->open($name)
            ->resize($box)
            // ->crop(new Point($x,$y),$box)
            ->save($name,['resolution-units'=>ImageInterface::RESOLUTION_PIXELSPERINCH, 'resolution-x' => $x,'resolution-y'=>$y]);

            return true;

        } catch (\Error) {
            throw new \Error('Ошибка при обработке изображений');
        }
    }
}
