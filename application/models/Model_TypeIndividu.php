<?php
class Model_TypeIndividu extends CI_Model{
    public function getAllTypeIndividu(){
        $sql=$this->db->query("select * from type_individu");
        return $sql->result();
    }
}

