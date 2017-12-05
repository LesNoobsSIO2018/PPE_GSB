<?php
class Model_Deconseil extends CI_Model
{
    public function getDeconseil()
    {
        $sql=$this->db->query("select * from interagir");
        return $sql->result();
    }      
}

