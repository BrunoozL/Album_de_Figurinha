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
                (nome, idade, posicao, nivel)
                VALUES (?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->idade);
        $stmt->bindValue(3, $model->posicao);
        $stmt->bindValue(4, $model->nivel);
       
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
        include_once 'Model/ModelCarta.php';

        $sql = "SELECT * FROM carta WHERE id = ?";

        $stmt = $this -> conexao -> prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt -> fetchObject("ModelCarta");
    }

    public function update(ModelCarta $model)
    {
        $sql = "UPDATE carta SET nome=?, idade=?, posicao=?, nivel=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->idade);
        $stmt->bindValue(3, $model->posicao);
        $stmt->bindValue(4, $model->nivel);
        $stmt->bindValue(5, $model->id);

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