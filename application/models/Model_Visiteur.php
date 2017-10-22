<?php

class Model_Visiteur extends CI_Model{
    public function GetAllVisiteur(){
        $sql = $this->db->query("select * from visiteur, secteur where visiteur.SEC_CODE = secteur.SEC_CODE");
       return $sql->result();
    }

    public function insertVisiteurs($data){
         $this->db->insert("visiteur",$data);
    }
    public function GetLabo(){
          $sql = $this->db->query("select * from labo");
       return $sql->result();
    }

}
