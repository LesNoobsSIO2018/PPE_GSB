<?php

class Model_Visiteur extends CI_Model{
    public function GetAllVisiteur(){
        $sql = $this->db->query("select * from visiteur");
       return $sql->result();
    }

    public function insertVisiteurs($data){
         $this->db->insert("visiteur",$data);
    }

}
