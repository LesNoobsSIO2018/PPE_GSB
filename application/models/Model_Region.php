<?php

class Model_Region extends CI_Model{
    public function GetAllRegion(){
        $sql = $this->db->query("select * from region, secteur where region.SEC_CODE = secteur.SEC_CODE");
       return $sql->result();
    }

    public function insertRegion($data){
         $this->db->insert("region",$data);
    }
    
    public function GetSecteur(){
          $sql = $this->db->query("select * from secteur");
       return $sql->result();
    }

}
