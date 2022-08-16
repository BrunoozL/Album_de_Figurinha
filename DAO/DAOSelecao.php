<?php

class DAOSelecao
{
    private $conexao;

    public function __construct() 
    {
        $dsn = "mysql:host=localhost:3307;dbname=album_de_figurinha";
        $user = "root";
        $pass = "etecjau";

        $this->conexao = new PDO($dsn, $user, $pass);
    }

    public function insert(ModelSelecao $model) 
    { 
        $sql = "INSERT INTO selecao 
                (nome, serie)
                VALUES (?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->serie);
        
        $stmt->execute();      
    }
    
    public function select()
    {
        $sql = "SELECT * FROM selecao";

        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> execute();

        return $stmt -> fetchAll();
    }

    public function selectById($id)
    {
        include_once 'Model/ModelSelecao.php';

        $sql = "SELECT * FROM selecao WHERE id = ?";

        $stmt = $this -> conexao -> prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt -> fetchObject("ModelSelecao");
    }

    public function update(ModelSelecao $model)
    {
        $sql = "UPDATE selecao SET nome=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id);
        $stmt->bindValue(3, $model->serie);

        $stmt -> execute();
    }
        
    public function delete(int $id)
    {
        $sql = "DELETE FROM selecao WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt-> execute();
    }
}
?>