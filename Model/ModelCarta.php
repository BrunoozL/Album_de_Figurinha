<?php

class ModelCarta
{
    public $id, $nome, $idade, $posicao, $nivel, $id_selecao;
    public $rows;

    public function save()
    {
        include 'DAO/DAOCarta.php';

        $dao = new DAOCarta();

        if(empty($this->id)) 
        {
            $dao->insert($this);
        } else {
            
            $dao->update($this);
        }
    }
    public function getAllRows()
    {
        include 'DAO/DAOCarta.php';

        $dao = new DAOCarta();

        $this->rows=$dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/DAOCarta.php';

        $dao = new DAOCarta();

        $obj = $dao -> selectById($id);

        return($obj) ? $obj : new DAOCarta();
    }

    public function delete(int $id)
    {
        include 'DAO/DAOCarta.php';

        $dao = new DAOCarta();

        $dao -> delete($id);
    }
}
?>