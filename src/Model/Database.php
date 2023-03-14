<?php
namespace Thierry\Course\Model;
use \PDO;
use PDOException;
use PDOStatement;

class Database{
    /**
     * @var PDO
     */
    private PDO $db;
    public function __construct(string $host, string $username, string $password, string $database)
    {
        try{
            $this->db = new PDO("mysql:host=" . $host . ";dbname=" . $database, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }catch(PDOException $e){
            echo 'imposible de connecter a la base de donne' . $e;
        }
    }
    
    /**
     * @param string $query
     * @param array|null $value
     * @param string|null $class
     * 
     * @return PDOStatement
     */
    public function get_datas(string $query, ?array $value = []): PDOStatement{
        $data = $this->db->prepare($query);
        $data->execute($value);
        // $data->setFetchMode(PDO::FETCH_CLASS, $class::class);
        return $data;
    }
    // public function get_data(string $query, ?array $value = [], string $class):Array{
    //     $data = $this->db->prepare($query);
    //     $data->execute($value);
    //     $data->setFetchMode(PDO::FETCH_CLASS, $class::class);
    //     return $data->fetch();
    // }
    public function insert_datas(string $query, array $value){
        $data = $this->db->prepare($query);
        $data->execute($value);
        return true;
    }
}