<?php
namespace Thierry\Course\Controllers\CourseController;

class Course{
    /**
     * 
     */
    /**
     * @var int
     */
    private int $id;
    /**
     * @var string
     */
    private string $title;
    /**
     * @var string
     */
    private string $description;
    /**
     * @var string
     */
    private string $banner;
    /**
     * @var float
     */
    private float $price;

    /**
     * @return int
     */
    private int $teacher_id;
    /**
     * @var string
     */
    private string $first_name;
    /**
     * @var string
     */
    private string $last_name;
    /**
     * @return int
     */
    private $category_title;
    private $objective;
    private $prerequiste;

    private string $introduce;
    public function get_id():int{
        return $this->id;    
    }
    /**
     * @return string
     */
    
     public function get_title():string{
        return $this->title;
    }
    /**
     * @return string
     */
    public function get_description():string{
        return $this->description;
    }
    /**
     * @return string
     */
    public function get_teacher():string{
        return $this->first_name . " " . $this->last_name;
    }

    /**
     * @return string
     */
    public function get_slug():string{
        return str_replace(" ", "_", $this->title);
    }
    public function get_reduce(){
        return ($this->price * 25) / 100;
    }
    /**
     * @return float
     */
    public function get_price():float{
        return $this->price;
    }
    public function get_price_max():float{
        return $this->price + $this->get_reduce();
    }
    public function get_banner():string{
        return $this->banner;
    }
    public function get_introduce(){
        return $this->introduce;
    }

}