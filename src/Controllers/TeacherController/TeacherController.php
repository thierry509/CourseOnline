<?php
namespace Thierry\Course\Controllers\TeacherController;
use Thierry\Course\Controllers\Controller;
use Thierry\Course\Model\TeacherTable\TeacherTable;
use Thierry\Course\SetImage\SetImage;

class TeacherController extends Controller{
    private $table;
    public function __construct(){
        $this->table = new TeacherTable();
    }
    public function addCourse(){
        $message = [];
        // dd($_FILES);
        if(!empty($_POST) && !empty($_FILES)){
            if(!empty($_POST['title']) && !empty($_POST['category']) && 
            !empty($_POST['description']) && !empty($_POST['introduce'])){
                if($this->isCorrect($_FILES['banner']["name"])){
                    $data['post'] = $_POST;
                    $data['file'] = $_FILES['banner'];
                    $save['directory'] = banner_path;
                    $save['fileName'] = $_POST['title'];
                    $save['ext'] = '.png';
                    $image = new SetImage();
                    $image->manageImg($data['file']['tmp_name'], 259, 173,$save);
                    $this->table->addCategorie($_POST['category']);
                    $message['succes'] = "Kou an anrejistre avek sikse";
                }else{
                    $message["error"]["unhautorized"] = "Sel foto png ak jpg ki aksepte sou system lan";
                }     
            }
            else{ 
                $message['error']["Empty"] = "Infomasyon yo pa dwe vid";
            }
            
        }
        $this->render('admin/addCourse.php', $message);
    }
    private function isCorrect(string $image_name):bool{
        $ext = strtolower(substr($image_name, -3));
        if($ext === 'png' || $ext === 'jpg'){
            return true;
        }
        return false;
    }
}   