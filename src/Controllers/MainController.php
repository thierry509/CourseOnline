<?php
namespace Thierry\Course\Controllers;
use \PDO;
use Thierry\Course\Controllers\CourseController\Course;
use Thierry\Course\Model\CourseTable\CourseTable;

class MainController extends Controller{
    public function home(array $params){
        // dd($params);
        $table = new CourseTable();
        $datas = $table->getAllCourse();
        $this->render('home.php', $datas);
        // $value["path"] = $this -> viewPath. DIRECTORY_SEPARATOR . 'home.php';
    }
    public function course_liste(){
        
    }
}