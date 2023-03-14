<?php
namespace Thierry\Course\Controllers\CourseController;
use Thierry\Course\Controllers\Controller;

use \PDO;
use Thierry\Course\Model\CourseTable\CourseTable;
class CourseController extends Controller{  
    private $table;
    public function __construct(){
        $this->table = new CourseTable();
        
    }
    /**
     * return a path of a list course view
     * @return string
     */
    public function listCourse($param){
        $data = $this->table->getAllCourse();
        $this->render('course/courseListe.php', $data);
    }
    /**
     * return a array content the path of view of cource presentation and of data
     * @return array
     */
    public function presentationCourse($params){
       $datas = $this->table->getCourse([(int)$params['id']]);
        if($datas['courseInfo'] != false){
            $this->render('course/coursePresentation.php', $datas);
        }else{
            echo "<h1>Kou sa pa egziste sou system lan</h1>";
        }
    }
    public function validation($param){
        $data = $this->table->getCourse([(int)$param['id']]);
        if($data['courseInfo'] != false){
            $this->render('course/validation.php', $data);
        }else{
            echo "<h1>kou sa pa egziste sou system lan</h1>";
        }
    }
    /**
     * return a path of a session course view
     * @return string
     */
    public function session():string{
        return($this->viewPath . DIRECTORY_SEPARATOR . 'course/session.php');
    }
}