<?php
namespace Thierry\Course\Model\CourseTable;
use Thierry\Course\Model\Database;
use Thierry\Course\Model\Table;
use Thierry\Course\Controllers\CourseController\Course;
use \PDO;
class CourseTable extends Table{
    public function getAllCourse(){
        $data =  $this->database->get_datas(
            'SELECT c.id, c.title, c.description, c.banner, c.price, 
            u.id AS teacher_id, u.first_name, u.last_name 
            FROM course c 
            JOIN course_teacher ct ON c.id = ct.course_id 
            JOIN teacher t ON t.id = ct.teacher_id 
            JOIN user u ON u.id = t.user_id;'
        );
        $data->setFetchMode(PDO::FETCH_CLASS, Course::class);
        $data = $data->fetchAll();
        return $data;
    }
    public function getCourse($id){
        $data =  $this->database->get_datas(
            'SELECT c.id, c.title, c.description, c.banner, c.price, c.introduce, u.id AS teacher_id, 
            u.picture AS teacher_pic, u.first_name, u.last_name
            FROM course c 
            JOIN course_teacher ct ON c.id = ct.course_id 
            JOIN teacher t ON t.id = ct.teacher_id 
            JOIN user u ON u.id = t.user_id WHERE c.id = ?', $id);
        $data->setFetchMode(PDO::FETCH_CLASS, Course::class);
        $datas['courseInfo'] = $data->fetch();
        $obj = $this->database->get_datas(
            'SELECT content 
            FROM objective WHERE course_id = ?',
            $id
        );
        $datas['objective'] = $obj->fetchAll();

        $prerequiste = $this->database->get_datas(
            'SELECT content
            FROM prerequisite WHERE course_id = ?',
            $id
        );
        $datas['prerequisite'] = $prerequiste->fetchAll();
        return $datas;
    }
}