<?php
namespace Thierry\Course\Model\TeacherTable;
use Thierry\Course\Model\Table;
class TeacherTable extends Table{
    public function insertCourse(string $title, string $banner, string $description, string $introduce, float $price, string $category){
        $this->database->insert_datas(
            "INSERT INTO course(title, description, banner, price, introduce)
                VALUE(?,?,?,?,?),
                )"
        ,[$title, $description, $banner, $price, $introduce]);
    }
    public function addCategorie(string $category){
                
    }
}