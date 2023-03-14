<?php
namespace Thierry\Course\SetImage;
use Intervention\Image\ImageManager;
class SetImage{
    private $manager;
    
    public function __construct(){
        $this->manager = new ImageManager();
    }
    public function manageImg(string $pathImg, float $width, float $height, array $save){
        $img = $this->manager->make($pathImg);
        $img->fit($width, $height);
        $img->save($save['directory'] . $save['fileName'] . $save['ext']);
    }
}