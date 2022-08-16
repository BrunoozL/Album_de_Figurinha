<?php

class DAOCarta
{
    private $conexao;

    public function __construct() 
    {
        $dsn = "mysql:host=localhost:3307;dbname=album_de_figurinha";
        $user = "root";
        $pass = "etecjau";

        $this->conexao = new PDO($dsn, $user, $pass);
    }

    public function insert(ModelCarta $model) 
    { 
        $sql = "INSERT INTO carta 
                (nome, idade, posicao, nivel, selecao)
                VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        
        $stmt->execute();      
    }
    
    public function select()
    {
        $sql = "SELECT * FROM carta";

        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> execute();

        return $stmt -> fetchAll();
    }

    public function selectById($id)
    {
        include_once 'Model/Model.php';

        $sql = "SELECT * FROM carta WHERE id = ?";

        $stmt = $this -> conexao -> prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt -> fetchObject("ModelCarta");
    }

    public function update(ModelCarta $model)
    {
        $sql = "UPDATE carta SET nome=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id);

        $stmt -> execute();
    }
        
    public function delete(int $id)
    {
        $sql = "DELETE FROM carta WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt-> execute();
    }
}
?>