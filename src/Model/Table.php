<?php
namespace Thierry\Course\Model;
abstract class Table{
    protected $database;
    public function __construct(){
        $this->database = new Database(HOST, USER, PASSWORD, DATABASE);
    }
}