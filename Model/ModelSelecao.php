<?php

class ModelSelecao
{
    public $id, $nome, $serie;
    public $rows;

    public function save()
    {
        include 'DAO/DAOSelecao.php';

        $dao = new DAOSelecao();

        if(empty($this->id)) 
        {
            $dao->insert($this);
        } else {
            
            $dao->update($this);
        }
    }
    public function getAllRows()
    {
        include 'DAO/DAOSelecao.php';

        $dao = new DAOSelecao();

        $this->rows=$dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/DAOSelecao.php';

        $dao = new DAOSelecao();

        $obj = $dao -> selectById($id);

        return($obj) ? $obj : new DAOSelecao();
    }

    public function delete(int $id)
    {
        include 'DAO/DAOSelecao.php';

        $dao = new DAOSelecao();

        $dao -> delete($id);
    }
}
?>