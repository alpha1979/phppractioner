<?php  

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table)
    {
        $stmt = $this->pdo->prepare("Select * from  $table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertName($table, $paramters)
    {

        // var_dump(implode(',', array_keys($paramters)));
        // var_dump(':' . implode(', :', array_keys($paramters)));
        // $description = array_keys($paramters);
        $sql = sprintf(
            "Insert into %s (%s) VALUES (%s)", 
            $table, 
            implode(',', array_keys($paramters)),
            ':' . implode(', :', array_keys($paramters))
        );
        // var_dump($sql);
        // die();
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($paramters);
        } catch (PDOException $e) {
            die('Woops something went wrong' . $e->getMessage());
        }
       
    }
}