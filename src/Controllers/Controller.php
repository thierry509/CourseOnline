<?php
namespace Thierry\Course\Controllers;
use Thierry\Course\Model\Database;

abstract class Controller{
    private $loader;
    protected $viewPath = urlPath;

    protected $database;
    protected function render($view, ?array  $data = null){
        // dd($data);
        $datas = $data;
        // dd($datas);
        require($this->viewPath . DIRECTORY_SEPARATOR . $view);
    }
}